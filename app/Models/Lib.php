<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lib extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dateOfFoundation',
        'address'
    ];

    public function departaments(){
        return $this->hasMany(Department::class);
    }
}
