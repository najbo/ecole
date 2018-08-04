# Content Plus plugin
Complete solution for __Blog__, __News__, __Portfolio__, __Slideshow__ and __Testimonials__ in one plugin! The plugin comes with a client-friendly tool for managing contents of your website. The Content Plus plugin contains everything you need!

- [Main features of Blog, News and Portfolio](#features_posts)
- [Main features of Slideshow](#features_slideshow)
- [Main features of Testimonials](#features_testimonials)
- [Advanced permission manager](#advanced_permission)
- [Front-end components](#frontend_components)
- [Automatic statistics](#automatic_statistics)
- [Preview feature](#preview_feature)
- [Quick navigation](#quick_navigation)
- [Special meta tags](#special_metatags)
- [Dashboard widgets](#dashboard_widgets)
- [HTML template variables](#html_template)
- [Supported plugins](#supported_plugins)
- [Recommended plugins](#recommended_plugins)
- [Available languages](#available_languages)

<a name="features_posts"></a>
## Main features of Blog, News and Portfolio
* __SEO friendly__ unique meta title, keywords and description.
* __Multilingual support__ with the RainLab Translation plugin.
* __Sitemap support__ with the RainLab Sitemap plugin.
* __Unlimited attachments__ images and files from the Media.
* __Unlimited categories__ can be attached to the items which can also be organised.
* __Unlimited tags__ can be attached to the items which can also be organised.
* __Automatic statistics__ via frontend component.
* __Preview feature__ for back-end administrators.
* __Import and export__ many different datas.

<a name="features_slideshow"></a>
## Main features of Slideshow
* __Different link types__ blog, news, portfolio and external link.
* __External plugin support__ RainLab Blog.
* __Unlimited categories__ can be attached to the items which can also be organised.
* __Support styles__ set color of texts and backgrounds.
* __Multilingual support__ with the RainLab Translation plugin.
* __Sorting and filtering__ the slideshow items.

<a name="features_testimonials"></a>
## Main features of Testimonials
* __Many parameters__ name, position, company, webpage and profile image.
* __Multilingual support__ with the RainLab Translation plugin.
* __Sorting and filtering__ the testimonials items.

<a name="advanced_permission"></a>
## Advanced permission manager
There are available the following options:
* __Manage post__ (view items)
* __Manage news__ (view items)
* __Manage portfolio__ (view items)
* __Manage slideshow__ (view items)
* __Manage testimonials__ (view items)
* __Manage categories__ (view items)
* __Manage tags__ (view items)
* __View statistics__ (view graphs)
* __Create items__ (global permission)
* __Delete items__ (global permission)
* __Reorder items__ (global permission)

<a name="frontend_components"></a>
## Front-end components
There are 9 components available at this time. They are similar work to the [RainLab Blog components](https://github.com/rainlab/blog-plugin).
* __Blog__: List items and show post.
* __News__: List items and show news.
* __Portfolio__: List items and show portfolio.
* __Testimonials__: List items.
* __Slideshow__: List items.
* __Tags__: List items.

<a name="automatic_statistics"></a>
## Automatic statistics
You just add the "Blog post page" frontend component to the page, where the post appears. If you are logged in as administrator, the counter will not grow. It works any cases, when the visitors open the post details.

<a name="preview_feature"></a>
## Preview feature
You just add the "Blog post page", "News page" and "Portfolio page" frontend components to the current pages. If you modify a Blog, News or Portfolio, the "Preview" link appears along the left of the delete icon.

<a name="quick_navigation"></a>
## Quick navigation
If you modify any content, one or two arrows appear along the right of the delete icon. There are the navigation links. You can simply go to the previous or next content.

<a name="special_metatags"></a>
## Special meta tags
If you use the SEO settings tab of the plugin, you should replace the title and description meta tags with the following lines:
```
<meta name="title" content="{% if this.page.meta_title %}{{ this.page.meta_title }}{% else %}{{ this.page.title }}{% endif %}">
<meta name="description" content="{% if this.page.meta_description %}{{ this.page.meta_description }}{% else %}{{ this.page.description }}{% endif %}">
```

<a name="dashboard_widgets"></a>
## Dashboard widgets
* Summary
* Blog status
* New blog posts
* TOP blog posts
* News status
* New news posts
* TOP news posts
* Portfolio status
* New portfolio
* TOP portfolio

<a name="html_template"></a>
## HTML template variables

### Blog, News and Portfolio
* {{ posts }} - List of posts in array
* {{ post.title }} - Title of post
* {{ post.slug }} - Slug of post
* {{ post.url }} - Full url of post
* {{ post.summary|raw }} - Summary of post
* {{ post.content|raw }} - Content of post
* {{ post.image|media }} - Full url of post image
* {{ post.published_at }} - Published date of post
* {{ post.categories }} - List of post categories in array
* {{ post.tags }} - List of post tags in array
* {{ post.images }} - List of post images in array
* {{ post.files }} - List of post files in array
* {{ related_blog }} - Related blog list of posts in array
* {{ related_news }} - Related news list of posts in array
* {{ related_portfolio }} - Related portfolio list of posts in array
* {{ post.meta_title }} - Meta title of post
* {{ post.meta_keywords }} - Meta keywords of post
* {{ post.meta_desc }} - Meta description of post
* {{ post.author_id }} - ID of author (only blog)
* {{ post.status }} - Status of post (1: published, 2: hide)
* {{ post.featured }} - Is post featured? (1: yes, 2: no)
* {{ posts.render|raw }} - Build-in pagination

### Category of Blog, News and Portfolio
* {{ categories }} - List of categories in array
* {{ category.name }} - Title of category
* {{ category.slug }} - Slug of category
* {{ category.url }} - Full url of category
* {{ category.description|raw }} - Description of category
* {{ category.image|media }} - Full url of category image
* {{ category.meta_title }} - Meta title of category
* {{ category.meta_keywords }} - Meta keywords of category
* {{ category.meta_desc }} - Meta description of category
* {{ category.sort_order }} - Sort order number
* {{ category.status }} - Status of category (1: published, 2: hide)
* {{ category.featured }} - Is category featured? (1: yes, 2: no)

### Slideshow
* {{ posts }} - List of slides in array
* {{ post.title }} - Title of slide
* {{ post.subtitle }} - Subtitle of slide
* {{ post.button }} - Button text of slide
* {{ post.style }} - Style ID of slide (0: none)
* {{ post.type }} - Type of slide (0: none, 1: page, 2: blog, 3: news, 4: portfolio, 5: link, 6: RainLab blog)
* {{ post.type_page }} - Slug of selected page
* {{ post.type_blog }} - Slug of selected blog
* {{ post.type_news }} - Slug of selected news
* {{ post.type_portfolio }} - Slug of selected portfolio
* {{ post.type_external }} - External link
* {{ post.type_rainlab_blog }} - Slug of selected blog
* {{ post.content|raw }} - Content of slide
* {{ post.image|media }} - Full url of slide image
* {{ post.category }} - Category ID of slide (0: none)
* {{ post.sort_order }} - Order number of slide
* {{ post.status }} - Status of slide (1: published, 2: hide)

### Testimonials
* {{ posts }} - List of testimonials in array
* {{ post.title }} - Title of testimonial
* {{ post.rating }} - Rating of testimonial (numeric: 1-5)
* {{ post.company }} - Company of testimonial
* {{ post.webpage }} - Webpage of testimonial
* {{ post.content|raw }} - Content of testimonial
* {{ post.image|media }} - Full url of testimonial image
* {{ post.name }} - Name of person
* {{ post.position }} - Position of person
* {{ post.published_at }} - Published date of testimonial
* {{ post.status }} - Status of testimonial (1: published, 2: hide)
* {{ post.featured }} - Is testimonial featured? (1: yes, 2: no)

<a name="supported_plugins"></a>
## Supported plugins
* [RainLab Blog](http://octobercms.com/plugin/rainlab-blog)
* [RainLab Pages](http://octobercms.com/plugin/rainlab-pages)
* [RainLab Translate](http://octobercms.com/plugin/rainlab-translate)
* [RainLab Sitemap](http://octobercms.com/plugin/rainlab-sitemap)
* [Indikator Paste Content](http://octobercms.com/plugin/indikator-paste)

<a name="recommended_plugins"></a>
## Recommended plugins
* [Image Resizer](http://octobercms.com/plugin/toughdeveloper-imageresizer)
* [RainLab Sitemap](http://octobercms.com/plugin/rainlab-sitemap)

<a name="available_languages"></a>
## Available languages
* en - English
* hu - Magyar
