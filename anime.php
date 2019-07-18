<?php include 'config.php';?>
<?php include 'animesing.php';?>
<?php foreach ($animesingles as $animesingle) : ?>
  <title><?php echo $animesingle->title; ?> Subtitle Indonesia | <?= $web; ?></title>
<?php include 'head.php';?>



<div class="container">
<div class="row">
<div class="col-md-9">
<div class="card border-0 shadoww mb-4">
<div class="card-body-bek">
download <?php echo $animesingle->title; ?> eps <?php echo $eps; ?> sub indo, batch, 360p, 480p, 720p, mkv, mp4, anoboy, meownime, drivenime, streaming, nonton dan download judul batch indonesia lengkap samehadaku.
</div>
</div>

<div class="card border-0 shadoww mb-4">
<div class="card-body">
<div class="card mb-3" style="max-width: 100%;">
  <div class="row no-gutters">
    <div class="col-lg">
      <div class="card-body">
        <h5 class="card-title"><?php echo $animesingle->title; ?></h5>
        <img src="<?php echo $animesingle->poster; ?>" style="float: left;padding-right: 1rem">
        
        <p class="card-text"><?php echo $animesingle->summary; ?></p>
        <p class="card-text"><small class="text-muted">Genre : <?php echo $animesingle->genre; ?></small></p>
<h3 style="text-align: center;font-size: 1.5rem!important">Nonton <?= $animesingle->title; ?> Sub Indo</h3>
        <div class="list-group" style="    max-height: 250px;
    overflow-y: scroll;">
        <?php 
for ($x = 1; $x <= $animesingle->total_episode; $x++) {
    echo "<a href='etas-eps-$x' class='list-group-item list-episode-item'>$animesingle->title Episode $x Sub Indo</a>";
} 
?>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<?php endforeach ?>

</div>
<div class="col-md-3">
<div class="card border-0 shadoww mb-4 d-none d-lg-block">
<div class="card-body-full">
<img src="http://mgmarkham.com/wp-content/uploads/2014/10/GoJS-Vertical-Banner-Ads-160x600-black-MG-Markham-Design.png" width="100%">
</div>
</div>
</div>

</div>
</div>
</div>
<?php include 'foot.php';?>