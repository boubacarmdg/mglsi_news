<?php

require 'backend.php';

require 'views/layout/nav.php';

$article = $_GET['article'];
$oneArticle = $model->selectOne("SELECT * FROM article WHERE id = $article");
?>

<main>
                <div id="title"><?=$oneArticle['titre']?>
                   <span class="catego">

                   </span>
                </div>

                    <div id="view-article">
                                <div class="content"><?=$oneArticle['contenu']?></div>
                            </div>

                     </div>

                     <a id="returnlink" href="/archi/?categorie=<?=$oneArticle['categorie']?>">&laquo; Revenir à la page précédente</a>

</main>

</body>
</html>
