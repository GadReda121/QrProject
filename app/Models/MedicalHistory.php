<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class MedicalHistory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'allergies' => 'json',
        'medical_history' => 'json',
    ];

    public function allergies(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value),
        );
    }

    public function medicalHistory(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value),
        );
    }
}
