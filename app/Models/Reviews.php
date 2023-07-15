<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $fillable = ['movies_id', 'users_id', 'date', 'description', 'rating'];
    public function movies()
    {
        return $this->belongsTo(Movies::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
