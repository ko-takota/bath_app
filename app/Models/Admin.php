<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Bath;

class Admin extends Authenticatable
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function baths()
    {
        return $this->belongsToMany(Bath::class, 'admin_baths', 'admin_id', 'bath_id');
    }


    public function selectedBaths()
    {
        return $this->belongsToMany(Bath::class, 'admin_bath_selected', 'admin_id', 'bath_id');
    }
}
