<!DOCTYPE html>

<html>
  <body>
  	<div id="sitetitle">
    	<h1><?php echo $title; ?></h1>
    </div>
    <?php foreach($posts as $post): ?>

    <div class="main">
    	<div id="posttitle">
      		<h3><?php echo $post['title']; ?></h3>
   	 	</div>
        	<p id="postcontent"><?php echo $post['content']; ?></p>
      		<p id="postcategory"><?php echo $post['category']; ?></p>
    </div>
    <?php endforeach; ?>
    <div>
        <a href="http://phoenix.sheridanc.on.ca/~ccit1570/cct460/index.php/admin"><p>Administration</p></a>
        <p>Created by Matthew Household - 999070160</p>
    </div>
  </body>
</html>