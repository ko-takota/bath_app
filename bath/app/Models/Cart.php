<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'bath_id',
        'plan_id',
    ];

    //BathテーブルとCartsテーブルを紐づけ
    public function stock()
    {
        return $this->belongsTo(Bath::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

}
