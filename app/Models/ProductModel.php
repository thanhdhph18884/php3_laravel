<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'rooms';
    protected $primaryKey = 'room_id';
    public $timestamps = false;
    public $fillable = [
        'images',
        'description',
        'mota',
        'price',
        'cate_id',
        'status',
    ];
    public function categories()
    {
        return $this->belongsTo(Categories::class, 'cate_id');
    }
    public function hoadon()
    {
        return $this->belongsTo(Hoadon::class, 'room_id');
    }
}
