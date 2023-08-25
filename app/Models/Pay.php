<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Bath;
use App\Models\Plan;

class Pay extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'bath_id',
        'plan_id',
    ];

    public function bath()
    {
        return $this->belongsTo(Bath::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}

