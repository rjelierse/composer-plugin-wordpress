# composer-plugin-wordpress

Composer plugin for installing Wordpress themes and plugins

## Installing a Wordpress plugin

In your Wordpress root directory, require the package through Composer:

    $ composer require <example/wordpress-plugin>

## Set up your Wordpress plugin

To enable your Wordpress plugin or theme for Composer, create a composer.json file in the root directory of your plugin or theme:

    $ composer init

Enter the details that are asked of you. When prompted for a type, enter `wordpress-plugin` or `wordpress-theme` depending on the type of package you are creating.

In the package requirements, add `sparse/composer-plugin-wordpress`.
