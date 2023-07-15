<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prefecture;

class Bath extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'bath_name', 'price', 'prefecture_id', 'address', 'user_id'];
    protected $table = 'bathes';

    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }


    public function user() {
        return $this->belongsTo(User::class);
    }

}
