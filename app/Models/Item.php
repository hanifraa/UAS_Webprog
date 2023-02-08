<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $primaryKey ='item_id';
    protected $fillable =
    [
        'item_name',
        'item_desc',
        'price',
        'item_pict'
    ];

    public function Order()
    {
        return $this->belongsTo(Order::class,'item_id');
    }
}
