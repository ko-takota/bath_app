<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PrefctureCategory;

class AreaCategory extends Model
{
    use HasFactory;

    public function prefcture()
    {
        return $this->hasMany(PrefectureCategory::class);
    }
}
