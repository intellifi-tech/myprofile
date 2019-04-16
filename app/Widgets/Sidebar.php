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
        return view("widgets.sidebar", [
            'config' => $this->config,
            'sidebar' => $sidebar
        ]);
    }

    private function createMenu()
    {
        return [
            1 => new MenuItem('Siteyi Gör', 'fa-globe', action('Front\HomeController@index')),
            2 => new MenuItem('Yönetim Ana Sayfa', 'fa-home', action('Admin\HomeController@index')),
            4 => new MenuItem('Hekim Yönetimi', 'fa-user-md', action('Admin\DoctorController@index')),
            5 => new MenuItem('Tıbbi Birim Yönetimi', 'fa-cubes', action('Admin\MedicalUnitsController@index')),
            6 => new MenuItem('Blog Yönetimi', 'fa-align-left', action('Admin\BlogController@index')),
            7 => new MenuItem('Randevu Yönetimi', 'fa-bell-o', action('Admin\AppointmentController@index')),
            8 => new MenuItem('Soru Yönetimi', 'fa-question-circle', action('Admin\ExpertQuestionsController@index')),
            9 => new MenuItem('Slider Yönetimi', 'fa-question-circle', action('Admin\SliderController@index')),
            10 => new MenuItem('Sabit Sayfa Yönetimi', 'fa-files-o', action('Admin\StaticPageController@index')),
            11 => new MenuItem('Basında Biz Yönetimi', 'fa-paper-plane-o', action('Admin\PressController@index')),
            12 => new MenuItem('Videolar Yönetimi', 'fa-paper-plane-o', action('Admin\VideoController@index')),
            13 => new MenuItem('Fotoğraflar Yönetimi', 'fa-picture-o', action('Admin\GalleryController@index')),
            14 => new MenuItem('Anlaşmalı Kurum Yönetimi', 'fa-briefcase', action('Admin\ContractedInstitutionController@index')),
            20 => new MenuItem('Ayarlar', 'fa-cogs', action('Admin\SettingController@edit')),
        ];
    }
}
