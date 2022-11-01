<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function customers(): BelongsToMany
    {
        return $this->belongsToMany(Customer::class)
            ->withTimestamps();
    }
}
