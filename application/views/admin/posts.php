
<div>

    <?php foreach ($vars as $post): ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">content</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"><?php echo $post['id'] ?></th>
            <td><?php echo $post['title'] ?></td>
            <td><a href="/admin/edit/<?php echo $post['id'] ?>">Edit</a></td>
            <td><a href="/admin/delete/<?php echo $post['id'] ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</div>
