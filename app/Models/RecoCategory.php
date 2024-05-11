<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecoCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'categories',
    ];



    public function listRecoCategory()
    {
        // 일대다 >> 일
        return $this->belongsTo(RecoCategory::class);
    }
}
