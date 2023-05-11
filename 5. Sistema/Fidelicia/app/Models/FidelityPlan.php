<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FidelityPlan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'award',
        'restaurant_id',
        'rule_id',
    ];

    public static function getPlans(int $userId)
    {
        return self::select('restaurants.*', 'fidelity_plans.award', 'rules.product', 'rules.necessary_quantity')
            ->join('restaurants', 'restaurants.id', 'fidelity_plans.restaurant_id')
            ->join('rules', 'rules.id', 'fidelity_plans.rule_id')
            ->where('restaurants.user_id', $userId)->get();
    }

    public static function getFidelityPlan(int $userId)
    {
        $query = self::select('fidelity_plans.id as fidelity_plan_id', 'restaurants.*', 'fidelity_plans.award', 'rules.product', 'rules.necessary_quantity')
            ->join('restaurants', 'restaurants.id', 'fidelity_plans.restaurant_id')
            ->join('rules', 'rules.id', 'fidelity_plans.rule_id')
            ->where([
                ['restaurants.user_id', '!=', $userId],
            ]);

        $plans = FidelityCard::select('id')->where('user_id', $userId)->get()->toArray();
        if (!empty($plans)) {
            $query->whereRaw('fidelity_plans.id NOT IN (' . implode(',', array_column($plans, 'id')) . ')');
        }

        return $query->get();
    }
}
