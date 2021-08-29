<?php
    Route::set('index.php', function() {
        Home::CreateView('home');
    });

    Route::set('about', function() {
        About::CreateView('about');
    });