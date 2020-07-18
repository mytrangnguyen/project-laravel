<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use Illuminate\Support\Facades\Session;
use App\Cart;

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
        view()->composer('header',function($view){
            $loai_sp = Category::all();
            $view->with('loai_sp',$loai_sp);
        });

        view()->composer(['header','page.checkout','page.cart'],function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQuantity'=>$cart->totalQuantity]);
                // dd($cart);
            }
        });
    }
}
