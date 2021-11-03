<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'establishment_mane',
        'business_mane',
        'cnpj',
        'address',
        'number',
        'city',
        'state',
        'cep',
        'user_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'number' => 'int',
        'cep'    => 'int',
        'cnpj'   => 'int',
    ];
}
