<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Document; // Ensure this class exists in the specified namespace

class Employee extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'email', 'position'];

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function children()
    {
        return $this->hasMany(Child::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
