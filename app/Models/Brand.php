<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = "brand";
    protected $appends = ['illustrationImageId'];

    public function getIllustrationImageIdAttribute()
    {
        return random_int(2,8); //or however you want to manipulate it
    }
}
