<?php
include('include/admin_header.php');
?>
        <br>
<div class="container wow fadeInDown">
    <div class="row">
        <div class="col-md-6" style="border: solid #CFCFCF 2px; border-radius: 10px;">
        <div class="alert alert-success" id="infomsg" style="text-align: center"></div> 
        <center><img src="img/psjoshua.jpg" class="img-responsive wow fadeInDown" style="height:200px;" /></center>
        <div>
            <?

                include('include/dbconn.php');
                session_start();
                $id = $_SESSION['proprietor_id'];
                $sql = ("SELECT * FROM admininfo WHERE id='$id'");
                $result=mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result))
                    {
                        $name = $row['name'];
						$email = $row['email'];
						$phone = $row['contact'];
                        $username = $row['username'];
                        $password = $row['password'];
						
                    }
                ?>
            
        <h3 style="text-align:center; font-weight:bold;" class="wow fadeInDown">Admin Account Information</h3>
        <hr>
            <dl class="dl-horizontal wow fadeInDown" style="text-align:left">
                <dt>Admin Name</dt><dd><?php echo @$name ?></dd>
                <dt>Phone#</dt><dd><?php echo @$phone ?></dd>
                <dt>Email </dt><dd><?php echo @$email ?></dd>
                <dt>Username</dt><dd><?php echo @$username ?></dd>
                <dt>Password</dt><dd><?php echo @$password ?></dd>
              
            </dl>
        <hr>
        </div> 
    </div>
   <img src="img/uccchurch.jpg"  class="img-responsive wow fadeInDown" style="height:60%;width:50%; padding: 1%">
</div>
</div>
<?php
include('Admin_includes/footer.php');
?>
<script>
    $("#page").removeClass();
    $("#messages").removeClass();
    $("#admin").addClass("active");
    
    $("#infomsg").hide();
    
    $('#submit').click( function() {
          $.post( $("#adminacc").attr("action"),
                 $("#adminacc :input").serializeArray(),
                 function(info) { 
                   $("#infomsg").show();
                   $("#infomsg").empty();
                   $("#infomsg").html(info);
                 });    
        $("#adminacc").submit( function() {
           return false;    
        });
    });

</script>
</body>
</html>