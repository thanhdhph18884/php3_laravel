<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoadon extends Model
{
    use HasFactory;
    protected $fillable = [
        'user',
        'email',
        'room_id',
        'date_rent',
        'money',
    ];
    protected $table = 'hoa_don';
    protected $primaryKey = 'hoadon_id';
    public function room()
    {
        return $this->belongsTo(ProductModel::class, 'room_id');
    }
}
