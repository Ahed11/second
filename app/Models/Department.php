<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number',
        'floor'
    ];

    public function lib(){
        return $this->belongsTo(Lib::class);
    }
}
