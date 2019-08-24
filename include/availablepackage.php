
<div class="container">
	<div class="row">
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create New Gospel Post</h1>
    		
    		<form action="" method="POST">
    		    
    		   
    		    <div class="form-group" >
    		        <label for="title">Date <span class="require">*</span></label>
    		        <input style="border:1px green solid" type="text" class="form-control" name="dat" />
    		    </div>
    		    
    		    <div class="form-group" >
    		        <label for="title">Title <span class="require">*</span></label>
    		        <input style="border:1px green solid"type="text" class="form-control" name="title" />
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="description">Description<span class="require">*</span></label>
    		        <textarea rows="5" style="border:1px green solid" class="form-control" name="des" ></textarea>
    		    </div>
    		    <div><label id="upload">Select file to upload:
                   <input type="file" id="upload" name="file"/></label></div><br>
    		    
    		    <div class="form-group">
    		        <p><span class="require">*</span> - required fields</p>
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" name="save" class="btn btn-primary">
    		            Create
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>
<?php 
include('include/dbconn.php');

$targetDir="upload/";
$fileName =basename($_FILES['file']['name']);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


if(isset($_POST['save'])){
			$dat = $_POST['dat'];
			$title = $_POST['title'];
			$des = $_POST['des'];
				}if(move_uploaded_file($_FILES["file"]["tmp_name"])) {
					$sql = ("INSERT INTO ucctbl (dat,title, des, file) VALUES('$dat', '$title', '$des','.$fileName.')") or die (mysqli_error());
                    $result=mysqli_query($con, $sql);
					if($result==true){
						echo '<script>alert("Save Successfully!");
									window.location.href="addcnp.php";</script>';}
									
					else {
					echo '<script>alert("Sory unable to process your request!");
					  window.location.href="addcnp.php";</script>';
						}
						
					}
		
?>