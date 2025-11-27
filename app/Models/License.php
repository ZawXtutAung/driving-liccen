<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'license_number',
        'name',
        'nrc_number',
        'date_of_birth',
        'blood_type',
        'expiry_date',
        'license_type',
        'address',
        'photo_path',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'date_of_birth' => 'date',
            'expiry_date' => 'date',
        ];
    }
}
