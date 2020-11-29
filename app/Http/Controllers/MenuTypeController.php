<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\MenuTypeResource;
use App\Models\MenuType;

class MenuTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MenuTypeResource::collection(MenuType::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'menu_type_name' => 'required|max:255'
        ));

        return MenuType::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  MenuType  $menu_type
     * @return \Illuminate\Http\Response
     */
    public function show(MenuType $menu_type)
    {
        return new MenuTypeResource($menu_type);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  MenuType  $menu_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuType $menu_type)
    {
        $menu_type->delete();
        return response()->json(null, 204);
    }
}
