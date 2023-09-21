<h1>Meus videos</h1>
<?php foreach ($videos as $video) :  ?>
    <div class="video">
        <b><?php echo $video['titulo'] ?></b>
    </div>
<?php endforeach; ?>