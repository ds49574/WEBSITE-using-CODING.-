<!DOCTYPE html>

<html>


<head>
	
<title>PHP Quiz</title>
	
	
<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>


<body>
<?php
$dateFormat = "d F Y -- g:i a";
$targetDate = time() + (0.1*60);//Change the 25 to however many minutes you want to countdown
$actualDate = time();
$secondsDiff = $targetDate - $actualDate;
$remainingDay	 = floor($secondsDiff/60/60/24);
$remainingHour	= floor(($secondsDiff-($remainingDay*60*60*24))/60/60);
$remainingMinutes = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))/60);
$remainingSeconds = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))-($remainingMinutes*60));
$actualDateDisplay = date($dateFormat,$actualDate);
$targetDateDisplay = date($dateFormat,$targetDate);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quiz System</title>

<script type="text/javascript">
  var days = <?php echo $remainingDay; ?>  
  var hours = <?php echo $remainingHour; ?>  
  var minutes = <?php echo $remainingMinutes; ?>  
  var seconds = <?php echo $remainingSeconds; ?> 
function setCountDown ()
{
  seconds--;
  if (seconds < 0){
	  minutes--;
	  seconds = 59
  }
  if (minutes < 0){
	  hours--;
	  minutes = 59
  }
  if (hours < 0){
	  days--;
	  hours = 23
  }
  document.getElementById("remain").innerHTML = minutes+" minutes, "+seconds+" seconds";
  SD=window.setTimeout( "setCountDown()", 1000 );
  if (minutes == '00' && seconds == '00') { seconds = "00"; window.clearTimeout(SD);
   		window.alert("Time is up. Press OK to continue."); // change timeout message as required
		  window.location = "http://localhost/myproject28/grade.php" // Add your redirect url
 	} 

}

</script>
</head>
<body onload="setCountDown();">
 <div id="remain"><?php echo "$remainingMinutes minutes, $remainingSeconds seconds";?></div>

   
</body>
</html>	
<div id="page-wrap">

		
<h1>Final Quiz for Lip building</h1>
		
		
<form action="grade.php" method="post" id="quiz">
		
            
<ol>
            
                
<li>
                
                    
<h3>CSS Stands for...</h3>
                    
                    
<div>
                        
<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        
<label for="question-1-answers-A">A) Computer Styled Sections </label>
                    
</div>
                    
                    
<div>
                        
<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        
<label for="question-1-answers-B">B) Cascading Style Sheets</label>
                    
</div>
                    
                    
<div>
                        
<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        
<label for="question-1-answers-C">C) Crazy Solid Shapes</label>
                    
</div>
                    
                    
<div>
                        
<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        
<label for="question-1-answers-D">D) None of the above</label>
                    
</div>
                
                
</li>
                
                
<li>
                
                    
<h3>Internet Explorer 6 was released in...</h3>
                    
                    
<div>
                        
<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        
<label for="question-2-answers-A">A) 2001</label>
                    
</div>
                    
                    
<div>
                        
<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        
<label for="question-2-answers-B">B) 1998</label>
                    
</div>
                    
                    
<div>
                        
<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        
<label for="question-2-answers-C">C) 2006</label>
                    
</div>
                    
                    
<div>
                        
<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        
<label for="question-2-answers-D">D) 2003</label>
                    
</div>
                
                
</li>
                
                
<li>
                
                    
<h3>SEO Stand for...</h3>
                    
                    
<div>
                        
<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        
<label for="question-3-answers-A">A) Secret Enterprise Organizations</label>
                    
</div>
                    
                    
<div>
                        
<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        
<label for="question-3-answers-B">B) Special Endowment Opportunity</label>
                    
</div>
                    
                    
<div>
                        
<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        
<label for="question-3-answers-C">C) Search Engine Optimization</label>
                    
</div>
                    
                    
<div>
                        
<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        
<label for="question-3-answers-D">D) Seals End Olives</label>
                    
</div>
                
                
</li>
                
                
<li>
                
                    
<h3>A 404 Error...</h3>
                    
                    
<div>
                        
<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        
<label for="question-4-answers-A">A) is an HTTP Status Code meaning Page Not Found</label>
                    
</div>
                    
                    
<div>
                        
<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        
<label for="question-4-answers-B">B) is a good excuse for a clever design</label>
                    
</div>
                    
                    
<div>
                        
<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        
<label for="question-4-answers-C">C) should be monitored for in web analytics</label>
                    
</div>
                    
                    
<div>
                        
<input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        
<label for="question-4-answers-D">D) All of the above</label>
                    
</div>
                
                
</li>
                
                
<li>
                
                    
<h3>Your favorite website is</h3>
                    
                    
<div>
                        
<input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        
<label for="question-5-answers-A">A) CSS-Tricks</label>
                    
</div>
                    
                    
<div>
                        
<input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        
<label for="question-5-answers-B">B) CSS-Tricks</label>
                    
</div>
                    
                    
<div>
                        
<input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        
<label for="question-5-answers-C">C) CSS-Tricks</label>
                    
</div>
                    
                    
<div>
                        
<input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        
<label for="question-5-answers-D">D) CSS-Tricks</label>
                    
</div>
                
                
</li>
            
            
</ol>
            
            
<input type="submit" value="Submit Quiz" />
		
		
</form>
	
	
</div>
	
	
</body>


</html>