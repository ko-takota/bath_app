<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bath;
use App\Models\User;

class Like extends Model
{
    use HasFactory;

    // 配列内の要素を書き込み可能にする
  protected $fillable =
  [
    'reply_id',
    'user_id',
  ];

  public function bath()
  {
    return $this->belongsTo(Bath::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
