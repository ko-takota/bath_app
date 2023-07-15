<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bath;

class Prefecture extends Model
{
    use HasFactory;
    // protected $guarded = ['id', 'prefecture_name'];

    public function getLists()
    {
        $prefecture = Prefecture::pluck('prefecture_name', 'id');

        return $prefecture;
    }


    public function bath()
    {
        return $this->hasMany(Bath::class);
    }
}
