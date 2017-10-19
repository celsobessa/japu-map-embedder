# Japu Map Embedder

This plugin allows the embedding of [Japu - Rotas das Vertentes](https://www.japuapp.com.br) culture and tourism maps on a WordPress website either by using a shortcode or enabling a map appended to the main content of a page or post

## Getting Started

### Prerequisites

ATTENTION: this plugin is in it's initial development. There may be some bugs and there's no officials support yet. If you have any problem using it, open a issue on it's github repository and we will get in touch as soon as possible.

WordPress  > 4.7
PHP > 7.0

### Installing

1. Download the japu-map-embedder from master branch in the [official Github repository](https://github.com/2aces/japu-map-embedder/)
2. In the WordPress admin, got to Plugins -> Add New Plugin
3. Click on Click on Upload Plugin, choose the zip file and click on install
⋅⋅1. Also, you can upload `japu-map-embedder` folder to the `/wp-content/plugins/` directory instead of steps 2 and 3
4. Activate the plugin through the 'Plugins' menu in WordPress
5. If you are a registered Japu - Rotas das Vertentes partner, go to Customizer -> Japu App Integration and set you Partner ID

### Use

#### alternative 1 (recommended): automatic prepend to post/page content

This is the ideal and optimized way of embedding a Japu - Rotas das Vertentes webapp map.

Tick the Add Japu Map checkbox in the side area of post and page editors (below publish actions) and the map  will be appended automaticall to the main post/page content area in the front-end.

If you are a registered Japu - Rotas das Vertentes partner, set your Partner ID on Customizer -> Japu App Integration and it will be automaticall used with your appended maps for customizing some map styles and content.

#### alternative 2: japumap shortcode

Use the `[japumap]` shortcode anywhere in the main content of a post or page. It will be transformed into a map in the front end inside the content area. If you are a  Japu - Rotas ds Vertentes partner, you can pass a `partnerid` parameter and some map styles and content will be customized.

## Screenshots

### Installation Screenshots

Click on Add New Plugin
![Click on Add New Plugin][Click on Add New Plugin]

Click on Upload Plugin
![Click on Upload Plugin][Click on Upload Plugin]

Choose file and click on install
![Choose file and click on install][Choose file and click on install]

[Click on Add New Plugin]: ./screenshot-4.jpg
[Click on Upload Plugin]: ./screenshot-5.jpg
[Choose file and click on install]: ./screenshot-6.jpg

### Setup Screenshots
Click on Customizer
![Click on Customizer][Click on Customizer]

Click on Japu App Integration
![Click on Japu App Integration][Click on Japu App Integration]

Add your Partner ID
![Add your Partner ID][Add your Partner ID]

[Click on Customizer]: ./screenshot-7.jpg
[Click on Japu App Integration]: ./screenshot-8.jpg
[Add your Partner ID]: ./screenshot-9.jpg

### Setup Screenshots

Click on Add a Japu Map in a page or post...
![Click on Add a Japu Map in a page or post...][Click on Add a Japu Map in a page or post...]

... and will be automatically appended to the main content area
![... and will be automatically appended to the main content area][... and will be automatically appended to the main content area]

You can add a shortcode to any post type content to embed a Japu map
![You can add a shortcode to any post type content to embed a Japu map][You can add a shortcode to any post type content to embed a Japu map]

If you are registered partner, you can use your partnerid in the shortcode
![If you are registered partner, you can use your partnerid in the shortcode][If you are registered partner, you can use your partnerid in the shortcode]

The shortcode will be transformed in a map in the frontend
![The shortcode will be transformed in a map in the frontend][The shortcode will be transformed in a map in the frontend]


[Click on Add a Japu Map in a page or post...]: ./screenshot-10.jpg
[... and will be automatically appended to the main content area]: ./screenshot-11.jpg
[You can add a shortcode to any post type content to embed a Japu map]: ./screenshot-12.jpg
[If you are registered partner, you can use your partnerid in the shortcode]: ./screenshot-13.jpg
[The shortcode will be transformed in a map in the frontend]: ./screenshot-14.jpg

## Built With

* [WordPress Plugin Boilerplate](https://github.com/DevinVinson/WordPress-Plugin-Boilerplate)
* [Japu App](https://www.japuapp.com.br/)

## Contributing

Soon

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/2aces/japu-map-embedder/tags).

## Authors

* **Celso Bessa** - *Initial work* - [2Aces](https://github.com/2aces/)

## License

This project is licensed under the GNU GENERAL PUBLIC LICENSE - see the [LICENSE.txt](LICENSE.txt) file for details