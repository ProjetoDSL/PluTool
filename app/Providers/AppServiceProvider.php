<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\ViewComposers\AppComposer;
use App\ViewComposers\ElicitateComposer;

use App\Models\Phase;
use App\Models\Task;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      View::composer(['layout/app','phases/*'], AppComposer::class); // makes phases and tasks visible to the views, specially sidebar and timeline
      View::composer(['phases/planning/*'], ElicitateComposer::class);
    }
}
