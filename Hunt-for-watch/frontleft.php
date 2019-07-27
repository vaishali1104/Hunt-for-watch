<style>

html, body {
    font-family: Arial, Helvetica, sans-serif;
}

/* define a fixed width for the entire menu */
.navigation {
  width: 300px;
}

/* reset our lists to remove bullet points and padding */
.mainmenu, .submenu {
  list-style: none;
  padding: 0;
  margin: 0;
}

/* make ALL links (main and submenu) have padding and background color */
.mainmenu a {
  display: block;
  background-color: #CCC;
  text-decoration: none;
  padding: 10px;
  color: #000;
}

/* add hover behaviour */
.mainmenu a:hover {
    background-color: #C5C5C5;
}


/* when hovering over a .mainmenu item,
  display the submenu inside it.
  we're changing the submenu's max-height from 0 to 200px;
*/

.mainmenu li:hover .submenu {
  display: block;
  max-height: 200px;
}

/*
  we now overwrite the background-color for .submenu links only.
  CSS reads down the page, so code at the bottom will overwrite the code at the top.
*/

.submenu a {
  background-color: #999;
}

/* hover behaviour for links inside .submenu */
.submenu a:hover {
  background-color: #666;
}

/* this is the initial state of all submenus.
  we set it to max-height: 0, and hide the overflowed content.
*/
.submenu {
  overflow: hidden;
  max-height: 0;
  -webkit-transition: all 0.5s ease-out;
}
</style>


<nav class="navigation">
  <ul class="mainmenu">
   
    <li><a href="">Brand</a>
      <ul class="submenu">
        <li><a href="viewbrandall.php?g=Titan">Titan</a></li>
		   <li><a href="viewbrandall.php?g=Fastrack">Fastrack</a></li>
		  <li><a href="viewbrandall.php?g=Fossil">Fossil</a></li>
		    <li><a href="viewbrandall.php?g=Timex">Timex</a></li>
		   <li><a href="viewbrandall.php?g=Tommy Hilfiger">Tommy Hilfiger</a></li>
      
     
      </ul>
    </li>
	 <li><a href="">Category</a>
      <ul class="submenu">
        <li><a href="viewcatall.php?g=kids watch">kids watch</a></li>
		<li><a href="viewcatall.php?g=women watch">women watch</a></li>
		<li><a href="viewcatall.php?g=men watches">men watches</a></li>
        
      </ul>
    </li>
	 <li><a href="">Dial Colour</a>
      <ul class="submenu">
        <li><a href="viewdialcolour.php?g=Silver">Silver</a></li>
		<li><a href="viewdialcolour.php?g=Pink">Pink</a></li>
		<li><a href="viewdialcolour.php?g=Multi-Colour">Multi-Colour</a></li>
		<li><a href="viewdialcolour.php?g=Natural">Natural</a></li>
		<li><a href="viewdialcolour.php?g=Purple">Purple</a></li>
		<li><a href="viewdialcolour.php?g=Blue">Blue</a></li>
		<li><a href="viewdialcolour.php?g=Black">Black</a></li>
		<li><a href="viewdialcolour.php?g=White">White</a></li>
		<li><a href="viewdialcolour.php?g=Beige">Beige</a></li>
		<li><a href="viewdialcolour.php?g=Brown">Brown</a></li>
		<li><a href="viewdialcolour.php?g=Pearl">Pearl</a></li>
		<li><a href="viewdialcolour.php?g=Rose Gold">Rose Gold</a></li>
		<li><a href="viewdialcolour.php?g=Gold">Gold</a></li>
		<li><a href="viewdialcolour.php?g=Grey">Grey</a></li>
      </ul>
    </li>
	
	
	<li><a href="">Band Colour</a>
      <ul class="submenu">
        <li><a href="viewbandcolour.php?g=Silver">Silver</a></li>
		<li><a href="viewbandcolour.php?g=Pink">Pink</a></li>
		<li><a href="viewbandcolour.php?g=Purple">Purple</a></li>
		<li><a href="viewbandcolour.php?g=Blue">Blue</a></li>
		<li><a href="viewbandcolour.php?g=Black">Black</a></li>
		<li><a href="viewbandcolour.php?g=White">White</a></li>
		<li><a href="viewbandcolour.php?g=Navy Blue">Navy Blue</a></li>
		<li><a href="viewbandcolour.php?g=Brown">Brown</a></li>
		<li><a href="viewbandcolour.php?g=Sky Blue">Sky Blue</a></li>
		<li><a href="viewbandcolour.php?g=Gold">Gold</a></li>
		<li><a href="viewbandcolour.php?g=Green">Green</a></li>
		<li><a href="viewbandcolour.php?g=Red">Red</a>
      </ul>
    </li>

		<li><a href="">Band Material</a>
      <ul class="submenu">
        <li><a href="viewbandmaterial.php?g=Leather">Leather</a></li>
		<li><a href="viewbandmaterial.php?g=Stainless Steel">Stainless Steel</a></li>
		<li><a href="viewbandmaterial.php?g=Metal">Metal</a></li>
		<li><a href="viewbandmaterial.php?g=Resin">Resin</a></li>
		<li><a href="viewbandmaterial.php?g=Silicone">Silicone</a></li>
		<li><a href="viewbandmaterial.php?g=Cloth">Cloth</a></li>
		<li><a href="viewbandmaterial.php?g=Synthetic Leather">Synthetic Leather</a></li>
		<li><a href="viewbandmaterial.php?g=Navy Fabric">Fabric</a></li>
		<li><a href="viewbandmaterial.php?g=Synthetic">Synthetic</a></li>
		<li><a href="viewbandmaterial.php?g=Sky Plastic">Plastic</a></li>
		<li><a href="viewbandmaterial.php?g=Brass">Brass</a></li>
      </ul>
    </li>
	
	<li><a href="">Case Shape</a>
      <ul class="submenu">
        <li><a href="viewcaseshape.php?g=Round">Round</a></li>
		<li><a href="viewcaseshape.php?g=Rectangular">Rectangular</a></li>
		<li><a href="viewcaseshape.php?g=Oval">Oval</a></li>
      </ul>
    </li>

   
  </ul>
</nav>

