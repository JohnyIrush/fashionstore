<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);

        //-- Tax Configuration
        # Cashier::calculateTaxes();

        //-- Using Custom Models

        /*
          Cashier::useSubscriptionModel(Subscription::class);
          Cashier::useSubscriptionItemModel(SubscriptionItem::class);
        */
    }
}
