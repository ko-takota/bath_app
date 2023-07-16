<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prefecture;
use App\Models\User;

class Bath extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'bath_name', 'price', 'prefecture_id', 'address', 'user_id'];
    protected $table = 'bathes';

    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }


    public function users() {
        return $this->belongsToMany(User::class, 'carts')
        ->withPivot('id');
    }
}
