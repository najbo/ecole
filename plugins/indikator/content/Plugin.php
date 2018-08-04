<?php namespace Indikator\Content;

use System\Classes\PluginBase;
use Backend;
use Lang;
use Event;
use Indikator\Content\Models\Blog;
use Indikator\Content\Models\News;
use Indikator\Content\Models\Portfolio;
use Indikator\Content\Models\Tags;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'indikator.content::lang.plugin.name',
            'description' => 'indikator.content::lang.plugin.description',
            'author'      => 'indikator.content::lang.plugin.author',
            'icon'        => 'icon-file-text-o',
            'homepage'    => 'http://www.indikator.hu'
        ];
    }

    public function registerNavigation()
    {
        return [
            'content' => [
                'label'       => 'indikator.content::lang.plugin.title',
                'url'         => Backend::url('indikator/content/blog'),
                'icon'        => 'icon-file-text-o',
                'iconSvg'     => 'plugins/indikator/content/assets/images/content-icon.svg',
                'permissions' => ['indikator.content.*'],
                'order'       => 201,

                'sideMenu' => [
                    'blog' => [
                        'label'       => 'indikator.content::lang.menu.blog',
                        'url'         => Backend::url('indikator/content/blog'),
                        'icon'        => 'icon-edit',
                        'permissions' => ['indikator.content.blog']
                    ],
                    'news' => [
                        'label'       => 'indikator.content::lang.menu.news',
                        'url'         => Backend::url('indikator/content/news'),
                        'icon'        => 'icon-bullhorn',
                        'permissions' => ['indikator.content.news']
                    ],
                    'portfolio' => [
                        'label'       => 'indikator.content::lang.menu.portfolio',
                        'url'         => Backend::url('indikator/content/portfolio'),
                        'icon'        => 'icon-th-large',
                        'permissions' => ['indikator.content.portfolio']
                    ],
                    'slideshow' => [
                        'label'       => 'indikator.content::lang.menu.slideshow',
                        'url'         => Backend::url('indikator/content/slideshow'),
                        'icon'        => 'icon-file-image-o',
                        'permissions' => ['indikator.content.slideshow']
                    ],
                    'testimonials' => [
                        'label'       => 'indikator.content::lang.menu.testimonials',
                        'url'         => Backend::url('indikator/content/testimonials'),
                        'icon'        => 'icon-comments-o',
                        'permissions' => ['indikator.content.testimonials']
                    ],
                    'tags' => [
                        'label'       => 'indikator.content::lang.menu.tags',
                        'url'         => Backend::url('indikator/content/tags'),
                        'icon'        => 'icon-tags',
                        'permissions' => ['indikator.content.tags']
                    ],
                    'statistics' => [
                        'label'       => 'indikator.content::lang.menu.statistics',
                        'url'         => Backend::url('indikator/content/statistics'),
                        'icon'        => 'icon-area-chart',
                        'permissions' => ['indikator.content.statistics']
                    ]
                ]
            ]
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'Indikator\Content\ReportWidgets\Summary' => [
                'label'   => 'indikator.content::lang.widget.summary',
                'context' => 'dashboard'
            ],
            'Indikator\Content\ReportWidgets\StatusBlog' => [
                'label'   => 'indikator.content::lang.widget.statusblog',
                'context' => 'dashboard'
            ],
            'Indikator\Content\ReportWidgets\NewBlog' => [
                'label'   => 'indikator.content::lang.widget.newblog',
                'context' => 'dashboard'
            ],
            'Indikator\Content\ReportWidgets\TopBlog' => [
                'label'   => 'indikator.content::lang.widget.topblog',
                'context' => 'dashboard'
            ],
            'Indikator\Content\ReportWidgets\StatusPosts' => [
                'label'   => 'indikator.content::lang.widget.statusposts',
                'context' => 'dashboard'
            ],
            'Indikator\Content\ReportWidgets\NewPosts' => [
                'label'   => 'indikator.content::lang.widget.newposts',
                'context' => 'dashboard'
            ],
            'Indikator\Content\ReportWidgets\TopPosts' => [
                'label'   => 'indikator.content::lang.widget.topposts',
                'context' => 'dashboard'
            ],
            'Indikator\Content\ReportWidgets\StatusPortfolio' => [
                'label'   => 'indikator.content::lang.widget.statusportfolio',
                'context' => 'dashboard'
            ],
            'Indikator\Content\ReportWidgets\NewPortfolio' => [
                'label'   => 'indikator.content::lang.widget.newportfolio',
                'context' => 'dashboard'
            ],
            'Indikator\Content\ReportWidgets\TopPortfolio' => [
                'label'   => 'indikator.content::lang.widget.topportfolio',
                'context' => 'dashboard'
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            'Indikator\Content\Components\BlogPage'         => 'blogPage',
            'Indikator\Content\Components\BlogList'         => 'blogList',
            'Indikator\Content\Components\NewsPage'         => 'newsPage',
            'Indikator\Content\Components\NewsList'         => 'newsList',
            'Indikator\Content\Components\PortfolioPage'    => 'portfolioPage',
            'Indikator\Content\Components\PortfolioList'    => 'portfolioList',
            'Indikator\Content\Components\SlideshowList'    => 'slideshowList',
            'Indikator\Content\Components\TestimonialsList' => 'testimonialsList',
            'Indikator\Content\Components\TagsList'         => 'tagsList'
        ];
    }

    public function registerPermissions()
    {
        return [
            'indikator.content.blog' => [
                'tab'   => 'indikator.content::lang.plugin.title',
                'label' => 'indikator.content::lang.permission.blog',
                'order' => 100,
                'roles' => ['publisher']
            ],
            'indikator.content.news' => [
                'tab'   => 'indikator.content::lang.plugin.title',
                'label' => 'indikator.content::lang.permission.news',
                'order' => 150,
                'roles' => ['publisher']
            ],
            'indikator.content.portfolio' => [
                'tab'   => 'indikator.content::lang.plugin.title',
                'label' => 'indikator.content::lang.permission.portfolio',
                'order' => 200,
                'roles' => ['publisher']
            ],
            'indikator.content.slideshow' => [
                'tab'   => 'indikator.content::lang.plugin.title',
                'label' => 'indikator.content::lang.permission.slideshow',
                'order' => 250,
                'roles' => ['publisher']
            ],
            'indikator.content.testimonials' => [
                'tab'   => 'indikator.content::lang.plugin.title',
                'label' => 'indikator.content::lang.permission.testimonials',
                'order' => 300,
                'roles' => ['publisher']
            ],
            'indikator.content.categories' => [
                'tab'   => 'indikator.content::lang.plugin.title',
                'label' => 'indikator.content::lang.permission.categories',
                'order' => 350,
                'roles' => ['publisher']
            ],
            'indikator.content.tags' => [
                'tab'   => 'indikator.content::lang.plugin.title',
                'label' => 'indikator.content::lang.permission.tags',
                'order' => 400,
                'roles' => ['publisher']
            ],
            'indikator.content.statistics' => [
                'tab'   => 'indikator.content::lang.plugin.title',
                'label' => 'indikator.content::lang.permission.statistics',
                'order' => 450,
                'roles' => ['publisher']
            ],
            'indikator.content.create' => [
                'tab'   => 'indikator.content::lang.plugin.title',
                'label' => 'indikator.content::lang.permission.create',
                'order' => 500,
                'roles' => ['publisher']
            ],
            'indikator.content.delete' => [
                'tab'   => 'indikator.content::lang.plugin.title',
                'label' => 'indikator.content::lang.permission.delete',
                'order' => 550,
                'roles' => ['publisher']
            ],
            'indikator.content.reorder' => [
                'tab'   => 'indikator.content::lang.plugin.title',
                'label' => 'indikator.content::lang.permission.reorder',
                'order' => 600,
                'roles' => ['publisher']
            ],
            'indikator.content.import_export' => [
                'tab'   => 'indikator.content::lang.plugin.title',
                'label' => 'indikator.content::lang.permission.import_export',
                'order' => 650,
                'roles' => ['publisher']
            ]
        ];
    }

    public function registerListColumnTypes()
    {
        return [
            'status' => function($value) {
                $text = [
                    1 => 'active',
                    2 => 'inactive'
                ];

                $class = [
                    1 => 'text-info',
                    2 => 'text-danger'
                ];

                return '<span class="oc-icon-circle '.$class[$value].'">'.Lang::get('indikator.content::lang.form.status_'.$text[$value]).'</span>';
            },
            'featured' => function($value) {
                $text = [
                    1 => 'true',
                    2 => 'false'
                ];

                $class = [
                    1 => 'text-info',
                    2 => ''
                ];

                return '<span class="oc-icon-circle '.$class[$value].'">'.Lang::get('backend::lang.list.column_switch_'.$text[$value]).'</span>';
            }
        ];
    }

    public function boot()
    {
        Event::listen('pages.menuitem.listTypes', function()
        {
            return [
                'blog-list'      => 'indikator.content::lang.sitemap.blog_list',
                'blog-page'      => 'indikator.content::lang.sitemap.blog_page',
                'news-list'      => 'indikator.content::lang.sitemap.news_list',
                'news-page'      => 'indikator.content::lang.sitemap.news_page',
                'portfolio-list' => 'indikator.content::lang.sitemap.portfolio_list',
                'portfolio-page' => 'indikator.content::lang.sitemap.portfolio_page',
                'tags-list'      => 'indikator.content::lang.sitemap.tags_list'
            ];
        });

        Event::listen('pages.menuitem.getTypeInfo', function($type)
        {
            if ($type == 'blog-list' || $type == 'blog-page') {
                return Blog::getMenuTypeInfo($type);
            }

            else if ($type == 'news-list' || $type == 'news-page') {
                return News::getMenuTypeInfo($type);
            }

            else if ($type == 'portfolio-list' || $type == 'portfolio-page') {
                return Portfolio::getMenuTypeInfo($type);
            }

            else if ($type == 'tags-list') {
                return Tags::getMenuTypeInfo($type);
            }
        });

        Event::listen('pages.menuitem.resolveItem', function($type, $item, $url, $theme)
        {
            if ($type == 'blog-list' || $type == 'blog-page') {
                return Blog::resolveMenuItem($item, $url, $theme);
            }

            else if ($type == 'news-list' || $type == 'news-page') {
                return News::resolveMenuItem($item, $url, $theme);
            }

            else if ($type == 'portfolio-list' || $type == 'portfolio-page') {
                return Portfolio::resolveMenuItem($item, $url, $theme);
            }

            else if ($type == 'tags-list') {
                return Tags::resolveMenuItem($item, $url, $theme);
            }
        });
    }
}
