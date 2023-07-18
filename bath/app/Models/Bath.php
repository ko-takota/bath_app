<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PrefctureCategory;
use App\Models\User;

class Bath extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'bath_name', 'information', 'price', 'address', 'user_id', 'prefcture_category_id'];
    protected $table = 'bathes';

    public function category()
    {
        return $this->belongsTo(PrefctureCategory::class, 'prefcture_category_id');
    }


    public function users() {
        return $this->belongsTo(User::class, 'carts')
        ->withPivot('id');
    }
}
