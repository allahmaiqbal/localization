<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function switchLanguage($locale)
    {
        session(['APP_LOCALE' => $locale]);
        return redirect()->back();
    }
}
