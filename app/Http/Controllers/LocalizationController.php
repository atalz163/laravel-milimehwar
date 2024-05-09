<?php

namespace App\Http\Controllers;


class LocalizationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($locale)
    {
        // dd($locale);
        if (!in_array($locale, config('localization.locales'))) {
            abort(400);
        }

        session(['localization' => $locale]);
        return redirect()->route('site.home');
    }
}
