<?php
namespace Xr\Captcha;
use Illuminate\Support\ServiceProvider;
class CaptchaServiceProvider extends ServiceProvider
{
    public function boot() : void {

    }
    public function register() : void {
        // Merge configs
//        $this->mergeConfigFrom(
//            __DIR__ . '/../config/captcha.php',
//            'captcha'
//        );
    }
}