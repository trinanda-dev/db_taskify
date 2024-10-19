<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Field yang bisa diisi
    protected $fillable = ['title', 'date', 'time', 'completed', 'from_system'];

    // Opsi tambahan casting otomatis untuk boolean
    protected $casts = [
        'completed' => 'boolean',
        'from_system' => 'boolean',
    ];

    // Relasi ke model TaskAssignment
    public function taskAssignment()
    {
        return $this->hasMany(TaskAssignment::class, 'task_id');
    }
}