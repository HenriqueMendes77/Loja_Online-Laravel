@extends('template.default')
@section('content')

<script>
    document.getElementById('a-menu-home').className = "a-active";
    document.getElementById('a-menu-cliente').className = "a-menu";
    document.getElementById('a-menu-produto').className = "a-menu";
    document.getElementById('a-menu-categoria').className = "a-menu";
    document.getElementById('a-menu-contato').className = "a-menu";
    document.getElementById('a-menu-pedido').className = "a-menu";
</script>

<section class="section-principal">
        
        <div class="div-center mb-4">
        <?php
         if(isset($_SESSION['logado'])){
            echo "<nav class='navbar navbar-light bg-light' style='border-radius: 5px; width: 50%;'><p class='alerta-verde'>Login realizado</p></nav>";
         }
         ?>
        </div>
        <div class="div-center">
            <nav class="navbar navbar-light bg-light" style="border-radius: 5px; width: 97%;">
            <form action="{{url('/pesquisar')}}" method="get" class="form-inline">
                {{csrf_field()}}
                        <div class="dropdown m-2">
                            <select class="form-control" name="filtroCategoria" id="filtroCategoria">
                                <option value=""><i class="fa-solid fa-filter"></i> Filtrar por categoria</option>
                                <option value="1">Notebook</option>
                                <option value="2">Mouse</option>
                                <option value="3">Fone</option>
                                <option value="4">Projetor</option>
                                <option value="5">Tablet</option>
                                <option value="6">TV</option>
                                <option value="7">Relógio</option>
                                <option value="8">Eletrodoméstico</option>
                                <option value="9">Pelúcia</option>
                                <option value="10">PC Gamer</option>
                                <option value="11">Celular</option>
                            </select>
                            
                        </div>
                        <div class="dropdown">
                            <select class="form-control" name="filtroPreco" id="filtroPreco">
                                <option value=""><i class="fa-solid fa-filter"></i> Filtrar por preço</option>
                                <option value="20">Até R$ 20</option>
                                <option value="50">Até R$ 50</option>
                                <option value="100">Até R$ 100</option>
                                <option value="1000">Até R$ 1000</option>
                                <option value="3000">Até R$ 3000</option>
                                <option value="3000">Acima de R$ 3000</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-pesquisar m-2">Pesquisar</button>
                </form>

                <form action="{{url('/pesquisar')}}" method="get" class="form-inline">
                    {{csrf_field()}}
                    <div class="form-group mx-sm-3">
                        <input type="text" class="barra-pesquisa form-control" id="txPesquisa" name="txPesquisa" placeholder="Pesquisar Produtos">
                    </div>
                    <button type="submit" class="btn btn-pesquisar">Pesquisar</button>
                </form>
            </nav>
        </div>

    <div class="d-flex flex-wrap div-center-welcome">
        @foreach($produto as $pro)
        <div class="card m-2 mt-3" style="width: 20rem;">
            <div class="text-center mb-4"><img class="img-produto m-3" src="{{$pro->imagem}}" alt="Imagem de capa do card"></div>

            <div class="card-body">
                <h5 class="card-title"><?php echo mb_strimwidth("{$pro->produto}" , 0, 100, "...");?></h5>
                
                <p class="card-text">
                    Categoria: {{$pro->idCategoria}}
                    <br>
                    Preço: {{$pro->valor}}
                    <br>
                    Quantidade: {{$pro->quantidade}}
                </p>
                <p class="card-text">
                    <b>Descrição:</b>
                    <?php echo mb_strimwidth("{$pro->descprod}" , 0, 130, "... <small><a href='#'>Ler mais</a></small>")?>
                </p>
            </div>
            
            <div class="card-footer mt-2"><a href="/pedido" class="btn btn-vermelho btn-block">Comprar</a></div>
        </div>
        @endforeach
    </div>
</section>

@endsection
