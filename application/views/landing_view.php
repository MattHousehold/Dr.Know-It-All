<!DOCTYPE html>

<html>
  <head>
  <title>Dr. Know-It-All</title>
  </head>

  <body>
  
   <h1><?php echo $title; ?></h1>
    

      <?php echo form_open('find/search') ?>


     
          <div class="label">Age</div>
          <div id="landcat1"><select name="age" style ="margin:2px; width: 100px; height: 25px;">
          <option value="">Select</option>
          <option value="2">Teenager</option>
          <option value="3">Adult</option>
        </select></div>
        <br><br>

        <div class="label1">Feeling</div>
        <div id="landcat2"><select name="feeling" style ="margin:2px; width: 100px; height: 25px;">
          <option value="">Select</option>
          <option value="1">Happy</option>
          <option value="2">Sad</option>
          <option value="3">Angry</option>
          <option value="4">Worried</option>
        </select></div>
        <br><br>

        <div class="label2">Reason</div>
        <div id="landcat3"><select name="reason" style ="margin:2px; width: 100px; height: 25px;">
          <option value="">Select</option>
          <option value="1">Friendship</option>
          <option value="2">Work</option>
          <option value="3">Academics</option>
          <option value="4">Love</option>
        </select></div>
        <br><br>
        <br>

        <div id="submit1"><input type="submit" name="submit" value="Find a Quote"></div>
    </form>

  <!--<?php echo form_open('find/index') ?>
          <?php foreach($quote as $q): ?>

    <div class="main">
          <?php echo $q['content']; ?>
          <br>
          <i><?php echo $q['author']; ?></i>
    </div>-->

    <?php endforeach; ?>
  </body>
</html>
