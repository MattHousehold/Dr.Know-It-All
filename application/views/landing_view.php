<!DOCTYPE html>

<html>
  <body>
  	<div id="sitetitle">
    	<h1><?php echo $title; ?></h1>
    </div>
    <?php foreach($posts as $post): ?>

    <div class="main">
         	<p id="postcontent"><?php echo $post['content']; ?></p>
    </div>
    <?php endforeach; ?>
    <div>
        <a href="http://phoenix.sheridanc.on.ca/~ccit1570/dr-know-it-all/index.php/admin"><p>Administration</p></a>
    </div>
  </body>
</html>