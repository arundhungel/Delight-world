<html>
<head>
	<meta charset="UTF-8">
	<title>Delight World</title>
	

    <?php include('includes/head.php') ?>
</head>
<body>
	<div class="header-top">
		<div class="center clearfix">
			<div class="top-header-left">
				<ul class="clearfix"><!-- 
					<li><a href="#"><span> </span>Login</a></li>
					<li><p><span> </span>Not a Member ? </p>&nbsp;<a class="reg" href="#"> Register</a></li> -->
					<li><p class="contact-info">Mail Us At : <a href="mailto:info@delightworld.com">info@delightworld.com</a> </p></li>
					<li><p class="contact-info">Call Us Now :123-456-78</p></li>
				</ul>
			</div>
			<div class="top-header-right">
				<ul class="clearfix">

                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<header>
		<div class="header">
			<div class="center">
			<div>
				<a href="index.php" class="logo"><img src="img/logo.png" alt="logo"></a>

				<?php include 'includes/nav.php' ?>
			</div>

		</div>
		</div>

		
	</header>

	<div class="contactus">
		<div class="center clearfix">
			<div class="leftcol">

                    <h3>Reach Us :</h3>
                    <form>
                        <div class="clearfix">
                            <i><ins>*</ins> <span>Name :</span></i> 
                            <input type="text"  placeholder="Full name :"> 
                            
                        </div>
                        <div class="clearfix">
                             <i><ins>*</ins> <span>Email :</span></i>
                            <input type="text" placeholder="E-mail :">
                            
                        </div>
                       
                        <div class="clearfix">
                            <i><span>&nbsp; &nbsp;Phone :</span></i>
                            <input type="text"  placeholder="Phone/Mobile :">
                        </div>
                        
                        <div class="clearfix">
                            <i><ins>*</ins> <span>Messages :</span></i> 
                            <textarea placeholder="Message :" rows="6"></textarea>
                        </div>
                        
                        <div>
                            <input type="submit" class="btn" value="Submit" >
                        </div>
                        

                    </form>
                </div>
                <div class="rightcol">
                    <h3>Location :</h3>
                	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28155.259889991805!2d81.666944!3d28.103611!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDA2JzEzLjAiTiA4McKwNDAnMDEuMCJF!5e0!3m2!1sen!2s!4v1482471739876" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
		</div>
	</div>





	
	<?php include 'includes/footer.php'; ?>

    <?php include 'includes/end-script.php'; ?>
    

</body>
</html>