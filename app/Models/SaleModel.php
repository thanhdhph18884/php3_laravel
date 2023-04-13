<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'start_date',
        'end_date',

    ];
    protected $table = 'sales';
    protected $primaryKey = 'sale_id';
}
