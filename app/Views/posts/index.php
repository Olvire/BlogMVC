<div class="row">
    <div class="col-sm-8">
        <div class="card-deck-wrapper">
            <div class="card-deck">
                <?php $i = 1; foreach( $posts as $post): ?>
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title"><?= $post->titre; ?></h4>
                            <h6 class="card-subtitle text-muted"><?= $post->categorie;?></h6>
                        </div>
                        <img class="card-img-top" src="http://lorempicsum.com/futurama/354/200/1" alt="Card image cap">
                        <div class="card-block">
                            <p class="card-text"><?= $post->extrait; ?></p>
                        </div>
                    </div>
                <?php $i++; if($i % 2){?>
                </div>
            </div>
            <div class="card-deck-wrapper">
               <div class="card-deck">
            <?php } endforeach; ?>
            </div>
        </div>
    </div>
   <div class="col-sm-4">
       <ul>
          <?php foreach( $categories as $categorie): ?>
           <li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>
           <?php endforeach; ?>
        </ul>
    </div>
</div>
