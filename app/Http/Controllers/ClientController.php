<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return inertia('Client/Index', [
            'clients' => Client::with('address.city.state')->paginate(5)
        ]);
    }
    
    public function show($id){

    }
    
    public function create(){
    
    }
    
    public function store(Request $request){
    
    }
    
    public function edit($id){
    
    }
    
    public function update(Request $request, $id){
    
    }
    
    public function destroy($id){
    
    }
}