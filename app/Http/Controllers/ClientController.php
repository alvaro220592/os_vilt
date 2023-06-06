<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as Request2;

class ClientController extends Controller
{
    public function index(){

        return inertia('Client/Index', [
            'clients' => Client::query()->with(['address.city.state', 'email', 'telefone'])

                ->when(Request2::input('search'), function($query, $search) {
            
                $query->where('nome', 'like', "%$search%");
            
            })->paginate(10)->withQueryString(),

            // 'filters' => Request2::only(['search'])
        ]);
    }
    
    public function show($id){

    }
    
    public function create(){
        return inertia('Client/Form');
    }
    
    public function store(Request $request){
        dd($request->all());
    }
    
    public function edit($id){
    
    }
    
    public function update(Request $request, $id){
    
    }
    
    public function destroy($id){
    
    }
}
