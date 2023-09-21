<h1>Meus videos</h1>
<?php foreach ($videos as $video) :  ?>
    <div class="video">
        <a href="<?php echo BASE_URL ?>video/ver/<?php echo $video['url'] ?>"><b><?php echo $video['titulo'] ?></b></a>
    </div>
<?php endforeach; ?>