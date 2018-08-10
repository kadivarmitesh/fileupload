<?php 
require "config.php";
if(isset($_POST['submit'])){
 
 // Count total files
 $countfiles = count($_FILES['file']['name']);

 // Looping all files
 for($i=0;$i<$countfiles;$i++){
  $filename = $_FILES['file']['name'][$i];
 
  // Upload file
  $path=$filename;

  move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$filename);

  $sql="INSERT INTO `file_upload`( `file`) VALUES ('".$path."')";

  $run=mysqli_query($con,$sql);
 }
} 
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="java.js"></script>
 
 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <div class="col-md-12 text-center">
            <a class="navbar-brand" href="#">Image Gallery</a>
          </div>
      
        
      </div>
    </nav>

    <!-- Page Content -->
   <div class="container page-top">
 <div class="row">
<?php
require "config.php";
$result = mysqli_query($con,"SELECT * FROM file_upload");
$i=0;
while($row = mysqli_fetch_array($result)) {
// if($i%2==0)
// $classname="evenRow";
// else
// $classname="oddRow";
$target =$row['file'];
$type=pathinfo($target,PATHINFO_EXTENSION);

?>

       

<?php if($type =='jpg' || $type =='jpeg' || $type =='png' || $type =='gif') { ?>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="https://images.pexels.com/photos/62307/air-bubbles-diving-underwater-blow-62307.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                    <img  src="upload/<?php echo $target; ?>" width="200px" height="200px" class="zoom img-fluid "  alt="">
                   
                </a>
            </div>
<?php } ?>

<?php  $i++; }?>


 <a href="form.php" class="btn btn-info  btn-lg btn-block" >Back To Upload</a>

       
       </div>

     
      

    </div>

