<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function HomePage()
    {
      return view('home');
    }

    public function WeatherPage(Request $request, $woeid)
    {
      $woeid = $request->woeid;
      return view('weatherdaily',compact('woeid'));
    }

    public function SearchResult(Request $request, $woeid)
    {
      $woeid = $request->woeid;
      return view('searchresult',compact('woeid'));
    }
}
