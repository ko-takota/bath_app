<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PrefctureCategory;
use App\Models\User;

class Bath extends Model
{
    use HasFactory;
    protected $guarded = ['bath_name', 'information', 'price', 'address', 'admin_id', 'prefcture_category_id'];
    protected $table = 'bathes';

    public function category()
    {
        return $this->belongsTo(PrefctureCategory::class, 'prefcture_category_id');
    }


    public function users() {
        return $this->belongsToMany(User::class, 'carts')
        ->withPivot('id');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
    
    public function plans()
    {
        return $this->hasMany(Plan::class, 'bath_id');
    }
}
