<?php

namespace App\Providers;

use App\Models\ContentCategory;
use App\Models\Option;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $setting = [];

        ### Get Category
        $setting['category'] = ContentCategory::with('childs')->where('parent_id','0')->get()->random(8);
        ### Get Site Setting
        $setting['site'] = arrayToList(Option::all(),'option','value');


        ### share setting variable to all views
        view()->share('setting',$setting);

        date_default_timezone_set('Asia/Dhaka');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
