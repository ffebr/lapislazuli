<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChallengePrivate extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'type',
        'start_date',
        'end_date',
        'is_over',
        'employee_id'
    ];

    // Связь с моделью Employee (один ко многим)
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}


