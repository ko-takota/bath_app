<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Bath;
use App\Models\Plan;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function baths()
    {   //カートに入れる
        return $this->belongsToMany(Bath::class, 'carts')
        ->withPivot('id');
    }

    public function plan()
    {
        return $this->belongsToMany(Plan::class);
    }

    public function likes()
    {
        return $this->belongsToMany(Bath::class, 'likes', 'user_id', 'bath_id')->withTimestamps();
    }
    //いいねをつける処理
    public function like($bathId)
    {
        $exist = $this->is_like($bathId);

        if($exist){
            return false;
        } else {
            $this->likes()->attach($bathId);
            return true;
        }
    }
    //いいねを外す処理
    public function unlike($bathId)
    {
        $exist = $this->is_like($bathId);

        if($exist){
            $this->likes()->detach($bathId);
            return true;
        } else {
            return false;
        }
    }
    //すでにいいねをしているかどうか
    public function is_like($bathId)
    {
        return $this->likes()->where('bath_id', $bathId)->exists();
    }
}
