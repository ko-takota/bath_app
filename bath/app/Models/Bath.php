<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PrefctureCategory;
use App\Models\User;
use App\Models\Admin;
use App\Models\Plan;
use Illuminate\Database\Eloquent\SoftDeletes;



class Bath extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'information',
        'address',
        'admin_id',
        'prefcture_category_id',
    ];

    protected $table = 'baths';

    public function category()
    {
        return $this->belongsTo(PrefctureCategory::class, 'prefcture_category_id');
    }


    public function users() {
        return $this->belongsToMany(User::class, 'carts')
        ->withPivot('id', 'plan_id');
    }

    public function admins()
    {
        return $this->belongsToMany(Admin::class, 'admin_bath', 'bath_id', 'admin_id');
    }

    public function plans()
    {
        return $this->hasMany(Plan::class, 'bath_id');
    }
}
