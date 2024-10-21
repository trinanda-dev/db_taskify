<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'date', 'time', 'completed', 'from_system', 'role'
    ];

    protected $casts = [
        'completed' => 'boolean',
        'from_system' => 'boolean',
    ];

    // Definisikan relasi ke TaskAssignment
    public function taskAssignments()
    {
        return $this->hasMany(TaskAssignment::class, 'task_id', 'id');
    }
}
