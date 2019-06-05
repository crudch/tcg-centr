<?php

namespace App\Models;

use Crudch\Database\Model;

/**
 * Class Menu
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $class
 * @property int $sort
 *
 * @package App\Models
 */
class Menu extends Model
{
    public static function items()
    {
        $sql = 'select * from menu order by sort';

        return db()
            ->query($sql)
            ->fetchAll(\PDO::FETCH_CLASS, static::class);
    }
}
