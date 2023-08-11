@extends('template.default') @section('content')

<script>
    document.getElementById("a-menu-home").className = "a-menu";
    document.getElementById("a-menu-cliente").className = "a-menu";
    document.getElementById("a-menu-produto").className = "a-active";
    document.getElementById("a-menu-categoria").className = "a-menu";
    document.getElementById("a-menu-contato").className = "a-menu";
    document.getElementById('a-menu-pedido').className = "a-menu";
</script>

<section class="section-principal">
    <div class="div-center">
        <form action="{{url('/produto-alterar/'.$produtos->idProduto)}}" method="post" class="form" style="width: 40%;">
        {{csrf_field()}}
            <h1 class="h1-form">Cadastrar Produto</h1>
            <div class="row">
                <div class="col">
                    <label>Produto:</label>
                    <input type="text" name="produto" class="form-control" value="{{$produtos->produto}}"/>
                </div>
                <div class="col">
                    <label>Categoria:</label>
                    <input type="text" name="categoria" class="form-control" value="{{$produtos->idCategoria}}"/>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col">
                    <label>Preço:</label>
                    <input type="text" name="valor" class="form-control" value="{{$produtos->valor}}"/>
                </div>
                <div class="col">
                    <label>Quantidade:</label>
                    <input type="text" name="quantidade" class="form-control" value="{{$produtos->quantidade}}"/>
                </div>
            </div>
            <br />
            <div class="form-group">
                <textarea name="descprod" class="form-control" placeholder="Descrição do produto...">{{$produtos->descprod}}</textarea>
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file" />
            </div>
            <div class="form-group text-right">
                <input type="submit" name="btn_enviar" value="Salvar" class="btn-vermelho" />
            </div>
        </form>
    </div>
</section>

@endsection
