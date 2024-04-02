<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Blog_Review as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;

class Blog_Review extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'Blog_Review';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "Title",
        "Content",
        "Score",
        "User_no",
        "Blog_no"
    ];


}
