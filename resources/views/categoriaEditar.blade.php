@extends('template.default') @section('content')

<script>
    document.getElementById("a-menu-home").className = "a-menu";
    document.getElementById("a-menu-cliente").className = "a-menu";
    document.getElementById("a-menu-produto").className = "a-menu";
    document.getElementById("a-menu-categoria").className = "a-active";
    document.getElementById("a-menu-contato").className = "a-menu";
    document.getElementById('a-menu-pedido').className = "a-menu";
</script>

<section class="section-principal">
    <div class="div-center">
        <form action="{{url('/categoria-alterar/'.$categorias->idCategoria)}}" method="post" class="form" style="width: 40%;">
            {{csrf_field()}}
            <h1 class="h1-form">Cadastrar Categoria</h1>
            <div class="form-group">
                <input type="text" name="nomeCategoria" class="form-control" placeholder="Nome da categoria" value="{{$categorias->categoria}}"/>
            </div>
            <div class="form-group text-right">
                <input type="submit" name="btn_enviar" value="Salvar" class="btn-vermelho" />
            </div>
        </form>
    </div>
</section>

@endsection
