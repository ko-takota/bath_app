<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bath extends Model
{
    use HasFactory;
    // protected $guarded = ['id', 'bath_name', 'prefecture_id', 'address'];
    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }

}
