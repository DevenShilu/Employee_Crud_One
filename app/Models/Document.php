<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Document extends Model
{
    use HasFactory;

    // protected $fillable = ['employee_id', 'title', 'file_path'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
