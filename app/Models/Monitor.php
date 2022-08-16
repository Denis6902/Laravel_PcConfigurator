<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    use HasFactory;

    protected $table = "monitor";
    protected $appends = ['tableName'];

    public function getTableNameAttribute()
    {
        return $this->table; //or however you want to manipulate it
    }
}
