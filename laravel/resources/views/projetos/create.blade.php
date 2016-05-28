@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-7">
            <h1>Criar novo projeto</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="/projetos/store" method="post" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <input type="text" name="nome" placeholder="Nome" class="form-control">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="descricao" id="" cols="30" rows="10" placeholder="Descrição"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="/home" class="btn btn-default">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
