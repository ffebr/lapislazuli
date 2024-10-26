<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAchievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'title',
        'achievement'
    ];

    // Связь с моделью Employee
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

