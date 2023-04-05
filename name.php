<!DOCTYPE>
<html>
<head>
	<title>Computer Science & Engineering (CSE)</title>
	<link href="js/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/js-image-slider.js" type="text/javascript"></script>
    <script type="text/javascript">
    imageSlider.thumbnailPreview(function (thumbIndex) { return "<img src='images/thumb" + (thumbIndex + 1) + ".jpg' style='width:100px;height:60px;' />"; });
   </script>
   
   <link href="css/dropdown.css" rel="stylesheet" type="text/css">
   <link href="css/mainstyle.css" rel="stylesheet" type="text/css">
   <style>
       body  {
       background-image: url("bg2.jpg");
       background-color: #cccccc;
       }
	</style>
</head>

<body>
<div id="myheader"> <h1>Computer Science & Engineering (CSE)</h1> </div>
<div id="myphoto">
<img src="Images/Slider/a.jpg" alt="Academic Building"  
   title="Academic Building"/>
<img src="Images/Slider/b.jpg" alt="Class Room"  
    title="Class Room"/>
<img src="Images/Slider/c.jpg" alt="Hostel"  
    title="Hostel"/>
<img src="Images/Slider/d.jpg" alt="Mosque"  title="Mosque" />
<img src="Images/Slider/e.jpg" alt="Victory Day Celebration"  
    title="VictoryDay"/>
<img src="Images/Slider/f.jpg" alt="Victory"  title="Victory"/>
<img src="Images/Slider/g.jpg" alt="Re-union"  title="Re-union"/>
</div>
			 
<div class="menu-wrap">                        
    <ul id="nav" class="drop">
  <li><a href="index.htm">Home</a></li>
  <li><a href="aboutus.htm">About Us</a></li>
  <li>Administartion
    <ul>
      <li><a href="incharge.htm">Head of the Department</a></li>
      <li><a href="instructor.htm">Teachers</a></li>
      <li><a href="staff.htm">Staff</a></li>
    </ul>
  </li>
  <li>Academics
    <ul>
      <li class="dir"><a href="#">04 Series</a>
        <ul>
          <li><a href="syed.htm">Syed Tauhid Zuhori</a></li>
          <li><a href="firoz.htm">Firoz Mahmud</a></li>
          <li><a href="luren.htm">Mr. Luren</a></li>
          <li><a href="x.htm">Mr. X</a></li>
          <li><a href="y.htm">Mr. Y</a></li>
        </ul></li>
        <li class="dir"><a href="#">05 Series</a>
        <ul>
          <li><a href="1.htm">Mr. x</a></li>
          <li><a href="2.htm">Mr. y</a></li>
          <li><a href="3.htm">Mr. z</a></li>
          <li><a href="4.htm">Mr. m</a></li>
          <li><a href="5.htm">Mr. n</a></li>
        </ul></li>
		<li><a href="dict12.htm">06 Series</a></li>
		<li><a href="dict13.htm">07 Series</a></li>
		<li><a href="dict14.htm">08 Series</a></li>
		<li><a href="dict15.htm">09 Series</a></li>
		<li><a href="dict16.htm">10 Series</a></li>
		<li><a href="dict17.htm">11 Series</a></li>
    </ul>
  </li>
  <li><a href="registration.htm">Registration</a></li>
  <li><a href="#">SEARCH MEMBER</a>
	<ul class="sub-menu">
		<li><a href="id.htm">By ID</a></li>
		<li><a href="name.htm">By Name</a></li>
		<li><a href="age.htm">By Age</a></li>
	</ul></li>

	<li><a href="#">DELETE MEMBER</a>
	<ul class="sub-menu">
		<li><a href="idd.htm">By ID</a></li>
		<li><a href="named.htm">By Name</a></li>
		<li><a href="aged.htm">By Age</a></li>
	</ul></li>
  <li><a href="contact.htm">Contact Us</a></li>
   </ul>
</div>

<div id="section1"> 
  <div class="head"> Welcome to Search Member by Serial No PHP Page</div>
	<br><?php
$con=mysqli_connect("localhost","root","","bcc");
 if(!empty($_POST[name]))
	{
	$result = mysqli_query($con,"SELECT * FROM registration WHERE name='$_POST[name]'");

	echo "<table border='1'>
	<tr>
	<th>Serial No</th> <th>Registration No</th> <th>Batch No</th> <th>Name</th> <th>Age</th> <th>Gender</th> <th>Mobile No</th> <th>Email</th>
	</tr>";
	while($row = mysqli_fetch_array($result))
	{
	echo "<tr>";
	echo "<td>" . $row['sno'] . "</td>";   echo "<td>" . $row['regno'] . "</td>"; echo "<td>" . $row['batno'] . "</td>";echo "<td>" . $row['name'] . "</td>";   echo "<td>" . $row['age'] . "</td>";   echo "<td>" . $row['gender'] . "</td>";echo "<td>" . $row['mobno'] . "</td>";	echo "<td>" . $row['email'] . "</td>";   
	echo "</tr>";
	} 
	echo "</table>";
	}
	
 
    
mysqli_close($con);
?>
</div>
<div id="myfooter">Copyright @CSE, RUET</div>
</body>
</html>