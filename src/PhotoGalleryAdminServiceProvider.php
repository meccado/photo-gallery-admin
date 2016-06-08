<?php

namespace Meccado\PhotoGalleryAdmin;

use Illuminate\Support\ServiceProvider;

class PhotoGalleryAdminServiceProvider extends ServiceProvider
{
  /**
  * Perform post-registration booting of services.
  *
  * @return void
  */
  public function boot()
  {
    if (! $this->app->routesAreCached()) {
      require __DIR__.'/Http/routes.php';
    }

    $configFiles = ['gallery'];
    foreach ($configFiles as $config) {
      $this->mergeConfigFrom(__DIR__."/config/{$config}.php", 'photo_gallery');
    }

    $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'photo_gallery');
    $this->loadViewsFrom(__DIR__ . '/resources/views', 'photo_gallery');

    //Publish views
    $this->publishes([
      __DIR__.'/resources/views' => resource_path('views'),
    ], 'views');

    //Publish translations
    $this->publishes([
      __DIR__.'/resources/lang/' => resource_path('lang/'),
    ], 'translations');

    // Publish a config file
    $this->publishes([
      __DIR__.'/config/gallery.php' => config_path('gallery.php'),
    ], 'config');

    //Publish migrations
    $this->publishes([
      __DIR__ . '/database/migrations' => database_path('migrations'),
      //__DIR__ . '/database/seeds' => database_path('seeds'),
    ], 'migrations');

    $this->publishes([
      __DIR__ . '/Http/Controllers/Admin/'    => app_path('/Http/Controllers/Admin/'),
    ], 'controllers');
    $this->publishes([
      __DIR__ . '/Models/Admin/' => app_path(),
    ], 'models');
  }

  /**
  * Register any package services.
  *
  * @return void
  */
  public function register()
  {
    $this->app->bind('photo_gallery', function($app){
      return new PhotoGalleryAdmin;
    });

    //Register dependency packages
    $this->app->register('Collective\Html\HtmlServiceProvider');
    $this->app->register('Intervention\Image\ImageServiceProvider');
    $this->app->register('Meccado\AclAdminControlPanel\AclAdminControlPanelServiceProvider');

    // Register dependancy aliases
    $this->app->booting(function()
    {
      $loader = \Illuminate\Foundation\AliasLoader::getInstance();
      $loader->alias('Form', 'Collective\Html\FormFacade');
      $loader->alias('HTML', 'Collective\Html\HtmlFacade');
      $loader->alias('Image', 'Intervention\Image\Facades\Image');
    });
  }
}
