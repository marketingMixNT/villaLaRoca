<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Room extends Model
{
    use HasTranslations;

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'meta_title',
        'meta_desc',
        'title',
        'slug',
        'short_desc',
        'desc',
        'equipment',
        'thumbnail',
        'gallery',
        'beds',
        'bathrooms',
        'sort',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'meta_title' => 'array',
        'meta_desc' => 'array',
        'title' => 'array',
        'slug' => 'array',
        'short_desc' => 'array',
        'desc' => 'array',
        'equipment' => 'array',
        'gallery' => 'array',
    ];

    public $translatable = [
        'meta_title',
        'meta_desc',
        'title',
        'slug',
        'beds',
        'bathrooms',
        'short_desc',
        'desc',
        'equipment',
    ];

    public function getMetaTitle(): string
    {
        if ($this->meta_title) {
            return $this->meta_title ;
        } else {
            return str_replace(['"', "'"], '', $this->title) . " | Villa la Roca";
        }
    }
    
    public function getMetaDesc(): string
    {
        if ($this->meta_desc) {
            return $this->meta_desc;
        } else {
            return substr(strip_tags($this->desc), 0, 150);
    
        }
    }
}
