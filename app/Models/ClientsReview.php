<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientsReview extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'review',
        'dateR',
    ];
}
