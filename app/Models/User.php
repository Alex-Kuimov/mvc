<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static get()
 * @method static where(string $string, mixed $email)
 */
class User extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    public $timestamps = false;
}