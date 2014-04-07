 <!DOCTYPE html>

<html>
  <head>
    <title>Dr. Know-It-All</title>
  </head>

  <body>
 <?php echo form_open('find/search') ?>

          <?php foreach($quote as $q): ?>
    <br><br><br><br><br><br><br><br>
    <center><h2><label class="create1">Generated Quote:</label></h2></center>
    <center><h3>
          <div class="main">
          <?php echo $q['content']; ?>
          <p>
          <i><?php echo $q['author']; ?></i>
    </h3></center>
        
    </div>
    </form>

      <?php endforeach; ?>

      <?php foreach($quote as $q): ?>

      <?php echo form_open('find/vote' . $q['id']) ?>
      
      <center><input type="submit" name="voteup" value="Vote Up"></center>
      
    
    </form>

<?php endforeach; ?>

  </body>
 </html>