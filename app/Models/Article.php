<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'title',
        'description',
        'content',
    ];

    /**
     * @var mixed
     */
    protected $id;

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        Article::factory()
            ->times(10)
            ->create();
    }
}
