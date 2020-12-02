<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Http\Resources\MenuResource;
use App\Http\Resources\ProductResource;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

        
    /**
     * Returns all the [Product] entries that belong to the given [menu].
     *
     * @param  Menu $menu
     * @return ProductResource collection.
     */
    public function products(Menu $menu)
    {
        return ProductResource::collection($menu->products);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MenuResource::collection(Menu::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        return Menu::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
        return new MenuResource($menu);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return response()->json(null, 204);
    }
}
