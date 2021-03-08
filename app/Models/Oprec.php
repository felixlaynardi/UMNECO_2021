<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oprec extends Model
{
    use HasFactory;

    protected $fillable =[
        'team',
        'fullname',
        'nim',
        'faculty',
        'major',
        'classyear',
        'place_of_birth',
        'birthdate',
        'instagram',
        'line',
        'phonenumber',
        'email',
        'photo',
        'experience',
        'about',
        'why',
        'division',
        'subdiv',
        'question1',
        'question2'
    ];
}
