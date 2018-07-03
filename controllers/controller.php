<?php
class controller {
    public static function createViews($viewName) {
        require_once('./views/'.$viewName.'.php');
    }
}
?>