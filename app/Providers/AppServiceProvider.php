<?php

namespace App\Providers;

use App\Article;
use App\Comment;
use App\Fav;
use App\Library\CommonClass;
use App\Observers\ArticleObserver;
use App\Observers\CommentObserver;
use App\Observers\FavObserver;
use App\Observers\PostObserver;
use App\Observers\UserObserver;
use App\User;
use App\Post;
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
        User::observe(UserObserver::class);
        Article::observe(ArticleObserver::class);
        Comment::observe(CommentObserver::class);
        Fav::observe(FavObserver::class);
        Post::observe(PostObserver::class);
    }
}
