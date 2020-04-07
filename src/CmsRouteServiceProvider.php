<?php
/**
 * Created by PhpStorm.
 * User: Mohamad
 * Date: 2020-04-01
 * Time: 3:38 PM
 */

namespace Anari\Cms;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class CmsRouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Anari\Cms\Http\Controllers';

    public function boot()    {
        parent::boot();
    }

    public function map()
    {
        $this->mapCmsRoutes();
    }

    protected function mapCmsRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(__DIR__.'\routes\web.php');
    }




    /**
     * Register a new "before" filter with the router.
     *
     * @param  string|callable $callback
     * @return void
     */
    public function before($callback)
    {
        // TODO: Implement before() method.
    }

    /**
     * Register a new "after" filter with the router.
     *
     * @param  string|callable $callback
     * @return void
     */
    public function after($callback)
    {
        // TODO: Implement after() method.
    }

    /**
     * Register a new filter with the router.
     *
     * @param  string $name
     * @param  string|callable $callback
     * @return void
     */
    public function filter($name, $callback)
    {
        // TODO: Implement filter() method.
    }
}