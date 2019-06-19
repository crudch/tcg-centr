<?php

namespace App\Controllers;

use App\Models\Article;
use Crudch\Foundation\Controller;

class MainController extends Controller
{
    /**
     * Главная страница
     */
    public function index()
    {
        $article = remember('last_news', function () {
            return Article::lastActive();
        });

        return view('index', compact('article'));
    }

    /**
     * Наше ТСЖ
     */
    public function homeowners()
    {
        return view('homeowners');
    }

    /**
     * Услуги
     */
    public function services()
    {
        return view('services');
    }

    /**
     * Отчетность
     */
    public function report()
    {
        return view('report');
    }

    /**
     * Справочник
     */
    public function manual()
    {
        return view('manual');
    }

    /**
     * Полезное
     */
    public function helpful()
    {
        return view('helpful');
    }
}
