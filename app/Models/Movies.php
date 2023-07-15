<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'poster', 'genres_id', 'synopsis', 'release_date', 'countries_id', 'rating'];
    public function genres()
    {
        return $this->belongsTo(Genres::class);
    }
    public function countries()
    {
        return $this->belongsTo(Countries::class);
    }
    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }
}
