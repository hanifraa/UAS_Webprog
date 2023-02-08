<?php

namespace App\Models;

use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'order_id';

    protected $fillable =
    [
        'account_id',
        'item_id',
        'price'
    ];

    public function Account()
    {
        return $this->belongsTo(User::class,'account_id');
    }

    public function Item()
    {
        return $this->hasOne(Item::class,'item_id','item_id');
    }
}
