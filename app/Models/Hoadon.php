<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hoadon extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'user',
        'email',
        'room_id',
        'date_rent',
        'money',
        'phone'
    ];
    protected $table = 'hoa_don';
    protected $primaryKey = 'hoadon_id';
    public function room()
    {
        return $this->belongsTo(ProductModel::class, 'room_id');
    }
}
