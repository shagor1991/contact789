<?php
namespace Shagor\ContactA2Z;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views/', 'contacta2z');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations/');

        $this->mergeConfigFrom(__DIR__.'/config/contact.php', 'contactdddas123');
        $this->publishes([
          __DIR__.'/config/contact.php' => config_path('contact.php'),
      ]);
        
    }

    public function register()
    {
       
    }
}