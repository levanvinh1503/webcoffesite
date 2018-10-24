<?php

namespace App\Providers;

use App\Post;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Category;
use App\Collection;
use App\Contact;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('layout.header', function($view) {
            $categoryHeader = Category::all();
            $collectionHeader = Collection::all();
            $view->with(['categoryHeader' => $categoryHeader, 'collectionHeader' => $collectionHeader]);
        });

        view()->composer('layout.footer', function($view) {
            $post = Post::orderBy('created_at','des')
                ->paginate(3);
            $view->with(['postFooter' => $post]);
        });

        view()->composer('admin.layout.layout', function($view) {
            $mailInbox = Contact::where('status', 0)->orderBy('created_at','des')->get();
            $countNotificatioin = Contact::where('status', 0)->count();
            $view->with(['mailInbox' => $mailInbox, 'countNotificatioin' => $countNotificatioin]);
        });
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
