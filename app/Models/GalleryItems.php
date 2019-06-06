<?php

namespace App\Models;

use Crudch\Database\Model;
use Crudch\Database\ActiveRecord;

/**
 * Class Article
 *
 * @property int $gallery_id
 * @property string $image
 *
 * @package App\Models
 */
class GalleryItems extends Model
{
    use ActiveRecord;

    protected $fillable = [
        'gallery_id',
        'image',
    ];

    protected static $table = 'gallery_items';

    public static function findAllById(int $id)
    {
        $sql = "select * from gallery_items where gallery_id = {$id} order by id";

        return db()->query($sql)
            ->fetchAll(\PDO::FETCH_CLASS, static::class);
    }
}
