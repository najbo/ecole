<?php namespace Indikator\Content\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Statistics extends Controller
{
    public $requiredPermissions = ['indikator.content.statistics'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Indikator.Content', 'content', 'statistics');
    }

    public function index()
    {
        $this->pageTitle = 'indikator.content::lang.menu.statistics';
    }
}
