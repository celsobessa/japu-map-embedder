# Japu Map Embedder

This plugin allows the embedding of [Japu - Rotas dsa Vretentes](https://www.japuapp.com.br) culture and tourism maps on a WordPress website either by using a shortcode or enabling a map appended to the main content of a page or post

## Getting Started

### Prerequisites

ATTENTION: this plugin is in it's initial development. There may be some bugs and there's no officials support yet. If you have any problem using it, open a issue on it's github repository and we will get in touch as soon as possible.

WordPress  > 4.7
PHP > 7.0

### Installing

1. Download the master branch from the official Github repository
2. Upload `japu-map-embedder` folder to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. If you are a registered Japu - Rotas das Vertentes partner, go to Customizer -> Japu App Integration and set you Partner ID

### Use

#### alternative 1 (recommended): automatic prepend to post/page content

This is the ideal and optimized way of embedding a Japu - Rotas das Vertentes webapp map.

Tick the Add Japu Map checkbox in the side area of post and page editors (below publish actions) and the map  will be appended automaticall to the main post/page content area in the front-end.

If you are a registered Japu - Rotas das Vertentes partner, set your Partner ID on Customizer -> Japu App Integration and it will be automaticall used with your appended maps for customizing some map styles and content.

#### alternative 2: japumap shortcode

Use the `[japumap]` shortcode anywhere in the main content of a post or page. It will be transformed into a map in the front end inside the content area. If you are a  Japu - Rotas ds Vertentes partner, you can pass a `partnerid` parameter and some map styles and content will be customized.

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