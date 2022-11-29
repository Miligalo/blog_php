    <div class="right-content">
        <div>
            <h3>edit post</h3>

            <form action="/admin/edit/<?php echo $vars[0]['id'];?>" method="post">
                <p>name</p>

                <p><input type="text" value="<?php echo $vars[0]['title'];?>"  name="title"></p>
                <div class="form-group">
                    <label>content</label>
                    <textarea class="form-control"  value="dfs" rows="3"  name="content"><?php echo $vars[0]['content'];?></textarea>
                </div>
                <b><button type="submit" name="enter">edit</button></b>
            </form>
        </div>
    </div>
</div>