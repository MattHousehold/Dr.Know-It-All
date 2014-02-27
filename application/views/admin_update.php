<h1><?php echo $title; ?> | Admin</h1>
<?php foreach($post as $p): ?>
  <?php echo form_open('admin/update_post/' . $p['id']) ?>
    <label class="create1">Title</label>
    <input class="create2" type="text" name="title" value="<?php echo $p['title']; ?>">
    <label class="create1">Content</label>
    <textarea class="create2" name="content" id="admincontent"><?php echo $p['content']; ?></textarea>
    <label class="create1">Category</label>
    <input class="create2" type="text" name="category" value="<?php echo $p['category']; ?>">
    <input class="create1" type="submit" name="submit" value="Save">
  </form>
<?php endforeach; ?>