<?php

declare(strict_types=1);

if (!function_exists('view_php')) {
    function view_php(): \Leaf\ViewPhp
    {
        if (!(\Leaf\Config::get('view_php.instance'))) {
            \Leaf\Config::set('view_php.instance', new Leaf\ViewPhp());
        }

        return \Leaf\Config::get('view_php.instance');
    }
}
