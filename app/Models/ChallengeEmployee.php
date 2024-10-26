<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChallengeEmployee extends Model
{
    use HasFactory;

    protected $table = 'challenge_employee';

    protected $fillable = [
        'challenge_id',
        'employee_id',
        'participation_date'
    ];

    // Связь с моделью Challenge
    public function challenge()
    {
        return $this->belongsTo(Challenge::class);
    }

    // Связь с моделью Employee
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

