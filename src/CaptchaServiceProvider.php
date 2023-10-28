<?php
namespace Xr\Captcha;
use Illuminate\Support\ServiceProvider;
class CaptchaServiceProvider extends ServiceProvider
{
    public function boot() : void {
        // Publish configuration files
        $this->publishes([
            __DIR__ . '/../config/captcha.php' => config_path('captcha.php')
        ], 'config');
    }
    public function register() : void {
        // Merge configs
        $this->mergeConfigFrom(
            __DIR__ . '/../config/captcha.php',
            'captcha'
        );
        // Bind captcha
        $this->app->bind('captcha', function ($app) {
            return new Captcha( $app['config']);
        });
    }
}