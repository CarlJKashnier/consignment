<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  ...$permissions
     * @return mixed
     */

    //Not fully implemented. Still need to add the permissions to the user migration.
    //Also need to register the middleware
    //Also need to add permissions to routes.
    //Define permission groups - that part is always the challange.
    public function handle(Request $request, Closure $next, ...$permissions) : \Illuminate\Http\Response
    {
        $userPermissions = $request->user()->permissions; // Get user's permissions

        if ($this->hasAccess($permissions, $userPermissions)) {
            return $next($request);
        }

        // If no access, return a 403 response
        return response()->json(['error' => 'Unauthorized'], 403);
    }

    /**
     *
     * @param array $permissions
     * @param array $userPermissions
     * @return bool
     */
    private function hasAccess(array $permissions, array $userPermissions)
    {
        foreach ($permissions as $permission) {
            if (in_array($permission, $userPermissions)) {
                return true;
            }

            // If the permission is an array, call this function recursively
            if (is_array($permission) && $this->hasAccess($permission, $userPermissions)) {
                return true;
            }
        }

        return false;
    }
}
