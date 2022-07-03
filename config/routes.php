<?php
$routes->set404Override('App\Errors::show404');
$routes->set404Override(static function () {
    echo view('404.json');
});
?>