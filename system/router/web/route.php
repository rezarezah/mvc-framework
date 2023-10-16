<?php

namespace system\router\web;

class Route
{
    public static function get($url, $execureMethod, $name = null)
    {
        $execureMethod = explode('@', $execureMethod);
        $class = $execureMethod[0];
        $method = $execureMethod[1];
        global $routes;
        array_push($routes['get'], array('url' => trim($url, '/ '), 'class' => $class, 'method' => $method, 'name' => $name));
    }
    public static function post($url, $execureMethod, $name = null)
    {
        $execureMethod = explode('@', $execureMethod);
        $class = $execureMethod[0];
        $method = $execureMethod[1];
        global $routes;
        array_push($routes['post'], array('url' => trim($url, '/ '), 'class' => $class, 'method' => $method, 'name' => $name));
    }
    public static function put($url, $execureMethod, $name = null)
    {
        $execureMethod = explode('@', $execureMethod);
        $class = $execureMethod[0];
        $method = $execureMethod[1];
        global $routes;
        array_push($routes['put'], array('url' => trim($url, '/ '), 'class' => $class, 'method' => $method, 'name' => $name));
    }
    public static function delete($url, $execureMethod, $name = null)
    {
        $execureMethod = explode('@', $execureMethod);
        $class = $execureMethod[0];
        $method = $execureMethod[1];
        global $routes;
        array_push($routes['delete'], array('url' => trim($url, '/ '), 'class' => $class, 'method' => $method, 'name' => $name));
    }
}
