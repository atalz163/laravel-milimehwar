<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Language;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locale = app()->getLocale();

        $language = Language::where('code', $locale)->first();
        $languageId = $language ? $language->id : null;


        if ($languageId) {
            $articles = Articles::where('language_id', $languageId)
                ->where('active', true)
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {

            $articles = null;
        }

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Articles $article)
    {
        return view('articles.view', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
