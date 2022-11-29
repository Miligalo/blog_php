    <div class="right-content">
        <div>
            <h3>add post</h3>
            <form action="/admin/add" method="post" enctype="multipart/form-data">
                <p>title</p>
                <p><input type="text" name="title"></p>
                <div class="form-group">
                    <label>content</label>
                    <textarea class="form-control" rows="3" name="content"></textarea>
                </div>
                <div class="form-group">
                    <label>Изображение</label>
                    <input class="form-control" type="file" name="img">
                </div>
                <b><button type="submit" name="enter">Add</button></b>
            </form>
        </div>
    </div>
</div>
