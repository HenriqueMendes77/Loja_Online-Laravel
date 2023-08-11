<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!--Link css-->
        <link rel="stylesheet" href="{{url('css/style.css')}}">

        <!--Link Bootstrap (offline)-->
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">

        <!--Link Fontawesome (online)-->
        <link rel="stylesheet" href="{{url('https://use.fontawesome.com/releases/v5.13.0/css/all.css')}}"
        integrity="sha384-
        Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"crossorigin="anony
        mous"/>

        <!--Link Javascript (offline)-->
        <script type="text/javascript" src="{{url('js/jquery-3.3.1.min.js')}}"></script>
        <script type="text/javascript" src="{{url('js/jquery.mask.min.js')}}"></script>

        <!--javascript-->
        <script src="{{url('js/script.js')}}"></script>
    </head>
    <body>
        <?php
        session_start();
        ?>
        <header>
            <nav class="navbar justify-content-between">
                <a href="/" class="a-titulo">
                    <img src="{{url('img/polvo-vermelho.png')}}" width="80" height="70" style="margin-right: 10px;">
                    <p class="titulo-menu">Polvo Tech</p>
                </a>
                <ul class="ul-menu">
                    <li class="li-menu"> <a href="/" class="a-menu" id="a-menu-home"> Home </a> </li>
                    <li class="li-menu"> <a href="/produto" class="a-menu" id="a-menu-produto"> Produto </a> </li>
                    <li class="li-menu"> <a href="/categoria" class="a-menu" id="a-menu-categoria"> Categoria </a> </li>
                    <li class="li-menu"> <a href="/contato" class="a-menu" id="a-menu-contato"> Contato </a> </li>
                    <li class="li-menu"> <a href="/pedido" class="a-menu" id="a-menu-pedido"> Pedido </a> </li>
                    <li class="li-menu"> <a href="/cliente" class="a-menu" id="a-menu-cliente"> Cliente </a> </li>
                    <!--li class="li-menu"> <a href="/logout" class="a-menu" id="a-menu-pedido"> Sair </a> </li-->
                </ul>
            </nav>
        </header>

        @yield('content')

        <footer>
            <div class="div-center">
                <ul class="ul-rodape">
                    <li class="titulos-rodape">Desenvolvedores:</li>
                    <li class="li-footer">Henrique Mendes</li>
                    <li class="li-footer">Bruno Lima</li>
                    <li class="li-footer">Fabricio Souza</li>
                </ul>
                <ul class="ul-rodape" style="margin: 5% 15% 5% 15%">
                    <li class="titulos-rodape">Github:</li>
                    <li class="li-footer">
                        <a href="https://github.com/HenriqueMendes7" target="_blank" class="a-footer">HenriqueMendes7</a>
                    </li>
                    <li class="li-footer">
                        <a href="https://github.com/bruninholm" target="_blank" class="a-footer">bruninholm</a>
                    </li>
                    <li class="li-footer">
                        <a href="https://github.com/0Eu0" target="_blank" class="a-footer">0Eu0</a>
                    </li>
                </ul>
                <ul class="ul-rodape">
                    <li class="titulos-rodape">Dúvidas:</li>
                    <li class="li-footer">
                        <a href="#" class="a-footer">Quem somos?</a>
                    </li>
                    <li class="li-footer">
                        <a href="/contato" class="a-footer">Contato</a>
                    </li>
                    <li class="li-footer">
                        <a href="#" class="a-footer">Ajuda</a>
                    </li>
                </ul>
            </div>
            <div class="frase-rodape">
                <p> Todos os direitos reservados - 2022 </p>
            </div>
        </footer>
    </body>
</html>