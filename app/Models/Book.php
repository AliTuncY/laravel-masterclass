<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['is_deleted'];

    public function scopeNotDeleted($query){
        return $query->where('is_deleted', 0);
    }
}
