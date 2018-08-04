<?php namespace Indikator\Content\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Indikator\Content\Models\Tags as Item;
use Flash;
use Lang;
use Db;

class Tags extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['indikator.content.tags'];

    public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Indikator.Content', 'content', 'tags');
    }

    public function onRemove()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $itemId) {
                if (!$item = Item::whereId($itemId)) {
                    continue;
                }

                $item->delete();

                Db::table('indikator_content_tags_blog')->where('tags_id', $itemId)->delete();
                Db::table('indikator_content_tags_news')->where('tags_id', $itemId)->delete();
                Db::table('indikator_content_tags_portfolio')->where('tags_id', $itemId)->delete();
            }

            Flash::success(Lang::get('indikator.content::lang.flash.remove'));
        }

        return $this->listRefresh();
    }
}
