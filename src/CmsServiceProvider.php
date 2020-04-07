<?php
namespace Anari\Cms;

use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('Cms',function (){
           return new Cms;
        });

        $this->mergeConfigFrom(__DIR__.'/Configs/main.php','cms');
    }

    public function boot(){
      //  return __DIR__.'\routes\web.php';
        $this->loadViewsFrom(__DIR__.'/views','cms');

       // $this->app['router']->middleware('category',\Anari\Cms\Http\Middleware\Category::class);
        
        $this->publishes([
            __DIR__.'/Configs/main.php' => config_path('cms.php'),
            __DIR__.'/views' => base_path('resources/views/cms'),
            __DIR__.'/Migrations' => database_path('migrations'),
        ]);



    }
}