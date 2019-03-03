<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to the site';
        return view('pages.index', compact('title'));
    }


    public function about() {
        $title = 'About Our App';
        return view('pages.about')->with('title', $title);
    }


    public function services() {
        $data = array(
            'title' => 'Our Excelent Services',
            'services' => ['Web Design', 'Web Developement', 'Mobile Developement', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
