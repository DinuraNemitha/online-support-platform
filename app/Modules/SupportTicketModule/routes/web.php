<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'ticket','module' => 'SupportTicketModule'], function() {

    Route::get('/list', 'SupportTicketController@index')->name('ticket.all');
    Route::get('/create', 'SupportTicketController@create')->name('ticket.create');

    Route::post('/store', 'SupportTicketController@store')->name('ticket.store');
    Route::post('/reply', 'SupportTicketController@replyToTicket')->name('ticket.reply');
    Route::post('/open', 'SupportTicketController@openTicket')->name('ticket.open');
});
