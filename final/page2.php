<html>
<head><title>page2</title>

<script type="text/javascript">

 function showhidediv(rad){
var rads=document.getElementsByName(rad.name);
document.getElementById('one').style.display=(bookname1.checked)?'block':'none' ;
document.getElementById('two').style.display=(author1.checked)?'block':'none' ;
}
		
		function submitAction(action) {
        
		 document.getElementById('form1').action=action;
		 document.getElementById('form1').submit();
		 }
		 
      </script>
</head>
<body background="ba.jpg">
<h1 align="center">Welcome Student</h1>
<h4  align="center">Enter the book name you want to search in library</h4>
<!--<form id="form1">
  
		
<fieldset>
       <legend>Select the search bases</legend>
<p>
<input type = "radio"
                 name = "a"
                 id = "bookname1"
                 value = "bookname1"
                 onclick="showhidediv(this);"
				 				 
				 />
          <label for = "bookname1">bookname</label>
		  
  <input type = "radio"
                 name = "a"
                 id = "author1"
                 value = "author1"
				onclick="showhidediv(this);" 
				 />
          <label for = "author1">author</label>
  
		  </p>
		  </fieldset>
			<div id="one" class="CF" style="display:none;"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter book name
			 <input type="text" name="bookname" autocomplete="off">
			<input type="submit" value="sub1" name="bookname1" onClick="submitAction('bookpage.php')">
		</div>
			<div id="two" style="display:none;" class="CF" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter author name
			<input type="text" name="authorname1" autocomplete="off">
			<input type="submit" value="sub2" name="author" onClick="submitAction('authorpage.php')">
			</div>
				
		 </form>-->
		<form method="post" action="bookpage.php" align="center" autocomplete="on">
		<input type="text" name="bookname" autocomplete="off">
		<!--<input type="text" name="authorname" autocomplete="off">-->
		<input type="submit">
		</form>
		  </body>
		  </html>