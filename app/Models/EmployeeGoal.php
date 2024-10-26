<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeGoal extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'title',
        'goal'
    ];

    // Связь с моделью Employee
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
