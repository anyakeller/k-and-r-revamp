# Kite and Rocket Wordpress Theme Reboot

###### By Anya L. Keller

**THIS IS AN UNOFFICIAL TEST THEME**

This theme built on [Roots Sage v9.0.9](https://roots.io/sage/) which uses [Laravel's Blade](https://laravel.com/docs/5.8/blade) templating engine

If you are comfortable working with Roots Sage, just jump to the [theme usage](#theme-usage) section

This README file is specific to this theme but it draws some usage instructions directly from the [default Sage README](roots-sage-README.md) which was renamed to make room for this one.

See [default Sage README](roots-sage-README.md)

#### Site Info

WordPress Info

-   PHP 7.4.1
-   Apache
-   MySQL 8.0.16
-   Wordpress 5.5
-   Wordpress Plugins
    -   [Admin Columns v4.2.2](https://wordpress.org/plugins/codepress-admin-columns/)
    -   [Admin Menu Editor v1.9.7](https://wordpress.org/plugins/admin-menu-editor/)
    -   [Advanced Custom Fields 5.x](https://wordpress.org/plugins/advanced-custom-fields/)
    -   [Category Order and Taxonomy Terms Order](https://wordpress.org/plugins/taxonomy-terms-order/)
    -   [Classic Editor](https://wordpress.org/plugins/classic-editor/)
    -   [iThemes Security](https://wordpress.org/plugins/better-wp-security/)
    -   [SuperCPT 0.2.1](https://wordpress.org/plugins/super-cpt/) -Very old but hey, it works
    -   [Post Types Order v1.9.5.2](https://wordpress.org/plugins/post-types-order/)
    -   [Really Simple SSL v4.0.3](https://wordpress.org/plugins/really-simple-ssl/)
    -   [Yoast SEO v15.4](https://wordpress.org/plugins/wordpress-seo/)
    -   My werid custom plugin for setting up the custom post types **TODO: Remember to upload somewhere**

Template Information

-   Roots Sage v9.0.9
-   Laravel Blade 5.something

* * *

# Theme Usage

Table of Contents

<!-- TOC -->

-   [Site Info](#site-info)
-   [THE RUNDOWN](#the-rundown)
    -   [Setup](#setup)
    -   [Build commands](#build-commands)
    -   [Customizing the theme](#customizing-the-theme)
-   [Customization Cheat Sheet](#customization-cheat-sheet)
    -   [Styles](#styles)
    -   [Javascript files](#javascript-files)
        -   [The script files to be aware of:](#the-script-files-to-be-aware-of)
    -   [Theme File Structure](#theme-file-structure)
        -   [Laravel Blade Templating](#laravel-blade-templating)
        -   [Some (but not all) template files to be aware of which aren't exactly self-explanitory:](#some-but-not-all-template-files-to-be-aware-of-which-arent-exactly-self-explanitory)
        -   [The only wordpress PHP file to care about](#the-only-wordpress-php-file-to-care-about)
    -   [Roots Sage](#roots-sage)
    -   [Blade Tips](#blade-tips)

<!-- /TOC -->

* * *

## THE RUNDOWN

###### ESSENTIAL INFORMATION TO GET STARTED

### Setup

This theme uses yarn over npm.  Still not entirely sure of the difference but I've just been using yarn because the Sage docs said to.

See the sage README.md for
[requirements](roots-sage-README.md#Requirements) and very detailed setup instructions under [theme development](roots-sage-README.md#theme-development)

### Build commands

###### directly copied from the sage readme

-   `yarn start` — Compile assets when file changes are made, start Browsersync session
-   `yarn build` — Compile and optimize the files in your assets directory
-   `yarn build:production` — Compile assets for production

### Customizing the theme

[Full sage theme file structure](roots-sage-README.md#theme-structure)

General Summary

A few directories and files not to manually edit ( edits could break the things, e.g. build errors that never go away):

-   `dist/` - this is where the build goes
-   `vendor/`
-   `node_modules/` - yarn handles all of this
-   `composer.lock`

A few directories and files files you can, and probably will, modify:

-   asset stuff: `resources/assets/`
    -   `images/`
    -   `scripts/`
    -   `styles/`
-   almost all of `resources/views` but probably not `resources/views/app.blade.php`
-   be careful with  `app/`

JS route configuration and routes: `resources/assets/scripts/main.js` and `resources/assets/scripts/routes`

WordPress global php functions are usually in resources/functions.php but now the filters, helpers, and setup stuff should be broken into the corresponding php files in `app/` such as `filters.php`, `helpers.php`, and `setup .php`

Route-specific (controllers) PHP functions can be found in `app/Controllers`.  These define functions that run when a page is loaded or functions a page can call.

## Customization Cheat Sheet

### Styles

This theme is built on a customized version of Bootstrap v4.5.3
All customizations to bootstrap are in `assets/styles/common/_bootstrap-variables.scss`

Non-boostrap-related styles are broken into corresponding scss files which are imported into main.scss.

All scss modules in `node_modules` are also imported into `main.scss`

**Working with the scss in resources/assets/styles:**

**Which file do I write my styling in?**

Because this site requires a lot of styling, it is best to break the code into chunks and import each "chunk" into main.  This simplifies the code a lot and also assists with debugging.  Luckily, the Roots Sage people set the main.scss file up with imports from a bunch of labeled scss files.

**So, how do I know which file to put my styling code in?**

Take a look at the order of imports in main.scss.  There's a reason css is called **cascading** style sheets.  It's best to leave the order of imports alone.  It's already organized pretty well.

In the order they are imported in main.scss, here's how I thought of the usage of the style files

-   `common/bootstrap-variables` - scss variables for customizing bootstrap
-   `common/global-variables` - scss variables for customizing any other packages and for your own use
-   `./autoload/**/*` - loads `_bootstrap.scss` and `_npm-dependencies` WHICH YOU SHOULD USE
-   `common/global` - I honestly am just using it to store stuff I need everything else to be able to acess (e.g `@mixin`, font stuff...)
-   `components/global_swiper` - swiper styling for all swipers (since theres one for the video post page and one on the ideabank page)
-   `components/buttons` - general button styling.  I also defined the base link styling for `<a>` tags.
-   `components/forms` - the sidebar search form is the only current form
-   `components/main-video` - styling the main video player (the wistia video div)
-   `components/video-sharing-modal` - styling the button and modal for sharing the main video
-   `components/swiper-video-category-row` - styling the video category rows
-   `components/video-cards` - because the `.video-card` class is used in both the video post pages and the search results, the styling here is not used in the scss file for posts
-   `layouts/header` - styling for the big kite and rocket header at the top of every page.  The actual header is imported in the root template for every page on the site.  The actual header partial can be found in : `assets/views/partials/header.blade.php`
-   `layouts/sidebar` - styling for all the nav menus
-   `layouts/footer` - footer styling
-   `layouts/pages` - STATIC PAGES (basically everything but the post pages)
-   `layouts/posts` - Just for the single-view posts/home page

You can view the [bootstrap variable defaults here](https://github.com/twbs/bootstrap/blob/v4-dev/scss/_variables.scss)
You can read more on [theming bootstrap here](https://getbootstrap.com/docs/4.5/getting-started/theming/)

To lint styles, run `yarn run lint:styles` or my custom pet name for it, `yarn run lies`

### Javascript files

Working with the scripts in `resources/assets/scripts`:

#### The script files to be aware of:

-   `main.js` - the primary js file and hub for most js imports and route setup
-   `routes/` - directory with all the routes
    -   `routes/common.js` - the code that runs on every page that enables the share button
    -   `routes/ideabank.js` - the code that runs on ideabank that initializes swiper
    -   `routes/singleKrvideo.js` - the code that runs on a krvideo post page that initializes swiper and

### Theme File Structure

#### Laravel Blade Templating

Roots Sage uses [Laravel's Blade templating engine](https://laravel.com/docs/5.8/blade)

The [template file structure](https://roots.io/docs/sage/9.x/blade-templates/#passing-data-to-templates) follows that of wordpress.
The main templates are located in `resources/views`
The partials are located in `resources/views/partials`

The main file which wraps every post page is `resources/views/layouts/app.blade.php`.  It is best not to modify this one.

#### Some (but not all) template files to be aware of which aren't exactly self-explanitory:

##### All file modifications should me made with with CARE and CAUTION as they are all linked to one another

-   `front-page.blade.php` - page view for the main landing/home page; - redirects to featured video, otherwise uses latest video
-   `single-krvideo.blade.php` - page for a singluar video-post page - main video at top, the rest of the video posts in their categroies below
    -   `partials/content-single-krvideo.blade.php` - the partial for displaying a specific video post on its own page - uses main-video
        -   `components/main-video.blade.php` - the partial for displaying the main video player and description
    -   `components/swiper-video-category-row.blade.php` - the partial for displaying the video category swiper rows
        -   `components/video-card.blade.php` - individual video card (for use with swiper slides or not)
-   `search.blade.php` - the search results page
-   `page-ideabank.blade.php` - the ideabank page
-   `page-labcam.blade.php` - the labcam page

#### The only normal wordpress PHP files to sort of care about

While `functions.php` ususally contains integral functions for site setup and helper functions - with Sage it's best to stick them in one of the files in `app/`

### Roots Sage

The directory `app/` has a lot of stuff that goes above and beyond wodpress's functions.php.  The files `filters.php`, `helpers.php`, and `setup.php` should be used in the place of functions.php.

**On controllers**
`app/Controllers/` is a wonderful directory.  Here's where you can define php funtions to either automatically run once a page runs or define helper functions for pages to use when needed.

**On helper functions**
Global functions are not always acessible from all files, use `\` (e.g. `\WP_Query($args);`) to acess them.  Other functions need to be referenced by their namespace, e.g. `App\get_latest_krvideo()`

You can read more about [namespaces here](https://roots.io/upping-php-requirements-in-your-wordpress-themes-and-plugins/).

### Blade Tips

Comments
`{{-- this is a comment --}}`

Depositing php values (without needing to use `echo`)
`{{ php_function_here(params...) }}`

PHP function for getting video metadata inside a while loop
`the_field('field_meta')`
