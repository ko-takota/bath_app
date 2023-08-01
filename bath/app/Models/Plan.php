<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Bath;
use App\Models\Admin;
use App\Models\Cart;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'price' => 'integer',
    ];

    protected $fillable = [
        'name',
        'price',
        'contents',
        'bath_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function bath()
    {
        return $this->belongsTo(Bath::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
