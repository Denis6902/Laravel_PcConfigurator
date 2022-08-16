<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GPU extends Model
{
    use HasFactory;

    protected $table = "gpu";
    protected $appends = ['tableName'];

    public function getTableNameAttribute()
    {
        return $this->table; //or however you want to manipulate it
    }
}
