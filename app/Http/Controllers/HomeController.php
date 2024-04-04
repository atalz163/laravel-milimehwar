<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Articles;
use App\Models\BookClubs;
use App\Models\Carousel;
use App\Models\Item;
use App\Models\Language;
use App\Models\OurStory;
use App\Models\QuickLinks;
use App\Models\TeamMembers;
use App\Models\Video;
use App\Models\Vision;
use App\Models\WhyUs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class HomeController extends Controller
{
    public function openHomePage(Request $request)
    {
        // $languageCode = $request->language ? $request->language : 'en';
        // $language = Language::where('code', $languageCode)->first();
        // $language = $language ? $language->id : null;

        // Retrieve all items
        //  $item = Item::all();

        // $locale = app()->getLocale();

        // $language = Language::where('code', $locale)->first();
        // $language = $language ? $language->id : null;

        $currentLocale = App::getLocale();
        $language = Language::where('code', $currentLocale)->first();


        if ($language) {
            $announcements = Announcement::where('language_id', $language->id)
                ->where('active', true)
                ->orderBy('created_at', 'desc')
                ->take(3)
                ->get();
        } else {

            $announcements = null;
        }



        if ($language) {
            $articles = Articles::where('language_id', $language->id)
                ->where('active', true)
                ->orderBy('created_at', 'desc')
                ->take(3)
                ->get();
        } else {

            $articles = null;
        }

        if ($language) {
            $teamMembers = TeamMembers::where('language_id', $language->id)
                ->where('active', true)
                ->orderBy('created_at', 'desc')
                ->take(4)
                ->get();
        } else {

            $teamMembers = null;
        }

        $videos = Video::orderBy('created_at', 'desc')->take(3)->get();

        if ($language) {
            $bookclubs = BookClubs::where('language_id', $language->id)
                ->where('active', true)
                ->orderBy('created_at', 'desc')
                ->take(3)
                ->get();
        } else {

            $bookclubs = null;
        }

        if ($language) {
            $whyUs = WhyUs::where('language_id', $language->id)
                ->orderBy('created_at', 'desc')
                ->take(1)
                ->get();
        } else {

            $whyUs = null;
        }

        if ($language) {
            $ourStory = OurStory::where('language_id', $language->id)
                ->orderBy('created_at', 'desc')
                ->take(1)
                ->get();
        } else {

            $ourStory = null;
        }

        if ($language) {
            $vision = Vision::where('language_id', $language->id)
                ->orderBy('created_at', 'desc')
                ->take(1)
                ->get();
        } else {

            $vision = null;
        }

        if ($language) {
            $quickLinks = QuickLinks::where('language_id', $language->id)
                ->orderBy('created_at', 'desc')
                ->take(8)
                ->get();
        } else {

            $quickLinks = null;
        }




        // $languages = Language::all();
        // if (!$item) {
        //     abort(404);
        // }



        return view('home', compact([
            'announcements', 'articles',
            'teamMembers', 'videos', 'bookclubs', 'whyUs',
            'ourStory', 'vision', 'quickLinks'
        ]));
    }



    public function show(Announcement $announcement)
    {

        return view('announcement.view', compact('announcement'));
    }

    public function showArticle(Articles $article)
    {

        return view('articles.view', compact('article'));
    }



    public function annoucementsAll(Request $request)
    {
        // $languageCode = $request->language ? $request->language : 'en';
        // $language = Language::where('code', $languageCode)->first();
        // $language = $language ? $language->id : null;
        $currentLocale = App::getLocale();
        $language = Language::where('code', $currentLocale)->first();

        if ($language) {
            $showAll = Announcement::where('language_id', $language->id)
                ->where('active', true)
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {

            $showAll = null;
        }

        return view('announcement.index', compact('showAll'));
    }

    public function allArticles(Request $request)
    {
        $currentLocale = App::getLocale();
        $language = Language::where('code', $currentLocale)->first();


        if ($language) {
            $showAll = Articles::where('language_id', $language->id)
                ->where('active', true)
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {

            $showAll = null;
        }

        return view('articles.index', compact('showAll'));
    }
}
