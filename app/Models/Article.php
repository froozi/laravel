<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image_path',
    ];


    // Получение пользователя привязанного к статье
    public function author()
    {
        return $this->hasOne(User::class, 'id', 'author_id')->first();
    }

    // Статья имеет много комментов
    public function comments()
    {
        return $this->hasMany(Comment::class, 'article_id', 'id')->get();
    }

    public function getImageUrlAttribute()
    {
        // http://127.0.0.1:8000/ -> url
        // /storage/public/images/asd12312321.asdasdas.png

        // http://127.0.0.1:8000/storage/public/images/asd12312321.asdasdas.png
        return url(Storage::url($this->image_path));
    }

}
