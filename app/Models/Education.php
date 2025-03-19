<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Education extends Model
{
    use HasFactory;

    // protected $fillable = ['employee_id', 'degree', 'institute', 'year'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
