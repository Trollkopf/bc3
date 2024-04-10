<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModernKitchen extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'collection',
        'serie',
        'description',
        'finishes'
    ];
}
