<?php
# Setting up the routes for our files
Route::set('', function() {
    index::createViews('index');
});
?>