

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Display Files</h2>
  <?php
require "config.php";
$result = mysqli_query($con,"SELECT * FROM file_upload");
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
$target =$row['file'];
$type=pathinfo($target,PATHINFO_EXTENSION);

?>
<?php if($type =='pdf') { ?>
  <div class="alert alert-success">
    <span class="fa fa-file-pdf-o" aria-hidden="true"></span><a style="margin-left: 10px;" href="upload/<?php echo $row['file'] ?>" target="_blank"><?php echo $target; ?></a>
  </div>
   <?php } ?>

  <?php if($type =='odt') { ?>
  <div class="alert alert-info">
    <span class="fa fa-file-zip-o" aria-hidden="true"></span><a style="margin-left: 10px;" href="upload/<?php echo $row['file'] ?>" target="_blank"><?php echo $target; ?></a>
  </div>
   <?php } ?>
   <?php if($type =='docx') { ?>
  <div class="alert alert-warning">
   <span class="fa fa-file-word-o" aria-hidden="true"></span><a style="margin-left: 10px;" href="upload/<?php echo $row['file'] ?>" target="_blank"><?php echo $target; ?></a>
  </div>
   <?php } ?>
   <?php if($type =='pptx') { ?>
  <div class="alert alert-danger">
    <span class="fa fa-file-powerpoint-o" aria-hidden="true"></span><a style="margin-left: 10px;" href="upload/<?php echo $row['file'] ?>" target="_blank"><?php echo $target; ?></a>
  </div>
  <?php } ?>
  <?php if($type =='xlsx') { ?>
  <div class="alert alert-info">
    <span class="fa fa-file-excel-o" aria-hidden="true"></span><a style="margin-left: 10px;" href="upload/<?php echo $row['file'] ?>" target="_blank"><?php echo $target; ?></a>
  </div>
   <?php } ?>

<?php  $i++; }?>

 <a href="form.php" class="btn btn-info  btn-lg btn-block" >Back To Upload</a>

</div>

</body>
</html>