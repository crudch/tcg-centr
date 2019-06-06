<?php

namespace App\Models;

use Crudch\Database\Model;
use Crudch\Database\ActiveRecord;

/**
 * Class Article
 *
 * @property string         $slug
 * @property string         $title
 * @property string         $preview
 * @property int            $activity
 * @property GalleryItems[] $items
 *
 * @package App\Models
 */
class Gallery extends Model
{
    use ActiveRecord;

    protected $fillable = [
        'slug',
        'title',
        'preview',
        'activity',
    ];

    protected static $table = 'gallery';

    public static function active()
    {
        $sql = 'select * from gallery where activity = 1 order by id';

        return db()->query($sql)
            ->fetchAll(\PDO::FETCH_CLASS, static::class);
    }

    public function getItems()
    {
        if (!isset($this->items)) {
            $this->items = GalleryItems::findAllById($this->id);
        }

        return $this->items;
    }
}
