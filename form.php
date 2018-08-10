<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="form.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="form.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>Multiple File Upload</h1>
                    <form role="form" action="design.php" method="post" id="login-form" enctype="multipart/form-data" autocomplete="off">
                    
                        <div class="form-group">
                            <label for="key" class="sr-only">File</label>
                            <input type="file" name="file[]" id="file"  class="form-control" placeholder="Choose File"required multiple>
                        </div>
                      
                        <input type="submit" id="btn-login" name="submit" class="btn btn-custom btn-lg btn-block" value="Save">
                        <a href="design.php" class="btn btn-info  btn-lg btn-block" >Go TO Galary</a>
                        <a href="openfile.php" class="btn btn-success  btn-lg btn-block" >Go To File</a>
                    </form>
                
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

