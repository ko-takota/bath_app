<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bath;


class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];
    protected $table = 'posts';

    protected $fillable = [
        'bath_id',
        'title',
        'body',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function PostsAdminId($admin_id)
    {
        $result = $this->where('bath_id', $admin_id)->get();
        return $result;
    }

    public function bath()
    {
        return $this->belongsTo(Bath::class, 'bath_id');
    }
}
