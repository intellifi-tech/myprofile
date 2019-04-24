<?php

namespace App\Widgets;

use App\Support\MenuItem as MenuItem;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Lang;


class Sidebar extends AbstractWidget
{
    protected $config = [
        'i' => 1,
        'j' => 0
    ];

    public function run()
    {
        $sidebar = $this->createMenu();
        return view("admin.sidebar", [
            'config' => $this->config,
            'sidebar' => $sidebar
        ]);
    }

    private function createMenu()
    {
        return [
            0 => new MenuItem('Yönetim Anasayfa', 'fa-tachometer', action('Admin\DashboardController@index')),
            1 => new MenuItem('Kullanıcılar', 'fa-users', action('Admin\UserController@index')),
            2 => new MenuItem('Varlıklar', 'fa-list', null,null, true),
            3 => new MenuItem('Sektörler', 'fa-list', action('Admin\SectorController@index')),
            4 => new MenuItem('İller', 'fa-list', action('Admin\CityController@index')),
            5 => new MenuItem('İlçeler', 'fa-list', action('Admin\TownController@index')),
            6 => new MenuItem('Şirketler', 'fa-list', action('Admin\CompanyController@index')),
            7 => new MenuItem('Etkinlikler', 'fa-list', action('Admin\EventController@index')),
        ];
    }
}
