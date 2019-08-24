<?php
include('include/header.php')
?>
    
<!--*********************************************START OF Availables************************************************-->

<section id="tour-packages" class="center wow fadeInDown">
    <div style="font-size:30px; font-family:verdana; font-weight:bold; color: #8B8B00; text-align:center;">Cakes Available</div>
        <p style="text-align:center; font-family:verdana;"><br>Cakes</p>

        <div class="container" style="height:400px;">
			<iframe src="availableframe.php" width="100%;" height="400px;" style="border-style:none;"></iframe>

            </div>
        </div>       
    </section>

<!--*************************************************** FOOTERS **********************************************-->
<?php include('includes/footer.php');?>
<!----------loginModal----------->
<?php include('loginModal.php')?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('include/admin.php');

} ?>