<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $casts = [
        'price' => 'integer',
    ];

    protected $fillable = [
        'name',
        'price',
        'contents',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
