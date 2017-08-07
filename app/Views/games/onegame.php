<?php $this->layout('layout', ['title' => $game['id'] ]); ?>

<?php $this->start('main_content');?>

<?php  foreach ($onegame as $game) { ?>
  <h3><?php echo $game['name'] ?></h3>
  <p><?php echo $game['description'] ?></p>

  <img src="<?= $this->assetUrl('img/jeux/' . $game['picture']) ?>" alt="...">
  <p>Nombre de joueurs : <?php echo $game['nb_player'] ?></p>
  <p>Nombre de Teams : <?php echo $game['nb_team'] ?></p>
<?php }

?>

<?php $this->stop('main_content'); ?>
