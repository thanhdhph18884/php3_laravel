<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'images',
    ];
    protected $table = 'banners';
    public $timestamps = false;
}
