<?php

namespace App\Http\Controllers;

use App\Models\FidelityCard;
use App\Models\FidelityPlan;
use Illuminate\Http\Request;

class FidelityCardController extends Controller
{
    public function request()
    {
        $plans = FidelityPlan::getFidelityPlan(auth()->user()->id);
        return view('card.request', [
            'plans' => $plans,
        ]);
    }

    public function requestPost(Request $request)
    {
        try {
            FidelityCard::create([
                'consumed_quantity' => 0,
                'fidelity_plan_id'  => $request->fidelity_plan_id,
                'user_id'           => auth()->user()->id,
            ]);
        } catch (\Exception $e) {
            self::threadException($e);
        }

        return redirect()->route('card-validate');
    }

    public function validateUse()
    {
        $fidelityCards = FidelityCard::getFidelityCards(auth()->user()->id);
        return view('card.validate', [
            'fidelityCards' => $fidelityCards,
        ]);
    }
}
