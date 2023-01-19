<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $cars = Cars::all();
        return response()->json($cars, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Cars $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Cars $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Cars $car)
    {
        //
    }
}
