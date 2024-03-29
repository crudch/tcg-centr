<?php

namespace App\Controllers;

use App\Models\Article;
use Crudch\Foundation\Controller;
use Crudch\Http\Exceptions\NotFoundException;

/**
 * Class HomeController
 *
 * @package App\Controllers
 */
class NewsController extends Controller
{
    public function index()
    {
        [$news, $paginate] = Article::paginate(3);

        return view('/news/index', compact('news', 'paginate'));
    }

    /**
     * @param $id
     *
     * @return \Crudch\Http\Response
     * @throws NotFoundException
     */
    public function show($id)
    {
        if (!$article = Article::findByField(['id' => $id, 'activity' => 1])) {
            throw new NotFoundException('Такой новости не найдено');
        }

        return view('/news/show', compact('article'));
    }
}
