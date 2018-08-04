<?php namespace Indikator\Content\Models;

use Model;
use Db;

class Testimonials extends Model
{
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    protected $table = 'indikator_content_testimonials';

    public $rules = [
        'name'     => 'required',
        'content'  => 'required',
        'rating'   => 'required|between:1,5|numeric',
        'featured' => 'required|between:1,2|numeric',
        'status'   => 'required|between:1,2|numeric'
    ];

    public $translatable = [
        'title',
        'name',
        'position',
        'company',
        'webpage',
        'content'
    ];

    protected $dates = [
        'published_at'
    ];

    public static $allowedSorting = [
        'sort_order asc',
        'sort_order desc',
        'title asc',
        'title desc',
        'created_at asc',
        'created_at desc',
        'updated_at asc',
        'updated_at desc',
        'random'
    ];

    public function beforeSave()
    {
        if (substr_count($this->webpage, 'http') == 0) {
            $this->webpage = 'http://'.$this->webpage;
        }
    }

    public function scopeIsPublished($query)
    {
        if (BackendAuth::check()) {
            return $query->where('status', 1);
        }

        return $query
            ->where('status', 1)
            ->whereNotNull('published_at')
            ->where('published_at', '<', Carbon::now())
        ;
    }

    public function scopeListFrontEnd($query, $options)
    {
        /*
         * Default options
         */
        extract(array_merge([
            'page'      => 1,
            'perPage'   => 30,
            'sort'      => 'created_at',
            'search'    => '',
            'published' => true
        ], $options));

        $searchableFields = [
            'title',
            'slug',
            'summary',
            'content'
        ];

        if ($published) {
            $query->isPublished();
        }

        /*
         * Sorting
         */
        if (!is_array($sort)) {
            $sort = [$sort];
        }

        foreach ($sort as $_sort) {
            if (in_array($_sort, array_keys(self::$allowedSorting))) {
                $parts = explode(' ', $_sort);

                if (count($parts) < 2) {
                    array_push($parts, 'desc');
                }

                list($sortField, $sortDirection) = $parts;

                if ($sortField == 'random') {
                    $sortField = Db::raw('RAND()');
                }

                $query->orderBy($sortField, $sortDirection);
            }
        }

        /*
         * Search
         */
        $search = trim($search);
        if (strlen($search)) {
            $query->searchWhere($search, $searchableFields);
        }

        return $query->paginate($perPage, $page);
    }
}
