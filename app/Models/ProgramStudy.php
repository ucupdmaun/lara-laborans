<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProgramStudy extends Model
{
    use HasFactory;
    
    protected $fillable = ['program_study_name', 'program_study_description'];

    public function lab(): HasMany
    {
        return $this->hasMany(Lab::class);
    }
}
