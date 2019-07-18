<?php include 'config.php';?>
<?php include 'animecon.php';?>
<?php foreach ($animesingles as $animesingle) : ?>
<title><?php echo $animesingle->title; ?> Episode <?php echo $eps; ?> Subtitle Indonesia | <?= $web; ?></title>
<?php include 'head.php';?>


<div class="container">
<div class="row">
<div class="col-md-9">
<div class="card border-0 shadoww mb-4">
<div class="card-body-bek">
download <?php echo $animesingle->title; ?> eps <?php echo $eps; ?> sub indo, batch, 360p, 480p, 720p, mkv, mp4, anoboy, meownime, drivenime, streaming, nonton dan download judul batch indonesia lengkap samehadaku.
</div>
</div>
<div class="card border-0 mb-2">
<div class="card-body">
<h1 style="font-size: 1.2rem; ">Nonton <?php echo $animesingle->title; ?> Episode <?php echo $eps; ?> Subtitle Indonesia</h1>
</div>
</div>

<div class="card border-0 mb-2">
<div class="card-body-full">
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://database.gdriveplayer.us//player.php?type=anime_indo&id=96039&episode=3" allowfullscreen></iframe>
</div>
</div>
</div>

<div class="card border-0 shadoww mb-4">
<div class="card-body">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Pilih Episodes</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="forma" onchange="location = this.value;">
    <option selected>Episode <?= $eps ?></option>
<?php 
for ($x = 1; $x <= $animesingle->total_episode; $x++) {
    echo "<option value='http://localhost/episode.php?id=$id&eps=$x'>Episode $x";
} 
?>
  </select>
</div>
<div class="card mb-3" style="max-width: 100%;">
  <div class="row no-gutters">
    <div class="col-lg">
      <div class="card-body">
        <h5 class="card-title"><?php echo $animesingle->title; ?></h5>
        <img src="<?php echo $animesingle->poster; ?>" style="float: left;padding-right: 1rem">
        
        <p class="card-text"><?php echo $animesingle->summary; ?></p>
        <p class="card-text"><small class="text-muted">Genre : <?php echo $animesingle->genre; ?></small></p>
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