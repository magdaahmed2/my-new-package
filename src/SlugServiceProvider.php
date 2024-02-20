<?php
namespace wdd\slug;
use Illuminate\Support\ServiceProvider;
class SlugServiceProvider extends ServiceProvider{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../src/Database/Migrations');
        $this->loadViewsFrom(__DIR__.'/../src/views', namespace: 'wdd/slug'); // Set 'slug' as the namespace for your views
    }
    
public function register()
{

}

}