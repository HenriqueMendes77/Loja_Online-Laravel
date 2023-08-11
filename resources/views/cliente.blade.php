@extends('template.default')
@section('content')

<script>
   document.getElementById('a-menu-home').className = "a-menu";
   document.getElementById('a-menu-cliente').className = "a-active";
   document.getElementById('a-menu-produto').className = "a-menu";
   document.getElementById('a-menu-categoria').className = "a-menu";
   document.getElementById('a-menu-contato').className = "a-menu";
    document.getElementById('a-menu-pedido').className = "a-menu";
</script>

<section class="section-principal">
   <div class="div-center">

      <!--FORMULÁRIO CADASTRO-->
      <form class="to-hide" id="formulario-cadastro" action="{{url('/cliente/inserir')}}" method="post" style="width: 30rem;">
      {{csrf_field()}}
         <h1 class="h1-form">Cadastrar</h1>
         <div class="form-group">
            <label id="label-especial">Nome:</label>
            <input type="text" class="form-control" id="nomeCliente" name="nomeCliente" placeholder="Seu nome" required>
            <p id="alert-nome" class="to-hide">Preencha o campo nome corretamente</p>
         </div>
         <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" id="emailCliente" name="emailCliente" placeholder="Seu email" required>
            <p id="alert-email" class="to-hide">Preencha o campo Email corretamente</p>
         </div>
         <div class="row">
            <div class="col">
               <label>Senha:</label>
               <input type="password" class="form-control" name="senhaCadastro" id="senhaCadastro" placeholder="Crie uma senha" required>
               <p id="alert-senha" class="to-hide">Preencha o senha Cidade corretamente</p>
            </div>
            <div class="col">
               <label>Confirmar Senha:</label>
               <input type="password" class="form-control" id="c_senhaCadastro" placeholder="Digite a senha novamente" required>
               <p id="alert-c_senha" class="to-hide">Preencha o campo Confirmar Senha corretamente</p>
            </div>
         </div>
         <br>
         <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="mostrarSenha" onclick="mostrarSenhaCadastro()">
            <label class="form-check-label" for="mostrarSenha">Mostrar senha</label>
         </div>
         <div class="form-group text-center">
            <input type="submit" name="btn_enviar" value="Cadastrar" class="btn-vermelho btn-block">
         </div>
         <div class="form-group text-center">
            <a href="/cliente?login">Já tenho uma conta</a>
         </div>
      </form>

      <!--FORMULÁRIO LOGIN-->
      <form class="form" id="formulario-login" action="{{url('/cliente/login')}}" method="post" style="min-width: 30rem">
      {{csrf_field()}}
         <h1 class="h1-form">Login</h1>
         <?php
         if(isset($login)){
            if($login == false){
               echo "<p class='alerta-vermelho'>Email ou senha incorretos</p>";
            }
         }
         ?>
         <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" id="emailCliente" name="emailCliente" placeholder="Digite seu email" required>
            <p id="alert-email" class="to-hide">Preencha o campo Email corretamente</p>
         </div>
         <div class="form-group">
            <label>Senha:</label>
            <input type="password" class="form-control" id="senhaLogin" name="senhaLogin" placeholder="Digite sua senha" required>
            <p id="alert-senha" class="to-hide">Preencha o campo Senha corretamente</p>
         </div>
         <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="mostrarSenha" onclick="mostrarSenhaLogin()">
            <label class="form-check-label" for="mostrarSenha">Mostrar senha</label>
         </div>
         <div class="form-group text-center">
            <input type="submit" name="btn_enviar" value="Login" class="btn-vermelho btn-block">
         </div>
         <div class="form-group text-center">
            <a href="/cliente?cadastro">Não tenho uma conta</a>
         </div>
      </form>
   </div>
</section>

<?php
if(isset($_GET['login'])){
   echo "<script>formLogin()</script>";
}

if(isset($_GET['cadastro'])){
   echo "<script>formCadastro()</script>";
}
?>

@endsection