<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'status',
        'value_status',
        'section_id',
				'countCus',
        'description',
        'product_new_price',
        'country_currency',
        'product_old_price',
        'img_path',
        'img_alt_text',
    ];
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
