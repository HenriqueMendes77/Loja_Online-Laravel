@extends('template.default')
@section('content')

<script>
    document.getElementById('a-menu-home').className = "a-menu";
    document.getElementById('a-menu-cliente').className = "a-menu";
    document.getElementById('a-menu-produto').className = "a-menu";
    document.getElementById('a-menu-categoria').className = "a-menu";
    document.getElementById('a-menu-contato').className = "a-active";
    document.getElementById('a-menu-pedido').className = "a-menu";
</script>

<section class="section-principal">
    <div class="div-center">
        <form class="form" action="{{url('/contato/inserir')}}" method="post" style="width: 40%;">
        {{csrf_field()}}
            <h1 class="h1-form">Contato</h1>
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nomeContato" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="emailContato" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Telefone:</label>
                <input type="text" name="telefoneContato" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Assunto:</label>
                <input type="text" name="assuntoContato" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Mensagem:</label>
                <textarea class="form-control textarea" name="mensagemContato" required></textarea>
            </div>
            <div class="form-group text-right">
                <input type="submit" name="btn_enviar" value="Enviar" class="btn-vermelho btn-block">
            </div>
        </form>
    </div>
</section>

@endsection