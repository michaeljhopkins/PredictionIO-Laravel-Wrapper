<?php namespace Hopkins\PredictionWrapper\Provider;

use Config;
use Illuminate\Support\ServiceProvider;
use predictionio\EngineClient;
use predictionio\EventClient;

class PredictionWrapperServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application
     *
     */
    public function boot()
    {
    }

    /**
     * Register to service provider
     *
     */
    public function register()
    {
        $this->app['eventclient'] = $this->app->share(function($app)
        {
            return new EventClient(Config::get('services.predictionio.key'));
        });
        $this->app['engineclient'] = $this->app->share(function($app)
        {
            return new EngineClient();
        });


    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('eventclient','engineclient');
    }

}
