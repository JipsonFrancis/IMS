<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class warehouse extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'location'];


    public function commodities() : HasMany
    {
        return $this->hasMany(Commodity::class);
    }
}
