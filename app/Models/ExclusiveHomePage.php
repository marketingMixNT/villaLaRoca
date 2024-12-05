<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExclusiveHomePage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'meta_title',
        'meta_description',
        'header_heading',
        'banner',
        'heading',
        'text',
        'content',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'meta_title' => 'array',
        'meta_description' => 'array',
        'header_heading' => 'array',
        'heading' => 'array',
        'text' => 'array',
        'content' => 'array',
    ];

    public function exclusiveHomeBlocks(): HasMany
    {
        return $this->hasMany(ExclusiveHomeBlock::class);
    }
}
