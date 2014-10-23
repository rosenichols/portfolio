			<!-- Begin navigation section-->
			
			<div id="navigation">
			
			<div class="navsection"> 
				<h1 id="navheader">Type</h1>
				<p class="navoption"><a href="index.php?p=category&cat=1" class="headernav">Tunic tops</a></p>
				<p class="navoption"><a href="index.php?p=category&cat=2" class="headernav">Tank tops</a></p>
				<p class="navoption"><a href="index.php?p=category&cat=3" class="headernav">T-shirts</a></p>
			</div>
			
			<div class="navsection"> 
				<h1 id="navheader">Trend</h1>
				<p class="navoption"><a href="index.php?p=category&cat=4" class="headernav">Ruched tops</a></p>
				<p class="navoption"><a href="index.php?p=category&cat=5" class="headernav">Halter neck</a></p>
				<p class="navoption"><a href="index.php?p=category&cat=6" class="headernav">Geek chic</a></p>
			</div>
			
			<div id="cart"> 
        <?php 
            if (isset($_SESSION['cart']) && (!empty($_SESSION['cart']))) { 
                echo get_cart_count(); 
            } 
        ?> 
    </div>
   			
			</div> <!-- end #navigation -->
			
			<!-- End navigation section -->