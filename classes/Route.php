<?php
    class Route {
        // Keep track of the routes we have added.
        public static $validRoutes = array();

        // Add a route to the available list.
        public static function set($route, $function) {
            self::$validRoutes[] = $route;
            
            if ($_GET['url'] == $route) {
                $function->__invoke();
            }
        }
    }