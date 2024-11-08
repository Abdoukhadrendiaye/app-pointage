<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointages extends Model
{
    use HasFactory;
    protected $fillable = ['utilisateurs_id','date','heure_arrive','heure_depart','created_at',
    'updated_at'];
    public function utilisateurs(){
        return $this->belongsTo(Utilisateurs::class, 'utilisateurs_id');
}   
}
