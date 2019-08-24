<!-- Modal -->
<div class="modal fade" id="updateModal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i> UPDATE POST</h4>
      </div>
      <form class="form-horizontal" enctype="multipart/form-data" method="post" action="">
 
 <div class="modal-body">
    <div class="row">
      <div class="col-lg-2">
         <label class="pull-right">Title*</label>
      </div>
     <div class="col-lg-10">
	   <textarea name="name" class="form-control" required><?php echo $title; ?></textarea>

     </div>
   </div><br>
<div class="row">
<div class="col-lg-2">
    <label class="pull-right">Description*</label>
    </div>
    <div class="col-lg-10">
   
      <textarea name="des" class="form-control" required><?php echo $des; ?></textarea>
  </div></div><br>
 ><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info" name="savechanges">Save changes</button>
      </div>
  
      </form>
    </div>
  </div>
</div>
<?php include('include/dbconn.php');
if(isset($_POST['savechanges'])){
		$id = $_POST['id'];
        $dat=$_POST['dat'];
		$title = $_POST['title'];
		$des = $_POST['des'];
				$sql = ("UPDATE ucctbl set title = '$title', des= '$des',dat='$dat', WHERE id = '$id'")
				or die (mysqli_error());
                $result=mysqli_query($con, $sql);
				if($result==true){
					echo '<script>alert("Update successfully!");
								  window.location.href="update_cnp.php"</script>';
					}
					else{
						echo '<script>alert("Sorry unable to process your request!");
								  window.location.href="update_cnp.php"</script>';
						}
	
	
	}
	mysqli_close($con);
	?>