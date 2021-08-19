<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipowner;
use App\Models\Car;
use Illuminate\View\View;

class searchController extends Controller
{
    public function index()
    {
        $Armadoras=Shipowner::all();
        //dd($Armadoras);
        return view('Search.welcome', ['Armadoras'=>$Armadoras]);
    }
    public function searchCar($id)
    {
        $Armadora=Shipowner::find($id);
        $Armadoras=Shipowner::all();
        //dd($Armadora->cars->first());
        return view('Search.searchByShipowner', ['Armadoras'=>$Armadoras, 'Carros'=>$Armadora->cars, 'id'=>$id]);
    }
    public function searchProduct($id)
    {
        $Carro=Car::find($id);
        $Carros=Car::all();
        //dd($Carro->products->first());
        return view('Search.searchByCar', ['Productos'=>$Carro->products, 'Carro'=>$Carro]);
    }
}
