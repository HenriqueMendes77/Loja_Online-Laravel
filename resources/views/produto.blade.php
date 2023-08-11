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
        <form action="{{url('/produto/inserir')}}" method="post" class="form" style="width: 40%;">
        {{csrf_field()}}
            <h1 class="h1-form">Cadastrar Produto</h1>
            <div class="row">
                <div class="col">
                    <label>Produto:</label>
                    <input type="text" name="produto" class="form-control" required>
                </div>
                <div class="col">
                    <label>Categoria:</label>
                    <input type="text" name="categoria" class="form-control" required>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col">
                    <label>Preço:</label>
                    <input type="text" name="valor" class="form-control" required>
                </div>
                <div class="col">
                    <label>Quantidade:</label>
                    <input type="text" name="quantidade" class="form-control" required>
                </div>
            </div>
            <br />
            <div class="form-group">
                <textarea name="descproduto" class="form-control" placeholder="Descrição do produto..."></textarea>
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file">
            </div>
            <div class="form-group text-right">
                <input type="submit" name="btn_enviar" value="Salvar" class="btn-vermelho">
            </div>
        </form>
    </div>
    <br>
    <br>
    <br>
    <div class="div-center">
        <table class="form2">
            <thead>
                <tr>
                    <th class="cat2"> Produtos </th>
                    <th class="cat2"> Categoria </th>
                    <th class="cat2"> Valor </th>
                    <th class="cat2"> Quantidade </th>
                    <th class="cat2"> Opções </th>
                </tr>
            </thead>
            <tbody>
            @foreach($produto as $pro)
                <tr>
                    <td class=""> <?php echo mb_strimwidth("{$pro->produto}" , 0, 60, "...")?> </td>
                    <td class="cat3"> {{$pro->idCategoria}} </td>
                    <td class="cat"> {{$pro->valor}} </td>
                    <td class="cat"> {{$pro->quantidade}} </td>
                    <td>
                    <button class="btn btn-dark m-1" type="button">
                            <a style="color: #fff; text-decoration: none;" href="/produto-editar/{{$pro->idProduto}}/editar">Editar</a>
                    </button>
                    <button class="btn btn-vermelho m-1" type="button">
                            <a style="color: #fff; text-decoration: none;" href="/produto/{{$pro->idProduto}}">Excluir</a>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection
