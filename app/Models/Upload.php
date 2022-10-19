<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Upload extends Model
{
    protected $table = "uploads";

    protected $guarded = ['id'];
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
