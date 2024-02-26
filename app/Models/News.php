<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory, UUID;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'thumbnail',
    ];

    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail ? asset('storage/' . $this->thumbnail) : asset('img/placeholder.png');
    }

    public function getShortContentAttribute()
    {
        return \Illuminate\Support\Str::limit($this->content, 100);
    }

    public function getShortTitleAttribute()
    {
        return \Illuminate\Support\Str::limit($this->title, 50);
    }

    public function setThumbnailAttribute($value)
    {
        $this->attributes['thumbnail'] = $value->store('assets/news', 'public');
    }
}
