<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // Specify the table name (optional, Laravel will automatically assume 'todos')
    protected $table = 'todos';

    // Define the attributes that can be mass-assigned
    protected $fillable = ['task', 'is_done'];

    // Optional: Define a default value for the 'is_done' attribute if not set
    protected $attributes = [
        'is_done' => false, // Default is false (not done)
    ];
}