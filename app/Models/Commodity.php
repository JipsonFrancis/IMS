<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Commodity extends Model
{
    use HasFactory;
    protected $fillable = ['name','category_id','warehouse_id', 'price', 'quantity'];

    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(warehouse::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
