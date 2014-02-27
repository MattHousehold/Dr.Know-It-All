<!DOCTYPE html>

<html>
  <head>
    <title>Blog</title>
  </head>

  <body>
    <h1><?php echo $title; ?> | Admin</h1>
    <?php echo form_open('admin/create') ?>
      <label>Title</label>
      <input type="text" name="title">
      <label>Content</label>
      <textarea name="content"></textarea>
      <label>Category</label>
      <textarea name="category"></textarea>
      <input type="submit" name="submit" value="Create">
    </form>

    <h2>Edit Posts</h2>
    <ul>
      <?php foreach($posts as $post): ?>
        <li><a href="/~ccit1570/cct460/index.php/admin/update/<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a> | <a href="/~ccit1570/cct460/index.php/admin/delete/<?php echo $post['id']; ?>">delete post</a></li>
      <?php endforeach; ?>
    </ul>

    <a href="/~ccit1570/cct460/index.php/blog" target="_blank"><p>View your creation!</p></a>

  </body>
</html>