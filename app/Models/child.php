<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Child extends Model
{
    use HasFactory;

    // protected $fillable = ['employee_id', 'name', 'age'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
