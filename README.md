# Kite and Rocket Wordpress Theme Reboot

##### By Anya L. Keller

#### THIS IS AN UNOFFICIAL TEST THEME

This theme built on [Roots Sage](https://roots.io/sage/) which uses [Laravel Blade](https://laravel.com/docs/5.8/blade) templating engine

If you are comfortable working with Roots Sage, just jump to the [theme usage](#theme-usage) section

This README file is specific to this theme but it draws some usage instructions directly from the [default Sage README](roots-sage-README.md) which was renamed to make room for this one.

See [default Sage README](roots-sage-README.md)

#### Site Info

WordPress Info

-   PHP 7.3.5
-   Apache
-   MySQL 8.0.16
-   Wordpress 5.5
-   Wordpress Plugins
    -   [Advanced Custom Fields 5.x](https://wordpress.org/plugins/advanced-custom-fields/)
    -   [Category Order and Taxonomy Terms Order](https://wordpress.org/plugins/taxonomy-terms-order/)
    -   [Post Types Order](https://wordpress.org/plugins/post-types-order/)
    -   [Classic Editor](https://wordpress.org/plugins/classic-editor/)
    -   [SuperCPT 0.2.1](https://wordpress.org/plugins/super-cpt/) -Very old but hey, it works
    -   My werid custom plugin for setting up the custom post types **Remember to upload somewhere**

Template Information

-   Roots Sage 9
-   Larvel Blade 5.something

* * *

# Theme Usage

Table of Contents

<!-- TOC -->

-   [THE RUNDOWN](#the-rundown)
    -   [Setup](#setup)
    -   [Build commands](#build-commands)
    -   [Customizing the theme](#customizing-the-theme)
-   [Customization Cheat Sheet](#customization-cheat-sheet)
    -   [Styles](#styles)
    -   [Javascript files](#javascript-files)
    -   [Theme File Structure](#theme-file-structure)
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

A few directories and files not to manually edit ( it could break the things e.g. build errors that never go away...):

-   `dist/`
-   `vendor/`
-   `node_modules/`   -for the most part
-   `composer.lock`

A few directories and files files you can, and probably will, modify:

-   asset stuff
    -   `resources/assets/fonts`
    -   `resources/assets/images`
    -   `resources/assets/scripts`
    -   `resources/assets/styles`
-   almost all of `resources/views` but probably not `resources/views/app.blade.php`

Route Configuration: `resources/assets/scripts/main.js`

WordPress global php functions: `resources/functions.php`

## Customization Cheat Sheet

### Styles

This theme is built on a customized version of Bootstrap v4.5

#### **I DID modify some of the core bootstrap stuff** but I don't exactly remember which things I tweaked.

That being said, it's nothing to worry about.  Running `yarn build` recompiles bootstrap.

The things I do remember changing were:

-   I added an extra breakpoint class called `ph` at 420px.  It stands for phone and represents the max width of phone screens in portrait (approximately tho). You can use it like any of the bootstrap classes since it's compiled with the bootstrap stuffs in \_variables.scss.
-

All easily modifyable styling can be found in resources/assets/styles/ but ultimatly you should incorperate your changes into bootstrap's scss (in node_modules).  All bootstrap scss variables are defined in node_modules/bootstra/scss/\_variables.scss with some modifacations.

Working with the scss in resources/assets/styles:

**Which file do I write my styling in?**

Because this site requires a lot of styling, it is best to break the code into chunks and import each "chunk" into main.  This simplifies the code a lot and also assaists with debugging.  Luckily, the Roots Sage people set the main.scss file up with imports from a bunch of labeled scss files.

**So, how do I know which file to put my styling code in?**

Take a look at the order of imports in main.scss.  There's a reason it's called **cascading** style sheets.  It's best to leave the order of imports alone.  It's organized pretty well.

In the order they are imported in main.scss, here's how I thought of the usage of the style files

-   common/\_variables.scss - scss variables to be used by any of the other scss modules.
-   common/\_global.scss - I wrote my scss `@mixins` and defined some styles that would apply to every page on the site here
-   components/\_buttons - general button styling.  I also defined the base link styling for `<a>` tags.
-   layouts/\_header - styling for the big kite and rocket header at the top of every page.  The actual header is imported in the root template for every page on the site.  The actual header partial can be found in : `assets/views/partials/header.blade.php`
-   layouts/\_pages.scss - Overall
-   layouts/\_posts.scss - Overall

To change default CSS attribute values and variables, you can overwrite the boostrap name in \_variables.scss
You can view the [bootstrap variable default names here](https://github.com/twbs/bootstrap/blob/v4-dev/scss/_variables.scss)
You can read more on [theming bootstrap here](https://getbootstrap.com/docs/4.5/getting-started/theming/)

To lint styles, run `yarn run lint:styles` or my custom pet name for it, `yarn run lies`

### Javascript files

Working with the scripts in resources/assets/scripts:

#### The script files to be aware of:

-   `main.js` - the primary js file and hub for most js imports
-   `swiperScripts.js` - the code that initializes swiper

### Theme File Structure

#### Larvel Blade Templating

Roots Sage uses [Laravel's Blade templating engine](https://laravel.com/docs/5.8/blade)

The [template file structure](https://roots.io/docs/sage/9.x/blade-templates/#passing-data-to-templates) follows that of wordpress.
The main templates are locatd in resources/views
The partials are locatd in `resources/views/partials`

The main file which wraps ever page is `resources/views/layouts/app.blade.php`.  It is best not to modify this one.

#### The template files to be aware of:

##### Files in BOLD are _relatively safe to edit_

##### The other files should be modified with CARE and CAUTION

-   **`header.blade.php`** - the page header for all views - currently the "KITE AND ROCKET RESEARCH" text
-   `front-page.blade.php` - page view for the main landing/home page; contains post while loop - already set up only to display video posts
    -   **`content-video.blade.php`** - partial for the `<article>` element for every post on the home page
        -   **`entry-meta.blade.php`** - partial describing how each video post will be displayed on the home page in even more detail
-   `single-video.blade.php` - page for a singluar video-post page
    -   **`content-single-video.blade.php`** - the partial for displaying a specific video post on its own page

#### The only wordpress PHP file to care about

`functions.php` - contains integral functions for the site at the top with some custom helper functions at the bottom - you can add helper functions that will be globally available across all the templates

### Blade Tips

Comments
`{{-- this is a comment --}}`

Depositing php values
`{{ php_function_here(params...) }}`

PHP function for getting video metadata inside a while loop
`the_field('field_meta')`
