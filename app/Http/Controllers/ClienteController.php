<?php

namespace App\Http\Controllers;


use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ClienteController extends Controller
{
    public function index(): View
    {
        
        $clientes = Cliente::get();
        
        return view('clientes.index',['clientes' => $clientes]);
                    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate(
            [
            'nome_razao' => 'required',
            // 'cnpj' => 'required'
            ],
        [
            'required' => 'O campo :attribute deve ser preenchido'
        ]
    );
        
        Cliente::create($request->all());
         
        return redirect()->route('cliente.index')
                        ->with('success','Cliente criado com sucesso .');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente): View
    {
        return view('clientes.show',compact('cliente'));
    }
  

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente): View
    {
        return view('clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente): RedirectResponse
    {
        $request->validate(
        [
            'nome' => 'required',
            'cnpj' => 'required'
        ],
        [
            'required' => 'O campo :attribute deve ser preenchido'
        ]
    );

        $cliente->update($request->all());
        
        return redirect()->route('cliente.index')
                        ->with('success','Cliente alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente): RedirectResponse
    {
        $cliente->delete();
         
        return redirect()->route('cliente.index')
                        ->with('success','Cliente deletado com sucesso');
    }
}
