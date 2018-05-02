<!DOCTYPE html>
<html>
<head>
    <title>Blog</title> <!-- Web Tab Title -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Enabling zoom on mobile devices -->
    
    <meta name="keywords" content="spas, beauty, massages, eyelashes, melbourne">
    
    <meta name="description" content="Relaxing Spas. Book now today!">
    
    <link rel="stylesheet" type="text/css" href="blog.css"> <!-- Link to external CSS file -->
    <script type="text/javascript" src="slideshow.js"></script>
	<style>
	#left, #right {
		float:left;
		position:relative;
	}
	#left {
		font-family:Helvetica;
		//background-color: pink;
		margin-left:200px;
		right:200px;
		width:800px;
		padding-bottom:auto;
	}
	#right {
		text-align:center;
		font-family:Arial;
		//background-color: red;
		margin-left:-200px;
		width:220px;
		padding-bottom:auto;
	}
	.categories {
		font-family: Georgia;
		font-size: 16px;
		font-style:italic;
	}
	.contents {
		font-family: times;
		font-weight:bold;
		font-size: 18px;
		margin-left:10px;
		margin-right:10px;
	}
	#bar {
		text-align:left;
		
	}
	#tags{
		text-align:left;
		margin-left:10px;
	}
	</style>
</head>
    
<body onload="ChangeDots">
    <div class="wrapper">
        <!-- Header -->
        <?php include('header.php')?>
        
    
    <!-- Navigation bar -->
        <?php include('nav.php')?>
    
	<!-- MAIN CONTENT -->
    <div class= "content"> 
       <div id="left">
		<h1 style="text-align:center">Post</h1>
		<h2>First blog</h2>
			<p class="categories">May, 2nd, 2018 | <a href>Dairy</a> | <a href>14 Comment</a></p><hr>
			<p class= "contents">This is your first article. 
			Click the edit link to modify or delete the article, 
			or start writing a new article. 
			If you wish, you can tell the reader through this article why you created this blog and what you intend to do with it. 
			If you need help, you are welcome to support BBS.
			</p>
		<p style="text-align:right;margin-right:10px">Tagged: <a href>Students</a></p><hr>
		
		<h2>Second blog</h2>
			<p class="categories">May, 2nd, 2018 | <a href>Dairy</a> | <a href>14 Comment</a></p><hr>
			<p class= "contents">This is your first article. 
			Click the edit link to modify or delete the article, 
			or start writing a new article. 
			If you wish, you can tell the reader through this article why you created this blog and what you intend to do with it. 
			If you need help, you are welcome to support BBS.
			</p>
		<p style="text-align:right;margin-right:10px">Tagged: <a href>Business</a></p><hr>
	   </div>
	   <div id="right">
		<h1 style="text-align:center">Blog Bar</h1><hr>
		<h3 id="bar">CATEGORIES</h3>
		<p id="tags"><a href>Dairy</a></p>
		<p id="tags"><a href>Discount</a></p>
		<p id="tags"><a href>Special</a></p>
		<p id="tags"><a href>Pictures</a></p>
		<p id="tags"><a href>Uncategories</a></p>
		<hr>
		<h3 id="bar">TAG</h3>
		<p id="tags"><a href>Students,Business,Games,</a></p>
		<p id="tags"><a href>RRS,Widgets,Video</a></p>
		
	   </div>
    </div>
    <!-- MAIN CONTENT END -->
    <!-- FOOTER CONTENT -->
       <?php include('footer.php')?>  
</div>
    
    
   

</body>
</html>