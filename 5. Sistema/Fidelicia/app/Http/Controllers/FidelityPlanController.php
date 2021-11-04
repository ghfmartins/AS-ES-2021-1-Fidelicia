<?php

namespace App\Http\Controllers;

use App\Models\FidelityPlan;
use App\Models\Restaurant;
use App\Models\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FidelityPlanController extends Controller
{
    public function plans()
    {
        $plans = FidelityPlan::getPlans(auth()->user()->id);
        return view('fidelityplan.plans', [
            'plans' => $plans,
        ]);
    }

    public function create()
    {
        return view('fidelityplan.create', [
            'restaurants' => Restaurant::getRestaurant(auth()->user()->id),
        ]);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $rule = Rule::create($request->all());
            FidelityPlan::create(array_merge(
                ['rule_id' => $rule->id],
                $request->all()
            ));
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            self::threadException($e);
        }

        return redirect()->route('fidelityplans');
    }
}
