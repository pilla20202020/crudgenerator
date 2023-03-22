<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Permission;
use Illuminate\Support\Facades\Blade;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        try {
            // Permission::get()->map(function ($permission) {
            //     Log::info('permission',[$permission->slug]);
            // });
            Permission::get()->map(function ($permission) {
                Gate::define($permission->slug, function (User $user) use ($permission) {
                    // Log::info('permission '."$permission->slug",[$user->hasPermissionTo($permission)]);
                    return $user->hasPermissionTo($permission);
                });
            });
        } catch (\Exception $e) {
            report($e);
            Log::info('Errors in defining permisions');
            return false;
        }

        //Blade directives
        // Blade::directive('role', function ($role) {
        //     return "@if(auth()->check() && auth()->user()->hasRole({$role}))"; //return this if statement inside php tag
        // });

        // Blade::directive('endrole', function ($role) {
        //     return "@endif"; //return this endif statement inside php tag
        // });

        Blade::if('role', function ($role) {
            return auth()->check() && auth()->user()->hasRole($role);
        });

        Blade::if('permission', function ($permission) {
            return auth()->user()->can($permission);
        });
    }
}
