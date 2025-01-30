<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PageView extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'user_agent',
        'ip_address',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
