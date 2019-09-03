<html>

<head>
<?php
    $head_title = "Mirror Fashion";
    $css = "<link rel=\"stylesheet\" href=\"css/reset.css\">\n<link rel=\"stylesheet\" href=\"css/estilos.css\">";
    include "head.php";
?>
</head>

<!--Inicio do Body-->
<body>
    <!--Body dividido em cabeçalho (header), principal (<div id="main") e rodape (footer)-->
    <?php
    include "header.php";
    ?>
    <!--Inicio do conteúdo principal do main-->
    <div id="main">
        <!--O contéudo da <div id="main"> varia conforme a página. A <div id="main", no index.html possui 
            duas divisões principais: <div class="container destaque"> e <div class="container promocoes">-->

        <!--Inicio da divisão de destaques (<div class="container destaques")-->
        <div class="container destaque">
            <!--A <div class="container destaque" inclui o campo de busca 
                (<section class="busca"), o menu de departamentos (<section class="menu-departamento") e o banner de destaque
                (<section class="banner-destaque")-->

            <!--Campo de busca (<section class="busca">)-->
            <section class="busca">
                <h2>Buscar</h2>
                <form>
                    <input type="search">
                    <button><img src="img/busca.png"></button>
                    <!--Colocando imagem de busca ao invés do texto "Buscar"-->
                </form>
            </section>
            <!--Fim do campo de busca (<section class="busca">)-->

            <!--Início do Menu de departamentos (<section class="menu-departamento")-->
            <section class="menu-departamento">
                <h2>Departamentos</h2>
                <nav>
                    <ul>
                        <li><a href="#">Blusas e Calças</a></li>
                        <li><a href="#">Calças</a></li>
                        <li><a href="#">Saias</a></li>
                        <li><a href="#">Vestidos</a></li>
                        <li><a href="#">Sapatos</a></li>
                        <li><a href="#">Bolsas e Carteiras</a></li>
                        <li><a href="#">Acessórios</a></li>
                    </ul>
                </nav>
            </section>
            <!--Fim do Menu de departamentos (<section class="menu-departamento")-->

            <!--Início do Banner de destaque (<section class="banner-destaqque")-->
            <section class="banner-destaque">
                <figure>
                    <img src="img/destaque-home.png" alt="Promoção: Big City Night">
                </figure>
            </section>
            <!--Fim do Banner de destaque (<section class="banner-destaqque")-->

        </div>
        <!--Fim da divisão de destaques (<div class="container destaques")-->

        <!--Inicio do painel duplo de novidades (<div class="container paineis">)-->
        <div class="container paineis">

            <!--Inicio do painel esquerdo de novidades (<section class="painel novidades">)-->
            <section class="painel novidades">
                <h2>Novidades</h2>
                <ol>
                    <li>
                        <!--Cada produto é inserido em um ListItem (<li>)-->
                        <a href="produto.html">
                            <!--Todo o conteúdo (imagens e legenda) é um link Anchror-->
                            <figure>
                                <img src="img/produtos/miniatura1.png" alt="Miniatura 1">
                                <figcaption>Miniatura 1</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <!--Cada produto é inserido em um ListItem (<li>)-->
                        <a href="produto.html">
                            <!--Todo o conteúdo (imagens e legenda) é um link Anchror-->
                            <figure>
                                <img src="img/produtos/miniatura2.png" alt="Miniatura 2">
                                <figcaption>Miniatura 2</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <!--Cada produto é inserido em um ListItem (<li>)-->
                        <a href="produto.html">
                            <!--Todo o conteúdo (imagens e legenda) é um link Anchror-->
                            <figure>
                                <img src="img/produtos/miniatura3.png" alt="Miniatura 3">
                                <figcaption>Miniatura 3</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <!--Cada produto é inserido em um ListItem (<li>)-->
                        <a href="produto.html">
                            <!--Todo o conteúdo (imagens e legenda) é um link Anchror-->
                            <figure>
                                <img src="img/produtos/miniatura4.png" alt="Miniatura 4 ">
                                <figcaption>Miniatura 4</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <!--Cada produto é inserido em um ListItem (<li>)-->
                        <a href="produto.html">
                            <!--Todo o conteúdo (imagens e legenda) é um link Anchror-->
                            <figure>
                                <img src="img/produtos/miniatura5.png" alt="Miniatura 4 ">
                                <figcaption>Miniatura 4</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <!--Cada produto é inserido em um ListItem (<li>)-->
                        <a href="produto.html">
                            <!--Todo o conteúdo (imagens e legenda) é um link Anchror-->
                            <figure>
                                <img src="img/produtos/miniatura6.png" alt="Miniatura 4 ">
                                <figcaption>Miniatura 4</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <!--Cada produto é inserido em um ListItem (<li>)-->
                        <a href="produto.html">
                            <!--Todo o conteúdo (imagens e legenda) é um link Anchror-->
                            <figure>
                                <img src="img/produtos/miniatura7.png" alt="Miniatura 4 ">
                                <figcaption>Miniatura 4</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <!--Cada produto é inserido em um ListItem (<li>)-->
                        <a href="produto.html">
                            <!--Todo o conteúdo (imagens e legenda) é um link Anchror-->
                            <figure>
                                <img src="img/produtos/miniatura8.png" alt="Miniatura 4 ">
                                <figcaption>Miniatura 4</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <!--Cada produto é inserido em um ListItem (<li>)-->
                        <a href="produto.html">
                            <!--Todo o conteúdo (imagens e legenda) é um link Anchror-->
                            <figure>
                                <img src="img/produtos/miniatura11.png" alt="Miniatura 4 ">
                                <figcaption>Miniatura 4</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
            </section>
            <!--Fim do painel esquerdo de novidades (<section class="painel novidades">)-->

            <!--Inicio do painel direito dos mais vendidos-->
            <section class="painel mais-vendidos">
                <h2>Mais Vendidos</h2>
                <ol>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura10.png" alt="Miniatura 10">
                                <figcaption>Miniatura 10</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura11.png" alt="Miniatura 11">
                                <figcaption>Miniatura 11</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura12.png" alt="Miniatura 10">
                                <figcaption>Miniatura 10</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura13.png" alt="Miniatura 11">
                                <figcaption>Miniatura 11</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura14.png" alt="Miniatura 10">
                                <figcaption>Miniatura 10</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura15.png" alt="Miniatura 11">
                                <figcaption>Miniatura 11</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura5.png" alt="Miniatura 11">
                                <figcaption>Miniatura 11</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura7.png" alt="Miniatura 11">
                                <figcaption>Miniatura 11</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura9.png" alt="Miniatura 11">
                                <figcaption>Miniatura 11</figcaption>
                            </figure>
                        </a>
                    </li>

                </ol>

            </section>
            <!--Fim do painel direito dos mais vendidos-->

        </div>
        <!--Fim do painel duplo de novidades (<div class="container paineis">)-->

    </div>
    <!--Fim do conteúdo principal do main-->

    <?php include "footer.php" ?>

</body>
<!--Fim do Body-->

</html>