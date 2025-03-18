<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Item;
use App\Models\Video;
use App\Models\WhyUs;
use App\Models\Photos;
use App\Models\Vision;
use App\Models\Articles;
use App\Models\Carousel;
use App\Models\Language;
use App\Models\OurStory;
use App\Models\BookClubs;
use App\Models\QuickLinks;
use App\Models\TeamMembers;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use Illuminate\Pagination\LengthAwarePaginator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class HomeController extends Controller
{
    public function openHomePage(Request $request)
    {

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

        

        $perPage = 3; // Number of items per page
        $page = request()->get('page', 1); // Get the current page from the request query parameter or default to 1
    
        $photos = Photos::orderBy('created_at', 'desc')->get(); // Retrieve all photos
        $total = $photos->count(); // Total number of photos
    
        // Paginate the photos
        $paginatedPhotos = new LengthAwarePaginator(
            $photos->forPage($page, $perPage),
            $total,
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );



        //dd($videos);
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


        return view('home', compact([
            'announcements', 'articles',
            'teamMembers', 'videos', 'bookclubs', 'whyUs',
            'ourStory', 'vision', 'quickLinks','paginatedPhotos'
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


    public function allTeamMembers(Request $request)
    {
        $currentLocale = App::getLocale();
        $language = Language::where('code', $currentLocale)->first();


        if ($language) {
            $showAll = TeamMembers::where('language_id', $language->id)
                ->where('active', true)
                ->orderBy('created_at', 'desc')
                ->paginate(9);

        } else {

            $showAll = null;
        }

        return view('teammembers.index', compact('showAll'));
    }

    public function showTeamMember($id){

        $teamMember = TeamMembers::findOrFail($id);
        return view('teammembers.view',compact('teamMember'));

    }


    public function allbookclubs(Request $request)

    {
        $currentLocale = App::getLocale();
        $language = Language::where('code', $currentLocale)->first();


        if ($language) {
            $showAll = BookClubs::where('language_id', $language->id)
                ->where('active', true)
                ->orderBy('created_at', 'desc')
                ->paginate(9);
        } else {

            $showAll = null;
        }

        return view('bookclubs.index', compact('showAll'));
    }

    public function showBookclub($id){
       $bookclub = BookClubs::findOrFail($id);
        return view('bookclubs.view',compact('bookclub'));
    }

    public function whyus(Request $request){
       
        $currentLocale = App::getLocale();
        $language = Language::where('code', $currentLocale)->first();


        if ($language) {
            $showAll = WhyUs::where('language_id', $language->id)
                
                ->orderBy('created_at', 'desc')
                ->paginate(9);
        } else {

            $showAll = null;
        }
        return view('whyus.index', compact('showAll'));
    }

    public function whyusdetails(WhyUs $whyus){

        return view('whyus.view',compact('whyus'));
    }


    public function ourstory(Request $request){
       
        $currentLocale = App::getLocale();
        $language = Language::where('code', $currentLocale)->first();


        if ($language) {
            $showAll = OurStory::where('language_id', $language->id)
                
                ->orderBy('created_at', 'desc')
                ->paginate(9);
        } else {

            $showAll = null;
        }
        return view('ourstory.index', compact('showAll'));
    }

    public function ourstorydetails(OurStory $ourstory){

        return view('ourstory.view',compact('ourstory'));
    }

    public function ourvision(Request $request){
       
        $currentLocale = App::getLocale();
        $language = Language::where('code', $currentLocale)->first();


        if ($language) {
            $showAll = Vision::where('language_id', $language->id)
                ->orderBy('created_at', 'desc')
                ->paginate(9);
        } else {

            $showAll = null;
        }
        return view('ourvision.index', compact('showAll'));
    }

    public function ourvisiondetails(Vision $ourvision){
        
        return view('ourvision.view',compact('ourvision'));
    }

    public function allvideos(Video $videos){
        $videos = Video::orderBy('created_at','desc')
        ->paginate(3);
      //  dd($video);
        return view('videos.index',compact('videos'));
    }


    public function allphotos()
    {
        // $photos = Photos::orderBy('created_at', 'desc')->paginate(3);
        $perPage = 3; // Number of items per page
        $page = request()->get('page', 1); // Get the current page from the request query parameter or default to 1
    
        $photos = Photos::orderBy('created_at', 'desc')->get(); // Retrieve all photos
        $total = $photos->count(); // Total number of photos
    
        // Paginate the photos
        $paginatedPhotos = new LengthAwarePaginator(
            $photos->forPage($page, $perPage),
            $total,
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );
    

        return view('photos.index', compact('paginatedPhotos'));
    }

}
