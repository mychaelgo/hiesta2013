<style>
			#bg {
				position:fixed;
				top:-50%;
				left:-50%;
				width:200%;
				height:200%;
			}
			#bg img {
				position:absolute;
				top:0;
				left:0;
				right:0;
				bottom:0;
				margin:auto;
				min-width:50%;
				min-height:50%;
			}
			#wrapper {
				display: block;
				z-index: 1;
				position: relative;
				width: 600px;
				margin-left:auto;
				margin-right:auto;
				background:#e6f2f4;
				height:auto;
				-webkit-border-radius: 20px;
				-moz-border-radius: 20px;
				border-radius: 20px;
			}
			#header{
				width:600px;
				margin-left:auto;
				margin-right:auto;
				background-image:url(images/header.png);
				height:240px;
				
			}
			
			#content{
				position:relative;
				width:590px;
			
				float:left;
				overflow:scroll;
				max-height:423px;
				min-height:423px;
				font-family: arial, sans-serif;
				font-size: 13pt;
				text-align: justify;
				text-justify:inter-word;
				padding: 5px;
			}
			
			#menu{
				position:absolute;
				left:-164px;
				width:164px;
				background-image:url(images/menu.png);
				background-repeat:no-repeat;
				height:373px;
				text-align:center;
				padding-top:50px;
		
			}
			#sponsor{
			
				position:absolute;
				left:600px;
				width:164px;
				height:423px;
				background-image:url(images/sponsor.png);
				padding-top:20px;
				background-repeat:no-repeat;
			}
			#clear{
				clear:both;	
			}
			
			#footer{
				text-align:center;
	
			}
			
			
			
</style>

<body>
	<div id="bg">
				<img src="images/background.png" alt="">
	</div>

<div id="wrapper">
		<div id="header"></div>
 
  <div id="content">
  	
  <?php 
		if(isset($_GET['p'])){	
			if(file_exists("content/".$_GET['p'].".html")){
				include "content/".$_GET['p'].".html";	
			}else{
				echo "Menu Tidak ada";	
			}
		}else{
			include "content/home.html";		
		}
    ?>
 
  </div>
  
        <div id="menu">
        	<p><a href="?p=home"><img src="images/home.png" width="113" height="35"></a> 
          <p><a href="?p=seminar"><img src="images/seminar.png" width="115" height="35"></a>
          <p><a href="?p=workshop"><img src="images/workshop.png" width="115" height="35"></a>
          <p><a href="?p=tour"><img src="images/tour.png" width="115" height="35"></a>
          <p><a href="?p=contactus"><img src="images/contactus.png" width="115" height="35"></a> 
          <p><a href="https://docs.google.com/forms/d/1f1C9ERzPH-eejX1XWMki0vaOte2DoXEVFF-SjUl5MRk/viewform" target="_blank"><img src="images/register.png" width="115" height="35"></a>           
  </div>
  <div id="sponsor">
  <p><img src="images/acombee.png" width="100"> </div>
		
		 <div id="clear"></div>
		<div id="footer"> 
        	<img src="images/pos.png" width="600" height="26"> 
         <a href="http://binus.ac.id" target="_blank"><img src="images/binus.png" alt="Binus University" width="100"></a>			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://himti.org" target="_blank"><img src="images/himti.png" alt="HIMTI" width="60" ></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://acombee.com" target="_blank"><img src="images/acombee.png" alt="Acombee" width="100"></a>&nbsp;</div>
</div>
</body>