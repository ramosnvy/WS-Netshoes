
<?php

use Pedroramos\Estagio\Controller\Scraper;
use Pedroramos\Estagio\Controller\ValidateURL;

require "../../vendor/autoload.php";

$url = $_POST['url'];
$retorno = false;

if(!empty($url))
{
    $validate = new ValidateURL();
    $url = $validate->limparURL($url);
    $retorno = $validate->validarURLNetshoes($url);
}

if($retorno)
{
    $html = file_get_contents($url);
    @$domDocument = new DOMDocument();
    @$domDocument->loadHTML($html);
    $dados = new Scraper($html, $domDocument);
    $produto = $dados->setProduto();
}else
{
    header("Location: notFound.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="card-group col-4  mx-auto">
            <div class="card">
                <img class="card-img-top mx-auto text-center" src="<?php echo ($produto->getImg());?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo ($produto->getNome());?></h5>
                    <p class="card-text"><?php echo ($produto->getDescricao());?></p>
                    <?php
                    $preco = ($produto->getPreco());
                    if($preco[0] != 0)
                    {


                    ?>
                    <p class="card-text"><small class="text-muted"><?php echo ("de ".$preco[0]);?></small></p>
                    <p class="card-text"><?php ; echo ("por ".$preco[1]);?></p>
                    <a href="<?php echo ($url);?>" class="btn btn-primary">Comprar</a>

                    <?php
                    }
                    else
                    {
                    ?>
                    <p class="card-text">Produto fora de estoque</p>
                    <a href="<?php echo ($url);?>" class="btn btn-primary">Visitar</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container text-center">
    <a href="../../index.html" class="btn pesquisa btn-secondary">Nova pesquisa</a>
</div>
</body>
</html>