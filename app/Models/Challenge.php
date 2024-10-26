<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'type',
        'start_date',
        'end_date',
        'is_over'
    ];

    // Отношение "многие ко многим" с моделью Employee через таблицу challenge_employee
    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'challenge_employee')
                    ->withPivot('participation_date')
                    ->withTimestamps();
    }
}

