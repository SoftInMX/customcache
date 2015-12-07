<?php
namespace SilexCustomcache\Provider;
use Silex\Application;
use Silex\ServiceProviderInterface;
use Cache;

class CacheServiceProvider implements ServiceProviderInterface
{
    public function boot(Application $app)
    {
        
    }
    
    public function register(Application $app)
    {
    	$app['cache'] = $app->share(function(Application $app) {
	    	if (!isset($app['cache.options'])) {
	    		$app['cache.options'] = array();
	    	}
	    	
	        return new Cache($app['cache.options']);
        });
    }
}
