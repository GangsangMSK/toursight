<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Blog as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'blog';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "title",
        "user_no",
        "date",
        "view_count",
        "content",
        "thumbnail",
        "address",
        "local",
        "total_score"
    ];


}
