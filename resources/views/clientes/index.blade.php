@extends('clientes.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cadastro de Cliente </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cliente.create') }}"> Criar novo Cliente</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Descrição</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nome_razao }}</td>
           
            <td>
                <form action="{{ route('cliente.destroy',$cliente->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('cliente.show',$cliente->id) }}"><i class="fa-regular fa-eye"></i> Show</a>    
                    <a class="btn btn-primary" href="{{ route('cliente.edit',$cliente->id) }}"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="fa-sharp fa-solid fa-trash btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
   
      
@endsection