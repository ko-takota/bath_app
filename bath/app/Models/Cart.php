<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bath_id'
    ];

    //BathテーブルとCartsテーブルを紐づけ
    public function stock()
    {
        return $this->belongsTo(Bath::class);
    }
}
