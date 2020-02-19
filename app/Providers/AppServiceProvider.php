<?php

namespace App\Providers;
use Carbon\Carbon;

use App\Models\About;
use App\Models\Ad;
use App\Models\Article;
use App\Models\Poem;
use App\Models\Video;
use Illuminate\Support\ServiceProvider;

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
//        $this->app->bind('path.public',function(){return base_path('public_html'); });
        //
       // $videos = Video::where('created_at','<',Carbon::now()->toDateTime())->take(6)->get()();
        $ads = Ad::latest()->take(6)->get();
        $poems =Poem::latest()->take(6)->get();
        $articles = Article::latest()->take(6)->get();
        $videos = Video::latest()->take(6)->get();
        $setting = About::first();
        view()->share(with(['ads'=>$ads , 'poems'=>$poems,'articles'=>$articles,'videos'=>$videos,'setting'=>$setting]));
    }
}
