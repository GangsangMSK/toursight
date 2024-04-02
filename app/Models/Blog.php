<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Blog as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;

class Blog extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'Blog';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "Title",
        "User_no",
        "Date",
        "View_count",
        "Content",
        "Thumbnail",
        "Address",
        "Local",
        "Total_score"
    ];


}
