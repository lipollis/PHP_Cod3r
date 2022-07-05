
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP</title>
</head>
<body>
    
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>

    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>

                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Inteiros</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Float </a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Aritméticas </a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência </a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">String </a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String </a></li>
                        <li><a href="exercicio.php?dir=tipos&file=booleano">Booleano </a></li>
                        <li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões </a></li>
                    </ul>
                </div>


            </nav>
        </div>
    </main>

    <footer class="rodape">
        Aline Pollis © <?= date('Y'); ?>
    </footer>
</body>
</html>