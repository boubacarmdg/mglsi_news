<?php $catego = $_GET['categorie'];?>
<!DOCTYPE html>
<html lang="en">
<hea>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <?php
$categories = $model->select("categorie");
?>
</head>
<body>
<div id="sidebar">
    <div id="side-container">
            <div id="title">
                Catégories d'article
            </div>
            <ul class="category">
                <?php foreach ($categories as $value) {?>
                    <a style="text-decoration: none;" href="http://localhost:8012/archi/?categorie=<?=$value['id']?>">
                        <li <?php ($value['id'] == $catego) ? 'style="color:#008080;"' : ''?>><?=$value['libelle']?></li>
                    </a>
                <?php }?>
            </ul>
    </div>
</div>