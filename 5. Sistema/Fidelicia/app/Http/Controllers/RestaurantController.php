<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function restaurant()
    {
        $restaurants = Restaurant::getRestaurant(auth()->user()->id);
        return view('restaurant.restaurant', [
            'restaurants' => $restaurants,
        ]);
    }

    public function create()
    {
        return view('restaurant.create');
    }

    public function store(Request $request)
    {
        try {
            Restaurant::create(
                array_merge(
                    $request->all(),
                    ['user_id' => auth()->user()->id]
                )
            );
        } catch (\Exception $e) {
            self::threadException($e);
            return redirect()->route('restaurant-create')->with($request->all());
        }

        return redirect()->route('restaurants');
    }
}
