<?php namespace Bratao\PredictionIO;

use Illuminate\Support\ServiceProvider;

class PredictionServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    /**
     * Boot the application
     *
     * @return [type] [description]
     */
    public function boot()
    {
        $this->package('bratao/prediction-io');
    }

    /**
     * Register to service provider
     *
     * @return [type] [description]
     */
    public function register()
    {
        $this->app['predictionio'] = $this->app->share(function($app)
        {
            return new PredictionIO;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('predictionio');
    }
}
