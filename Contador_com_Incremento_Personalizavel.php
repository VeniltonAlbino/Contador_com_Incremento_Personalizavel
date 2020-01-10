<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Contador com Incremento Personalizável</title>
        <style>
            h3 {
                margin-top: 5px;
                margin-bottom: -10px;
                text-align: center;
            }
            span {
                font-weight: bold;
                font-size: 20pt;
                margin-left: 190px;
            }
            span#inc {
                font-weight: bold;
                font-size: 20pt;
                color: red;
                margin-left: 10px;
            }
            input#bvoltar {
                font-size: 20pt;
                background-color: darkblue;
                color: white;
                margin-left: 200px;
            }
        </style>
    </head>
    <body>
        <div>
            <form method="get" action="Contador_com_Incremento_Personalizavel.html">
                <h3>Contador com Incremento Personalizável</h3><br>
                <?php
                    $cont = $_GET ['select']; /* 2 */
                    $i = $_GET ['inicio'];    /* 2 */
                    $f = $_GET ['fim'];      /* 10 */
                    echo "<h3>  Começa em :  $i</h3>";
                    echo "<h3>  Termina em  : $f</h3>";
                    echo "<h3>  O Índice é de : $cont em $cont </h3>"."<br/><br/>";
                    while ($i < $f ) {
                        echo "<span>Conta-se :</span><span id='inc'> $i</span>"."<br/>";
                        $i= $i + $cont;
                    }
                ?>
                <?php
                    while ($i >= $f) {
                        echo "<span>Conta-se :</span><span id='inc'> $i</span>"."<br/>";
                        $i= $i - $cont;
                    }
                ?><br>
                <input type="submit" id="bvoltar" value="Voltar">
            </form>
        </div>
    </body>
</html>