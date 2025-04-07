<?php
namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Quote;
use App\Policies\QuotePolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    // protected $policies = [
    //     Quote::class => QuotePolicy::class,
    // ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        Gate::define('get-quotes', function ($user) {
            return $user->role === 'admin';
        });
    }
}
