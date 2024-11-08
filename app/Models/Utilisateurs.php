<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateurs extends Model
{
    use HasFactory;
    protected $fillable = ['username','departement','email','genre','telephone','poste'];
    public function pointages(){
        return $this->hasMany(Pointages::class);
   

}
// protected $attributes = [
//     'role' => 'utilisateurs',
// ];
// public function isAdmin()
// {
//     return $this->role === 'admin';
// }

}
