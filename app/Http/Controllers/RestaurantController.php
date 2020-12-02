<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestaurantRequest;
use App\Http\Resources\MenuResource;
use App\Http\Resources\RestaurantResource;
use App\Models\Restaurant;

class RestaurantController extends Controller
{

    public function menus(Restaurant $restaurant)
    {
        return MenuResource::collection($restaurant->menus);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return RestaurantResource::collection(Restaurant::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RestaurantRequest $request)
    {
        return Restaurant::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        return new RestaurantResource($restaurant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(RestaurantRequest $request, Restaurant $restaurant)
    {
        $restaurant->update($request->all());

        return new RestaurantResource($restaurant);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Restaurant $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return response()->json(null, 204);
    }
}
