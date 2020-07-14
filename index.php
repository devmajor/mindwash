<!DOCTYPE html>
<html>
<head>
	<title>MindWash</title>
	    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=no"
    />
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="top-content">
	<header>
		<div class="logo"><h1>MindWash</h1></div>
		<div class="nav">
			<ul>
				<li>Home</li>
				<li>About</li>
				<li>Contact</li>
				<li><button>GET EARLY ACCESS</button></li>
			</ul>
		</div>
	</header>
	<main>
		<section>
			<div class="hero">
			    <div class="mw-intro-text">
			        <h1>Erase bad memories with one click, enjoy a happy life!</h1>
			        <!--<p>Forgeting a bad memory has never been so easy</p>-->
			        
			        <div class="mw-subscription-box">
			            <p>Join the waiting list by entering your email address below,and be among our first esteemed user immediately MindWash is released.</p>
			            <form action="getEmail.php" method="POST">
                    		<input type="text" name="email" placeholder="Enter Your Email Address"> <br>
                    		<button type="submit" name="submit">GET EARLY ACCESS</button>
                    	</form>
			        </div>
			    </div>
			    <div class="mw-intro-img">
			        
			    </div>
			</div>
		</section>
		<section>
		    <div class="mw-content-wrap">
		        <div class="mw-content-1">
		            
		        </div>
		        <div class="mw-content-2">
		            
		        </div>
		    </div>
		</section>
	</main>
</div>	




<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
<script type="text/javascript">
		gsap.from(".mw-intro-text", {duration: 1.5, x: -600, opacity: 0, scale: 0.5});
		gsap.from(".mw-intro-img", {duration: 1.5, x: 600, opacity: 0, scale: 0.5});
		// gsap.to("#logo", {duration: 1, x: 100});
	</script> 
</body>
</html>