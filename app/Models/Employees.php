<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'email',
        'phone_number',
        'full_name',
        'date_of_birth',
        'interests'
    ];

    // Отношение "один ко многим" с моделью EmployeeGoal
    public function goals()
    {
        return $this->hasMany(EmployeeGoal::class);
    }

    // Отношение "один ко многим" с моделью EmployeeAchievement
    public function achievements()
    {
        return $this->hasMany(EmployeeAchievement::class);
    }

    // Отношение "многие ко многим" с моделью Challenge через таблицу challenge_employee
    public function challenges()
    {
        return $this->belongsToMany(Challenge::class, 'challenge_employee')
                    ->withPivot('participation_date')
                    ->withTimestamps();
    }
    public function privateChallenges()
    {
        return $this->hasMany(ChallengePrivate::class);
    }
    
}
