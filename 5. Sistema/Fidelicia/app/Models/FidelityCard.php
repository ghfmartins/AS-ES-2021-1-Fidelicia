<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FidelityCard extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'consumed_quantity',
        'fidelity_plan_id',
        'user_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'consumed_quantity' => 'int',
    ];

    public static function getFidelityCards(int $userId)
    {
        return self::select('fidelity_cards.*', 'fidelity_plans.award', 'restaurants.establishment_mane')->where([
            'fidelity_cards.user_id' => $userId,
        ])
            ->join('fidelity_plans', 'fidelity_plans.id', 'fidelity_cards.fidelity_plan_id')
            ->join('restaurants', 'restaurants.id', 'fidelity_plans.restaurant_id')
            ->get();
    }
}
