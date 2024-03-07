<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommend extends Model
{
    use HasFactory;



    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function recoCategory()
    {
        return $this->belongsTo(RecoCategory::class);
    }

}
