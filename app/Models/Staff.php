<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Staff extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'staffs';
    protected $fillable = [
                            'staffpic', 
                            'staffname', 
                            'staffmail', 
                            'staffjob', 
                            'staffphone', 
                            'staffabt'
                        ];
}
