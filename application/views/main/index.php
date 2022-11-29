<div>
    <?php if ($_SESSION == null): ?>
        <a href="admin/login">login</a>
        <a href="admin/register">register</a>
    <?php endif;?>
    <h2 class="page">Main Page</h2>
    <div class="block-post">
        <?php foreach ($vars as $post):?>
        <div class="post">
            <h4><a href="/post/<?php echo $post['id'] ?>"><?php echo $post['title'];?></a></h4>
            <img src="<?php echo $post['images'];?>" class="post-img">
            <p><?php echo $post['content'];?></p>
        </div>
        <?php endforeach;?>
    </div>
</div>




