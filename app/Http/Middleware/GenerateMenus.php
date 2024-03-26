<?php

namespace App\Http\Middleware;

use App\Enums\RoleName;
use Closure;
use Illuminate\Http\Request;
use Spatie\Menu\Laravel\Menu;
use Spatie\Menu\Link;
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
        // $user = auth()->user();
        // $role = $user->getRoleNames()->first();

        Menu::macro('main', function () {
            $rolemenus = [
                'customer' => [
                    'allowed' => (auth()?->user()?->getRoleNames()->first() === RoleName::CUSTOMER->value),
                    'items' => [
                        [
                            'icon' => '<i class="far fa-fw fa-chart-bar"></i>',
                            'caption' => 'First Modul',
                            'items' => [
                                'employers.list' => __('Employers'),
                                'cv.de' => __('About DE'),
                            ],
                        ],
                    ],
                ],
                'admin' => [
                    'allowed' => (auth()?->user()?->getRoleNames()->first() === 'admin'),
                    'items' => [
                        [
                            'icon' => '<i class="far fa-fw fa-chart-bar"></i>',
                            'caption' => 'First Modul  для админа',
                            'items' => [
                                'employers.list' => __('Employers для админа'),
                                'cv.de' => __('About DE для админа'),
                            ],
                        ],
                    ],
                ],
            ];

            $menu = Menu::new()
                ->addClass('list-unstyled mb-0 accordion-container')
                ->setActiveFromRequest();

            foreach ($rolemenus as $rolemenu) {
                if (!$rolemenu['allowed']) {
                    continue;
                }

                foreach ($rolemenu['items'] as $key => $rm) {

                    $caption = '<span class="nav-caption ac-trigger">' . implode(' ', [($rm['icon'] ?? ''), $rm['caption']]) . '<i class="fa fa-angle-down menu-arrow"></i>' . '</span>';
                    if (isset($rm['route'])) {
                        $caption = '<a href="' . route($rm['route']) . '" class="nav-caption ac-trigger">' . implode(' ', [($rm['icon'] ?? ''), $rm['caption']]) . '</a>';
                    }
                    $menu->submenu($caption, function (Menu $menu) use ($rm) {
                        /*     if ($key === 0 && auth()->user()->role == 'analyst_mil') {
                            $menu->addClass('list-unstyled mb-0 ac-panel')->addParentClass('nav-item-root ac gg active');
                        } else { */
                        $menu->addClass('list-unstyled mb-0 ac-panel')->addParentClass('nav-item-root ac');
                        /*   } */

                        if (isset($rm['items'])) {
                            $menu->fill($rm['items'], function (Menu $menu, $caption, $route) {
                                // ! костыль, карсим ссылки роуты офферов для почты в красный
                                $classRedForPochtaBank = $route === 'advertiser.offers.index' || $route === 'partner.offers.index' ? 'color-red' : '';
                                $link = Link::to(route($route), $caption)->addClass('nav-link ac-text ' . $classRedForPochtaBank);
                                $menu->add($link);
                            });
                        } else {
                        }
                    });
                }
            }
            dd($menu);
            return $menu;
        }

        );


        return $next($request);
    }
}
