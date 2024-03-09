<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListRecoCategory extends Model
{
    use HasFactory;


    public function recoCategory()
    {
        // 일대다 >> 다
        return $this->hasMany(RecoCategory::class);
    }

}
