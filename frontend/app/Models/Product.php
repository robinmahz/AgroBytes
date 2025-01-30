<?php

namespace App\Models;

use App\Traits\GenerateSlug;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'slug',
        'summary',
        'origin',
        'brand',
        'user_id',
        'category_id'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->slug = Str::slug($model->name);
            $i = 1;
            while (static::where('slug', $model->slug)->exists()) {
                $model->slug = Str::slug($model->name) . '-' . $i;
                $i++;
            }
            $model->user_id = auth()->id();
        });
    }
}
