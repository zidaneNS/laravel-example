<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    // protected $fillable = ["name"];
    protected $guarded = [];

    public function job () {
        return $this->hasMany(JobList::class);
    }

    public function user () {
        return $this->belongsTo(User::class);
    }
}
