<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'start_date',
        'user_id',
        'end_date',

    ];
    public function user(){
        return $this->belongsTo(User::class ,'user_id');
    }
}
