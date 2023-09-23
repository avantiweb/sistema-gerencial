@extends('clientes.layout')
  <!-- inserir menu -->
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h4>Adicionar novo cliente</h4>
        </div>
        <!-- <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('cliente.index') }}"> Voltar</a>
        </div> -->
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Ops!</strong><br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('cliente.store') }}" method="POST">
    @csrf
    
     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Razão Social:</strong>
                <input type="text" name="nome_razao" class="form-control" placeholder="Razão Social">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Nome Fantasia:</strong>
                <input type="text" name="nome_fantasia" class="form-control" placeholder="Nome Fantasia">
            </div>            
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>CPF/ CNPJ:</strong>
                <input type="text" name="cpf_cnpj" class="form-control" placeholder="Nome Fantasia">
            </div>            
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Inscrição Estadual:</strong>
                <input type="text" name="inscricao_estadual" class="form-control" placeholder="Nome Fantasia">
            </div>            
        </div>

        <hr>
        <h4>Detalhes endereço</h4>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Cep:</strong>
                <input type="text" name="cep" class="form-control" placeholder="Nome Fantasia">
            </div>            
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Endereço:</strong>
                <input type="text" name="endereco" class="form-control" placeholder="Nome Fantasia">
            </div>            
        </div>
        
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Bairro:</strong>
                <input type="text" name="bairro" class="form-control" placeholder="Nome Fantasia">
            </div>            
        </div>
        
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Número:</strong>
                <input type="text" name="numero" class="form-control" placeholder="Nome Fantasia">
            </div>            
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Cidade:</strong>
                <input type="text" name="cidade" class="form-control" placeholder="Nome Fantasia">
            </div>            
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Estado:</strong>
                <input type="text" name="estado" class="form-control" placeholder="Nome Fantasia">
            </div>            
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Telefone:</strong>
                <input type="text" name="telefone" class="form-control" placeholder="Nome Fantasia">
            </div>            
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Outro Telefone:</strong>
                <input type="text" name="outro_telefone" class="form-control" placeholder="Nome Fantasia">
            </div>            
        </div>

        <div>
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </div>
   
</form>
@endsection