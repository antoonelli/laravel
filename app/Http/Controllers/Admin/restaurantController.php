<?php

namespace App\Http\Controllers\Admin;
use App\Restaurant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class restaurantController extends Controller
{
    public function index()
    {
    	return Restaurant::all();
    }
    public function new()
    {
    	return view('admin.restaurants.store');
    }
    public function store(Request $request)
    {
    	$restaurantDate = $request->all();

    	$restaurant = new Restaurant();
    	$restaurant->create($restaurantDate);

    	echo 'Restaurante criado com sucesso!';
    }
	public function edit(Restaurant $restaurant)
	{
		return view('admin.restaurants.edit', compact('restaurant'));
	}
}
