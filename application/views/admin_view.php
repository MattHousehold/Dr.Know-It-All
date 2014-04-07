<!DOCTYPE html>

<html>
  <head>
    <title>Dr. Know-It-All Admin</title>
  </head>

  <body>
  
   <h1><?php echo $title; ?><br></h1>
    
      <?php echo form_open('admin/create') ?>

        <label>Quote</label><br>
        <div id="category1"><textarea name="content" style ="margin:2px; width: 400px; height: 95px;" autocomplete="off"></textarea><br><br></div>
        <label>Author</label><br>
        <div id="category1"><textarea name="author" style ="margin:2px; width: 400px; height: 25px;" autocomplete="off"></textarea><br><br></div>
        <div id="category2"><label>Age</label>
          <select name="age" style ="margin:2px; width: 100px; height: 25px;">
          <option value="">Select</option>
          <option value="2">Teenager</option>
          <option value="3">Adult</option>
        </select><br><br>
        <label>Feeling</label>
          <select name="feeling" style ="margin:2px; width: 100px; height: 25px;">
          <option value="">Select</option>
          <option value="1">Happy</option>
          <option value="2">Sad</option>
          <option value="3">Angry</option>
          <option value="4">Worried</option>
        </select><br><br>
        <label>Reason</label>
          <select name="reason" style ="margin:2px; width: 100px; height: 25px;">
          <option value="">Select</option>
          <option value="1">Friendship</option>
          <option value="2">Work</option>
          <option value="3">Academics</option>
          <option value="4">Love</option>
        </select></div><br><br>
        <br><br><br><br><br><br>
      <div id="submit"><input type="submit" name="submit" value="Submit Quote" style ="margin:2px; width: 100px; height: 25px;"></div>
    </form>
  </bod