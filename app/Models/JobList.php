<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobList extends Model
{
    /** @use HasFactory<\Database\Factories\JobListFactory> */
    use HasFactory;

    protected $fillable = ["employer_id", "name", "pay"];

    public function employer() {
        return $this->belongsTo(Employer::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
