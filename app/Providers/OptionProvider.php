<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SiteOption;

class OptionProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->globaloptions_to_master();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

     private function globaloptions_to_master(){
        view()->composer('master',function($view){
            $view->with('options',SiteOption::find(1));
        });
    }
}
