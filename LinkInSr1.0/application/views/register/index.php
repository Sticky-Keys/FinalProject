<?php foreach ($user as $user_item): ?>

    <h2><?php echo $user_item['user_id'] ?></h2>
    <div class="main">
        <?php echo $user_item['name'] ?>
    </div>
<!--     <p><a href="news/<?php echo $news_item['slug'] ?>">View article</a></p> -->

<?php endforeach ?>