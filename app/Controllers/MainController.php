<?php

namespace App\Controllers;

use App\Models\Article;
use Crudch\Foundation\Controller;

class MainController extends Controller
{
    public function index()
    {
        $article = remember('last_news', function () {
            return Article::lastActive();
        });

        return view('index', compact('article'));
    }

    public function home()
    {
        return view('home');
    }

    public function manual()
    {
        return view('manual');
    }

    public function counters()
    {
        return view('counters');
    }

    public function payment()
    {
        return view('payment');
    }

    public function rate()
    {
        return view('rate');
    }

    public function report()
    {
        return view('report');
    }
}
