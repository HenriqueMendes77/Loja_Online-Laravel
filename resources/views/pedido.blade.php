@extends('template.default')
@section('content')

<script>
    document.getElementById('a-menu-home').className = "a-menu";
    document.getElementById('a-menu-cliente').className = "a-menu";
    document.getElementById('a-menu-produto').className = "a-menu";
    document.getElementById('a-menu-categoria').className = "a-menu";
    document.getElementById('a-menu-contato').className = "a-menu";
    document.getElementById('a-menu-pedido').className = "a-active";
</script>

<section class="section-principal">
    <div class="div-center">
        <form class="form" style="width: 40%;">
            <h1 class="h1-form">Pedido</h1>
            <fieldset>
                <div class="form-group">
                    <label>Produto:</label>
                    <input type="text" name="produto" class="form-control" disabled>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label>Preço:</label>
                        <input type="text" name="preco" class="form-control" disabled>
                    </div>
                    <div class="form-group col">
                        <label>Categoria:</label>
                        <input type="text" name="categoria" class="form-control" disabled>
                    </div>
                </div>
                <div class="form-group">
                        <label>Endereço:</label>
                        <input type="text" name="categoria" class="form-control" disabled>
                    </div>
                <div class="row">
                    <div class="form-group col">
                        <label>Numero:</label>
                        <input type="text" name="preco" class="form-control" disabled>
                    </div>
                    <div class="form-group col">
                        <label>Quantidade:</label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="quantidade" placeholder="ex:99" class="form-control" style="width: 6rem;">
                    </div>
                </div>
            </fieldset>
            <div class="form-group text-right">
                <input type="submit" name="btn_enviar" value="Comprar" class="btn-vermelho btn-block">
            </div>
        </form>
    </div>
</section>

@endsection