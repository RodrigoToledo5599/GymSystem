<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Access extends Model{

    protected $fillable = [
        'id',
        'user_id',
        'dia',
        'horario',
    ];
    
    protected $table = "access_controll";
    
}