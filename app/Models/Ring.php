<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ring extends Model
{
    use HasFactory;
    protected $fillable = [
        'ring_description',
        'ring_reference',
        'ring_material',
        'ring_preview',
        
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
