<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Review;
use App\Models\Size;
use App\Models\Slider;
use App\Models\Website;
use Illuminate\Support\Facades\View;
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
        $content = Website::find('1');
        View::share('content', $content);
        $categories = Category::all();
        View::share('categories', $categories);
        $products = Product::all();
        View::share('products', $products);
        $reviews = Review::all();
        View::share('reviews', $reviews);

        $colors = Color::all();
        View::share('colors', $colors);

        $sizes = Size::all();
        View::share('sizes', $sizes);

        $sliders = Slider::all();
        View::share('sliders', $sliders);

    }
}
