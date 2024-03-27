<?php

namespace App\Http\Middleware;

use App\Enums\RoleName;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Navigation\Navigation;
use Spatie\Navigation\Section;
use Symfony\Component\HttpFoundation\Response;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();
        $role = $user?->getRoleNames()->first();

        Navigation::make()
            ->add('Employers', route('employers.list'))
            ->addIf($role === 'customer',
                'About',
                route('cv.de'),
                fn (Section $section) => $section
                    ->add('About DE', route('cv.de'))
                    ->add('About EN', route('cv.en'))
                    ->add('About RU', route('cv.ru'))
            )
            ->addIf($role === 'admin',
                'Admin',
                    route('cv.ru'),
                    fn (Section $section) => $section
                        ->add('Create employed', route('employers.create'))
            );

        return $next($request);
    }
}
