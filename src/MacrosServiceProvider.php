<?php

namespace NahidulHasan\LaravelMacros;


use Collective\Html\HtmlServiceProvider;

/**
 * Class MacroServiceProvider
 * @package NahidulHasan\Macros
 */
class MacrosServiceProvider extends HtmlServiceProvider
{

    public function register()
    {
        parent::register();

        $this->app->singleton('form', function ($app) {
            $form = new Macros($app['html'], $app['url'], $app['view'], $app['session.store']->token());
            return $form->setSessionStore($app['session.store']);
        });
    }

}