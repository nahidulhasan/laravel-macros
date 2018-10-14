<?php

namespace NahidulHasan\LaravelMacros;


use Collective\Html\HtmlServiceProvider;

/**
 * Class MacrosServiceProvider
 * @package NahidulHasan\Macros
 */
class MacrosServiceProvider extends HtmlServiceProvider
{


    public function boot()
    {
       
        $this->publishes([
            __DIR__.'/Macros.php' => base_path('app/services'),
        ]);

    }


    public function register()
    {
        parent::register();

        $this->app->singleton('form', function ($app) {
            $form = new Macros($app['html'], $app['url'], $app['view'], $app['session.store']->token());
            return $form->setSessionStore($app['session.store']);
        });
    }

}