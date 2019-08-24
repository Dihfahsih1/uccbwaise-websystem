<?php include('include/header.php')?>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign in Admin</h5>
            <center><i class="fa fa-user"></i> Welcome Admin</center>
                                <form class="form-horizontal wow fadeInDown" method="POST" action="adminlogin_process.php">
                                        <div class="form-group">
                                            <label for="name" class="col-sm-4 control-label wow fadeInDown">Username*</label>
                                            <div class="col-sm-6" style="border:#add8e6 2px solid">
                                                <input type="text" class="form-control wow fadeInDown" id="name" name="username" placeholder="username here." onKeyPress="return isNotAlphanumeric(event)" required />
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label for="name" class="col-sm-4 control-label wow fadeInDown">Password*</label>
                                            <div class="col-sm-6" style="border:#add8e6 2px solid">
                                                <input type="password" class="form-control wow fadeInDown" id="name" name="password" placeholder="password here." onKeyPress="return isNotAlphanumeric(event)" required>
                                            </div>
                                        </div> 
                                            <div class="modal-footer wow fadeInDown" style="padding-right:110px;">
                                                <button type="submit" class="btn btn-info wow fadeInDown"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                                                
                                        </div>
                                  </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<?php include('include/footer.php')?>