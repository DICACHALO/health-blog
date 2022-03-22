<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 *
 * @property $post_id
 * @property $title
 * @property $description
 * @property $created_at
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Post extends Model
{
    use HasFactory;

    static $rules = [
		'title' => 'required',
		'description' => 'required',
		'created_at' => 'required',
		'user_id' => 'required'
    ];

    protected $perPage = 30;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','description','created_at', 'user_id'];
}
