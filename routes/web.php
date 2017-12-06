<?php

Route::get('/', 'TodosController@index');

Route::resource('todo', 'TodosController');
