<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as Request2;

class ClientController extends Controller
{
    public function index_original(){

        return inertia('Client/Index', [
            'clients' => Client::query()->with(['person.address.city.state', 'person.email', 'person.telefone'])

                ->when(Request2::input('search'), function($query, $search) {
            
                $query->where('nome', 'like', "%$search%");
                $query->orWhere('sobrenome', 'like', "%$search%");
                $query->orWhere('sobrenome', 'like', "%$search%");
                $query->orWhere('cpf_cnpj', 'like', "%$search%");
                $query->orWhere('num_endereco', 'like', "%$search%");
                $query->orWhereHas('address', function($addr) use($search) {
                    $addr->where('logradouro', 'like', "%$search%");
                    $addr->orWhereHas('city', function($city) use ($search) {
                        $city->where('cidade', 'like', "%$search%");
                        $city->orWhereHas('state', function($state) use($search) {
                            $state->where('sigla', 'like', "%$search%");
                        });
                    });
                });
            
            })->paginate(10)->withQueryString(),

            // 'filters' => Request2::only(['search'])
        ]);
    }

    public function index(){

        return inertia('Client/Index', [
            'clients' => Client::query()->with(['person.address.city.state', 'person.email', 'person.telefone'])

                ->when(Request2::input('search'), function($query, $search) {
            
                $query->whereHas('person', function($person) use ($search) {
                    $person->where('nome', 'like', "%$search%");
                    $person->orWhere('cpf_cnpj', 'like', "%$search%");
                    $person->orWhere('num_endereco', 'like', "%$search%");
                    $person->orWhereHas('address', function($addr) use($search) {
                        $addr->where('logradouro', 'like', "%$search%");
                        $addr->orWhereHas('city', function($city) use ($search) {
                            $city->where('cidade', 'like', "%$search%");
                            $city->orWhereHas('state', function($state) use($search) {
                                $state->where('sigla', 'like', "%$search%");
                            });
                        });
                    });
                    $person->orWhereHas('telefone', function($telefone) use ($search) {
                        $telefone->where('telefone', 'like', "%$search%");
                    });
                    $person->orWhereHas('email', function($email) use ($search) {
                        $email->where('email', 'like', "%$search%");
                    });
                });
            
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
