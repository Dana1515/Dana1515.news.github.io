<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\View\View;
class MainController extends Controller
{
    public function main(): View{
        $news = News::orderBy('date', 'desc')->take(3)->get();
        return view('main', ['news' => $news]);
    }

}
