<?php
$link = "seu-dns";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title> Ambiente PHP 7.1 </title>

    <style type="text/css">
        body {
            background-color: #F4F6FA;
        }

        .bg-logo {
            background: url(transparencia/img/logo_sec.png) no-repeat;
            background-size: 100%;
            background-position: center;
            width: 300px;
            height: 200px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
        }

        .buttons {
            display: flex;
            flex-flow: column nowrap;
            justify-content: center;
            align-items: center;
            padding-top: 3%;
        }

        .btn-sistema {
            width: 300px;
            height: 40px;
            background-color: #33A789;
            color: #fff;
            border: 1px solid #ccc;
            outline: none;
            font-size: 13pt;
            font-weight: 500;
        }

        .btn-sistema:last-child {
            margin-top: 1%;
        }

        .btn-sistema:hover {
            background-color: #24755f;
            cursor: pointer;
            transition: 0.2s;
        }
    </style>
</head>

<body>
    <div class="bg-logo"></div> <br>

    <h2> Ambiente | PHP 7.1 </h2>
    <hr>

    <div class="buttons">
        <a href="<?= $link . '/transparencia' ?>">
            <button class="btn-sistema">
                Ir para o APP
                <i class="fas fa-external-link-alt" style="float: right"></i>
            </button>
        </a>

        <a href="<?= $link . '/sia' ?>">
            <button class="btn-sistema">
                Ir para o SIA
                <i class="fas fa-external-link-alt" style="float: right"></i>
            </button>
        </a>
    </div>
</body>

</html>