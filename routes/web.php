<?php

use App\Http\Controllers\ComicController;

Route::resource('comics', ComicController::class);
// Soluzione suggerita da Gianluca: con una sola riga di codice, prendo tutte le route.