<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/web/styles/main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
<?php if ($this->route['action'] != 'login' and $this->route['action'] != 'register'): ?>
<div class="main-crud">
    <div class="left-content">
        <div class="item">
            <a href="/admin/posts">posts</a>
        </div>
        <div class="item">
            <a href="/admin/add">add</a>
        </div>
            <div class="item">
                <a href="/admin/logout">logout</a>
            </div>
    </div>
    <?php endif; ?>
<?php echo $content; ?>
</body>
</html>