<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecoCategory extends Model
{
    use HasFactory;



    public function recommend()
    {
        return $this->hasMany(Recommend::class);
    }
}
