<!DOCTYPE html> 

<html> 
 

    <head> 
        <body> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Robin portfolio</title>
        
        <link rel="stylesheet" href="portfolio.css">
    </head> 
        
   
      
        
                <h1><center><a href="portfolio.php">Robin van der Gaag</a></center><br></h1> 
 
   
              <ul>
            <li><a href="portfolio.php">home                       </a></li>
            <li><a href="training.php">Training and education      </a></li>
            <li><a href="career.php">My career                     </a></li>
            <li><a href="future.php">My future                     </a></li>
            <li><a href="program.php">program languages            </a></li>
            <li><a href="programming.asp">languages I speak       </a></li>
            
        </ul>
<h2>
<?php
$t = date("H");
if ($t < "12") { 
    echo "Good morning dear visitor!";
} elseif ($t < "18") { 
    echo "Good afternoon dear visitor!";
} elseif ($t < "00") { 
    echo "Good night dear visitor!";
}  else { 
    echo "Good evening dear visitor!"; 
} 
?>


</h2>
        <p> next things you find about me on this webpage;<br> 
            <a href="training.php"> - What kind of education I've had.           </a><br> 
            <a href="career.php">   - Where I have worked my whole career.       </a><br> 
            <a href="future.php">- What  my future plans are.                    </a><br> 
            <a href="program.php"> -   Which programming languages I understand and I can code.                 </a><br> 
         <a href="">- Which languages I speak.   </a><br>
            <img src="ROBIN.jpg" alt="ikzelf" width="200px" height="px" align="right">
            
            
            <h2>Short about me.</h2>
        
        <p> I'm a 19 years old. I was born in The Haque, The Netherlands. <br>
            I was born at 16 December 1997. Moved in 2006 to Emmen (The Netherlands) and that is my current residence. I'm a productive guy. I like the things I do, and always with a lot of humor and fun, I'm always up for a funny joke. I enjoy life. If it is serious, I'm serious and a good worker. i love music my favorite music is RAMMSTEIN & P!nk. I have a beautiful Boxer dog named: Budha, I always walk with Budha, up to 5 KM at a time. my hobby's are riding on my electric bike, walking, computing on my desktop or laptop, and cooking! I also like to watch movies on Netflix or hang out with my friends. most thinks I like to do are walking outside fresh air to weather is no problem snow, windy, even rain I will walk. I do that evry evening, I believe one hour a time. I do that to clear my head. <br>
            <br> 
            <center><font color="blue"> I hope you found here the right information about me, thank you for visiting!</font></center> 
    </p>
        
        
            
        
        
        
        </body>
     <footer> 
        <p>
         <p><center>copyright &copy; by RJ van der Gaag</center></p>
         <p><center>contact information: <a href="mailto:r.j.vandergaag@outlook.com">R.J.vandergaag@outlook.com</a>.</center> </p>
         </p>
    </footer>
        
</html>

