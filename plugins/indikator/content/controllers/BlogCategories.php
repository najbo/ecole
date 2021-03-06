<?php namespace Indikator\Content\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Indikator\Content\Models\BlogCategories as Item;
use Flash;
use Lang;
use Db;

class BlogCategories extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
        \Backend\Behaviors\ReorderController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = ['indikator.content.categories'];

    public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Indikator.Content', 'content', 'blog');
    }

    public function onActivate()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $itemId) {
                if (!$item = Item::where('status', 2)->whereId($itemId)) {
                    continue;
                }

                $item->update(['status' => 1]);
            }

            Flash::success(Lang::get('indikator.content::lang.flash.activate'));
        }

        return $this->listRefresh();
    }

    public function onDeactivate()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $itemId) {
                if (!$item = Item::where('status', 1)->whereId($itemId)) {
                    continue;
                }

                $item->update(['status' => 2]);
            }

            Flash::success(Lang::get('indikator.content::lang.flash.deactivate'));
        }

        return $this->listRefresh();
    }

    public function onRemove()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $itemId) {
                if (!$item = Item::whereId($itemId)) {
                    continue;
                }

                $item->delete();

                Db::table('indikator_content_blog_relations')->where('blog_categories_id', $itemId)->delete();
            }

            Flash::success(Lang::get('indikator.content::lang.flash.remove'));
        }

        return $this->listRefresh();
    }

    public function onShowImage()
    {
        $this->vars['title'] = Item::where('image', post('image'))->value('name');
        $this->vars['image'] = '/storage/app/media'.post('image');

        return $this->makePartial('show_image');
    }
}
