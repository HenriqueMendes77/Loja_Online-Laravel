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
        <form action="{{url('/categoria/inserir')}}" method="post" class="form" style="width: 40%;">
            {{csrf_field()}}
            <h1 class="h1-form">Cadastrar Categoria</h1>
            <div class="form-group">
                <input type="text" name="nomeCategoria" class="form-control" placeholder="Nome da categoria" required>
            </div>
            <div class="form-group text-right">
                <input type="submit" name="btn_enviar" value="Salvar" class="btn-vermelho" />
            </div>
        </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="div-center">
        <table class="form2">
            <thead>
                <tr>
                <th class="cat2">#</th>
                <th class="cat2">Categoria</th>
                <th class="cat2">Opções</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1;?>
            @foreach($categoria as $c)
                <tr>
                    <th><?php echo $i; $i += 1;?></th>
                    <td>{{$c->categoria}}</td>
                    <td>
                        <button class="btn btn-dark m-1" type="button">
                            <a style="color: #fff; text-decoration: none;" href="/categoria-editar/{{$c->idCategoria}}/editar">Editar</a>
                        </button>
                        <button class="btn btn-vermelho m-1" type="button">
                            <a style="color: #fff; text-decoration: none;" href="/categoria/{{$c->idCategoria}}">Excluir</a>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection
