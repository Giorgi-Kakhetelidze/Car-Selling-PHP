<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarImage extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = ['image_path', 'position'];

    /**
     * Define a relationship to the Car model.
     */
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}