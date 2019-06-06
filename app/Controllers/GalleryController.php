<?php

namespace App\Controllers;

use App\Models\Gallery;
use Crudch\Foundation\Controller;
use Crudch\Http\Exceptions\NotFoundException;

/**
 * Class HomeController
 *
 * @package App\Controllers
 */
class GalleryController extends Controller
{
    public function index()
    {
        $gallery = remember('last_gallery', function () {
            return Gallery::active();
        });

        return view('/gallery/index', compact('gallery'));
    }

    /**
     * @param $slug
     *
     * @return \Crudch\Http\Response
     * @throws NotFoundException
     */
    public function show($slug)
    {
        if (!$gallery = Gallery::findByField(['slug' => $slug, 'activity' => 1])) {
            throw new NotFoundException('Такой галереи не найдено');
        }

        return view('/gallery/show', compact('gallery'));
    }
}
