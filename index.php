
<?php
    $page_title = 'Accueil';
    include_once 'header.php';
?>
    
<?php   
    include_once 'data.php';
?>

<h1>Tous les sports ^^ </h1>

<p>Le paragraphe de texte se trouvera ici</p>
<div id="visit-counter"></div>

        <div class="container">
        <div class="row g-5">
        <?php foreach($articles as $key => $art):?>
            <div class="col-xl-3 col-lg-4">
                    <div class="square">
                        <div class="card">
                            <img src="<?php echo $art['imagePath']; ?>" class="card-img-top" alt="..."> 
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $art['name']; ?></h5>
                                <p class="card-text">
                                    <?php 
                                            echo substr($art['article'],0,25).'...';
                                    ?>
                                </p>
                            </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?php echo $art['date']; ?></li>
                                    <li class="list-group-item"><?php echo $art['createdBy']; ?></li>
                                </ul>
                            <div class="card-body">
                                <a href="article.php?position=<?php echo $key; ?>" class="card-link">Lire l'article</a>
                                <!-- <a href="#" class="card-link">Another link</a> -->
                            </div>
                        </div>
                    </div>
            </div>
     
            <?php
                 endforeach;
            ?>

        </div>
        </div>
        

<?php
    include_once 'footer.php';
?>
