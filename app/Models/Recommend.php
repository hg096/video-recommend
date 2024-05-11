<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommend extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'description',
        'is_ad',
    ];


    public function user()
    {
        // 일대다 >> 다
        return $this->belongsTo(User::class);
    }

    public function recoCategory()
    {
        // 일대다 >> 일
        return $this->hasMany(RecoCategory::class);
    }

}
