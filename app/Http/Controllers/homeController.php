<?php

namespace App\Http\Controllers;
use App\Category;

use App\Movie;
use App\Screen;
use Carbon\Carbon;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home()
    {
        //phim sapchieu
        $movie_upcoming = Movie::all()->where('release_date', '>' , Carbon::today()->addMonth());
        //phim dang chieu
        $movie_release = Movie::all()->where('release_date', '<' , Carbon::today()->addMonth());
        //phim noi bat
        $movie_special =  Movie::all()->where('rating', '>', 3);
        return view('client/home',  ['movie_upcoming' => $movie_upcoming, 'movie_release' => $movie_release, 'movie_special' => $movie_special] );
    }
    public function about()
    {
        return view('client/about');
    }
    public function contact()
    {
        return view('client/contact');
    }
    public function blog()
    {
        return view('client/blog_category');
    }
    public function blog_single()
    {
        return view('client/blog_single');
    }
    public function movie_booking()
    {
//        $room = Room::all();
        $category = Category::all();
        return view('client/movie_booking', ['category'=>$category]);
    }
    public function movie()
    {
        $category = Category::all();
        $movie = Movie::all();
        return view('client/movie_category', ['category'=>$category, 'movie'=>$movie]);
    }
    public function movie_single($id)
    {
        $movie = Movie::find($id);
        $movie_relative = Movie::all()->where('id_category',$movie['id_category']);
        return view('client/movie_single_second', ['movie' => $movie, 'movie_relative' => $movie_relative]);
    }
    public function seat_booking()
    {
        return view('client/seat_booking');
    }
    public function searchMovie( Request $request)
    {
        $keywords = $request->keywords_submit;
        $search_pro= Movie::where('name','LIKE','%'.$keywords.'%')->get();
        return view('client/search',['search_pro'=> $search_pro]);
    }
}
