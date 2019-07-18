<?php include 'config.php';?>
<title><?= $web; ?></title>
<?php include 'head.php';?>
<div class="container">
<div class="row">
  <div class="col-md-9">
    <div class="box"><div class="releases" style="padding-top: 1.25rem;"><h6><span>Anime Terbaru</span></h6></div> 
    <div class="ldr">
<?php foreach ($animes as $anime) : ?>
    <div class="outbx"">
    <div class="rld"><div class="hovereffect">
        <a href="http://animeid.me/<?php echo slugify($anime->title); ?>-eps-<?php echo $anime->total_episode; ?>-sub-indo/<?php echo $anime->id; ?>">
          <div class="limit">
            <div class="postedon">Episode <?php echo $anime->total_episode; ?></div>
            <img width="225" height="321" src="<?php echo $anime->poster; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""><h2><?php echo $anime->title; ?></h2></div></a>
    </div></div>  </div>
<?php endforeach ?>
</div></div></div>

<div class="col-md-3">
<div class="card border-0 shadoww mb-4">
<div class="card-body">
<div class="releases"><h6><span>Ongoing</span></h6></div> 
<ul style="    margin-top: -5px;
    margin-bottom: -5px;
    padding-left: 0!important;
    list-style: none;">
  <li>One Piece</li>
 <li>Boruto: Naruto Next Generation</li>
 <li>Fairy Tail: Final Series</li>
 <li>Fire Force</li>
 <li>Karakai Jouzu no Takagi-san 2</li>
 <li>Okaa-san Online</li>
 <li>Cop Craft</li>
 <li>Isekai Magician</li>
 <li>Hen</li>
</ul>
</div></div></div><div></div></div>
<?php include 'foot.php';?>
