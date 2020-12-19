<!DOCTYPE html>
<html>
<head>
	<title>
		Contact
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="container">
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="pwd" name="name">
      </div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2">Message</label>
    <div class="col-sm-10"> 
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default btn-info">Submit</button>
      </div>
    </div>
  </form>
</div>

	<?php include 'footer.php'; ?>
</body>
</html>