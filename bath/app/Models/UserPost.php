<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class UserPost extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    protected $fillable = [
        'bath_id',
        'body',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function bath()
    {
        return $this->belongsTo(Bath::class, 'bath_id');
    }
}
