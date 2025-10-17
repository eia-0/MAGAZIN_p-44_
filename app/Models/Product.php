<?php

namespace App\Models;

use Database\Seeders\CategorySeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes, HasFactory;
    protected $guarded=[];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function features():BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'feature_products')->withPivot('value');
    }
}
