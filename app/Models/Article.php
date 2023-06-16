<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static get()
 * @method static where(string $string, $id)
 */
class Article extends Model
{
    protected $fillable = [
        'name',
        'text',
        'user_id'
    ];

    public $timestamps = false;
}