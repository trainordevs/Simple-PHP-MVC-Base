<?php
    class Controller extends Database {
        // Called when we create our routes. This displays the corresponding view.
        public static function CreateView($view) {
            require_once './views/' . $view . '.php';
        }
    }