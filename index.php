<?php

require 'backend.php';

require 'views/layout/nav.php';

$catego = $_GET['categorie'];
$articles = $model->selectAll("SELECT a.id as artid, a.titre as titre, a.contenu as contenu  FROM article a INNER JOIN categorie c ON a.categorie = c.id WHERE c.id = $catego");
$actual_category = $model->selectOne("SELECT libelle FROM categorie WHERE id = $catego");

?>

<main>
                <div id="title">Les articles de la catégorie
                   <span class="catego">
                    &laquo; <?=$actual_category['libelle']?> &raquo;
                   </span>
                </div>
                <?php if (count($articles) == 0) {
    print "<span class='no-art'>Aucun article pour cette catégorie.</span>";
}
?>
                    <div id="articles-container">


                        <?php
foreach ($articles as $value) {
    ?>
                            <div onclick="window.location.href='article.php?article=<?=$value['artid']?>&categorie'" class="article">
                                <div class="title"><?=$value['titre']?></div>
                                <div class="content"><?=$value['contenu']?></div>
                            </div>
                            <?php
}
?>
                     </div>

</main>

</body>
</html>
