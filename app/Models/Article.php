<?php

namespace App\Models;

use Crudch\Database\Model;
use Crudch\Date\CrutchDate;
use Crudch\Database\ActiveRecord;
use Kilte\Pagination\Pagination;

/**
 * Class Article
 *
 * @property string     $title
 * @property string     $subtitle
 * @property string     $body
 * @property int        $activity
 * @property CrutchDate $created_at
 * @property CrutchDate $updated_at
 *
 * @package App\Models
 */
class Article extends Model
{
    use ActiveRecord;

    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'activity',
    ];

    protected static $table = 'articles';

    public static function active()
    {
        $sql = 'select * from articles where activity = 1 order by id desc';

        return db()->query($sql)
            ->fetchAll(\PDO::FETCH_CLASS, static::class);
    }

    public static function paginate($num)
    {
        $sql = 'select count(*) from articles where activity = 1';
        if (!$count = db()->query($sql)->fetchColumn()) {
            return [[], []];
        }

        $p = new Pagination($count, request()->get('page'), $num, 1);
        $sql = 'select * from articles 
            where activity = 1 
        order by id desc limit '. $p->offset() . ', ' . (int)$num;

        return [
            db()->query($sql)->fetchAll(\PDO::FETCH_CLASS, static::class),
            $p->build()
        ];
    }

    public static function lastActive()
    {
        $sql = 'select * from articles where activity = 1 order by id desc limit 1';

        return db()->query($sql)
            ->fetchObject(static::class);
    }

    public function datePublish()
    {
        return $this->created_at->format(
            'd \\' . CrutchDate::$monthP[$this->created_at->format('n')] . ' Y'
        );
    }
}
