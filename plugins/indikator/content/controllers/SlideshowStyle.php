<?php namespace Indikator\Content\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Indikator\Content\Models\SlideshowStyle as Item;
use Flash;
use Lang;

class SlideshowStyle extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['indikator.content.slideshow'];

    public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Indikator.Content', 'content', 'slideshow');
    }

    public function onRemove()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $itemId) {
                if (!$item = Item::whereId($itemId)) {
                    continue;
                }

                $item->delete();

                Indikator\Content\Models\Slideshow::where('style', $itemId)->update([
                    'style' => 0
                ]);
            }

            Flash::success(Lang::get('indikator.content::lang.flash.remove'));
        }

        return $this->listRefresh();
    }
}
