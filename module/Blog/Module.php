<?php
/**
 * Created by PhpStorm.
 * User: Horvat
 * Date: 7/3/2017
 * Time: 11:29
 */

namespace Blog;


class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}