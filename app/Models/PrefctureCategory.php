<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AreaCategory;

class PrefctureCategory extends Model
{
    use HasFactory;

    public function area()
    {
        return $this->belongsTo(AreaCategory::class);
    }
}
