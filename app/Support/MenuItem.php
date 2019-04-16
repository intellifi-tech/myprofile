<?php

namespace App\Support;

class MenuItem
{
    public $name;
    public $icon;
    public $link;
    public $items;
    public $head;
    public $badge;

    public function __construct($name, $icon, $link, $items = [], $head = false, $badge = null)
    {
        $this->name = $name;
        $this->icon = $icon;
        $this->link = $link;
        $this->items = $items;
        $this->head = $head;
        $this->badge = $badge;
    }
}