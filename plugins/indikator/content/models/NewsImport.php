<?php namespace Indikator\Content\Models;

use Backend\Models\ImportModel;
use Indikator\Content\Models\News as Item;
use Exception;

class NewsImport extends ImportModel
{
    public $table = 'indikator_content_news';

    public $rules = [
        'title' => 'required',
        'slug'  => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:indikator_content_news']
    ];

    public function importData($results, $sessionKey = null)
    {
        foreach ($results as $row => $data) {
            try {
                if (!array_get($data, 'title')) {
                    $this->logSkipped($row, 'Missing title');
                    continue;
                }

                $item = $this->findDuplicateItem($data) ?: Item::make();
                $itemExists = $item->exists;

                $except = ['id'];
                foreach (array_except($data, $except) as $attribute => $value) {
                    $item->{$attribute} = $value ?: null;
                }

                $item->forceSave();

                if ($itemExists) {
                    $this->logUpdated();
                }
                else {
                    $this->logCreated();
                }
            }
            catch (Exception $ex) {
                $this->logError($row, $ex->getMessage());
            }
        }
    }

    protected function findDuplicateItem($data)
    {
        if ($id = array_get($data, 'id')) {
            return Item::find($id);
        }

        $title = array_get($data, 'title');
        $item = Item::where('title', $title);

        if ($slug = array_get($data, 'slug')) {
            $item->orWhere('slug', $slug);
        }

        return $item->first();
    }
}
