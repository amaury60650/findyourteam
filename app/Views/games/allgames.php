<?php $this->layout('layout', ['title' => 'Liste des jeux']); ?>

<?php $this->start('main_content');?>
  <div class="row">
        <?php  foreach ($games as $game) { ?>
                    <img src="assets/img/jeux/<?php echo $game['picture']; ?>" alt="...">
                    <div class="caption">
                        <h3><?php echo $game['name'] ?></h3>
                        <p><?php echo $game['description'] ?></p>
                        <p>Nombre de joueurs : <?php echo $game['nb_player'] ?></p>
                        <p>Nombre de Teams : <?php echo $game['nb_team'] ?></p>
                        <p><a href="<?= $this->url('games_onegame', ['id' => $game['id']]); ?>" class="btn btn-primary" role="button">Voir jeux</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php }
$this->stop('main_content'); ?>
