<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'article_id',
        'path',
        'caption',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
