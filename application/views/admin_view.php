<!DOCTYPE html>

<html>
  <head>
    <title>Blog</title>
  </head>

  <body>
    <h1><?php echo $title; ?> Dr. Know It All</h1>
    <?php echo form_open('admin/create') ?>
      <label>Content</label>
      <textarea name="Quote"></textarea>
      <label>Author</label>
      <textarea name="author"></textarea>
      <input type="submit" name="submit" value="Create">
    </form>


    <h2>Edit Posts</h2>
    <ul>
      <?php foreach($posts as $post): ?>
        <li><a href="/~ccit1570/MattFinalAssignment/index.php/admin/update/<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a> | <a href="/~ccit1570/MattFinalAssignment/index.php/admin/delete/<?php echo $post['id']; ?>">delete post</a></li>
      <?php endforeach; ?>
    </ul>

    <a href="/~ccit1570/MattFinalAssignment/index.php/blog" target="_blank"><p>View your creation!</p></a>

  </body>
</html>