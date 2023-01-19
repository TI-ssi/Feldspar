<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'slug',
        'published_from',
        'published_to',
        'published'
    ];

    /**
     * Get the author of the post.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /** 
     * Filter only published posts
     */
    public function scopePublished($query)
    {
        return $query->where('published', 1)
                     ->where('published_from', '<=', date('Y-m-d h:i:s'))
                     ->where(function($query) {
                         $query->where('published_to', '>=', date('Y-m-d h:i:s'))
                               ->orWhere('published_to', null);
                     });
    }
}
