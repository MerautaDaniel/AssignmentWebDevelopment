<?php
require('Persistence.php');
$comment_post_ID = 1;
$db = new Persistence();
$comments = $db->get_comments($comment_post_ID);
$has_comments = (count($comments) > 0);
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Contact Us </title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<style>
        body{background-image: url(images/photo6.jpg);}
        section{
           text-align: center;
           border-bottom: 2px solid rgba(103, 5, 80, 0.94);
           border-top: 2px solid rgba(103, 5, 80, 0.94); 
        }
       .container1{display: flex;justify-content: space-between;}
         p {
           font-family: cursive;
           color:#990099;
           font-size: 15px;
        }
         h1,h2,h3,h4,h5,h6
             {
              font-family: cursive;
              color:darkslategrey;
              font-size:30px;    
             }
         ul{ list-style-type:none; }
         li { float:left;text-align: center; }
         li a, .dropbtn{
        padding-left: 20px;
        padding-right: 20px;
        background: rgba(193, 48, 148, 0.45);
        color:rgb(57, 12, 159);
        border-radius: 25px;
        font-size:20px;
        font-family: cursive;
        box-shadow: 9px 9px 15px rgb(163,177,198,0.3), -10px -10px 15px white;
        text-decoration: none;
        text-align: center;   
        }
     li a:hover, .dropdown:hover .dropbtn
        {
        box-shadow: 7px 7px 14px rgb(163,177,198,0.8),-8px -8px 11px grey;
        }
     li.dropdown{
         display:inline-block;
        }
    .dropdown{
        position:relative;
        display: inline-block;
        }
    .dropdown-content
        {
         display:none;
         position:absolute;
         background-color: rgba(225, 36, 232, 0.2);
         min-width: 160px;
         box-shadow:9px 9px 15px rgb(163,177,198,0.3), -10px -10px 15px white;
         z-index: 1; 
        }
     .dropdown:hover .dropdown-content{display:block;}
     .container2{
         display: flex;
         margin: auto;
         text-align: center;
         background-color: #EFC0F3;
         width: 360px;
         height:400px;
         border-radius: 40px;
         box-shadow: 9px 9px 16px rgb(163,177.198,0.6),-10px -10px 15px white;
         
         } 
       
       input{
          border:none;
          border-radius: 25px;
          box-shadow: inset 4px 4px 4px rgb(163,177,198,0.6),inset -3px -3px 3px white;
          width: 315px;
          height: 35px;
          margin:10px;
          text-align: left;
          padding-left: 15px;
          padding-bottom: 3px;
          background: transparent;
          font-size: 12px;
          text-align: left;
          color:grey;
         }
       textarea{
          resize: vertical;
          height:100px;
          max-height: 200px;
          border:none;
          border-radius: 25px;
          box-shadow: inset 4px 4px 4px rgb(163,177,198,0.6),inset -3px -3px 3px white;
          width: 315px;
          margin:10px;
          text-align: left;
          padding-left: 15px;
          padding-bottom: 3px;
          background: transparent;
          font-size: 12px;
          text-align: left;
          color:grey;
    }
    input, textarea{
        outline: none;
        border: 2px solid;}
    input:focus ,textarea:focus{
        box-shadow: 9px 9px 15px rgb(163,177,198,0.3), -10px -10px 15px white; }
    ::placeholder{
        color: blueviolet;opacity: 1}
     button{
                background: #ECF0F3;
                box-sizing: border-box;
                color:#499DF5;
                border-radius: 25px;
                font-size:12px;
                font-family: Verdana;
                margin-top: 15px;
                box-shadow: 9px 9px 16px rgb(163,177,198,0.6), -10px -10px 15px white;
                border:none;
            }
     button:hover{
                box-shadow: 7px 7px 14px rgb(163,177,198,0.6),-8px -8px 11px grey;
            }  
</style>

</head>

<body >
	
	
		 <div class="container1" >
          
             <div ><img src="images/logo2.png"  width="150"  height="150" alt="image here" > </div> 
             <div ><img  src="images/Contact%20us.png" width="800" height="150"alt="image here"></div>
           
         </div><br>
		   <div >
        <ul>
            <li> <a href="Home.html">Home</a></li>
            <li> <a href="Galery.html">Gallery</a></li>
            <li> <a href="Visit%20us.html">Visit us</a></li>
            <li class="dropdown">
                  <a href="javascript:void(0)" class="bropbtn">More Info</a>
                     <div class="dropdown-content">
                       <a href="About%20us.html">About Us</a><br>
                       <a href="Poducts.html">Products</a>
                     </div>
             </li>
         </ul>
        </div><br><br>
    <section>
        <h1>Post your feedback</h1>
   	  
      <div class="container2">
           
      <form action="post_comment.php" method="post" id="commentform">

       <!-- <label for="comment_author" class="required">Your name</label>-->
        <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required" placeholder="Your name">
        
       <!-- <label for="email" class="required">Your email</label>-->
        <input type="email" name="email" id="email" value="" tabindex="2" required="required" placeholder="Your email">

       <!-- <label for="comment" class="required">Your message</label>-->
        <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required" placeholder="Write your message"></textarea>

        <input type="hidden" name="comment_post_ID" value="<?php echo($comment_post_ID); ?>" id="comment_post_ID" />
    <!--    <input name="submit" type="submit" value="Submit comment" />-->
          <button type="submit" name="button">Submit</button>
        
      </form>
      
    </div>
	

    <h2>Comments</h2>
    
    
    <ol <?php echo($has_comments?' has-comments':''); ?>>
      <p>Be the first to add a comment.</p><br>
      <?php
        foreach ($comments as &$comment) {
          ?>
         <article id="comment_<?php echo($comment['id']); ?>" class="hentry">	
    				<footer class="post-info">
    					<abbr class="published" title="<?php echo($comment['date']); ?>">
    						<?php echo( date('d F Y', strtotime($comment['date']) ) ); ?>
    					</abbr>

    					<address class="vcard author">
    						By <a class="url fn" href="#"><?php echo($comment['comment_author']); ?></a>
    					</address>
    				</footer>

    				<div class="entry-content">
    					<p><?php echo($comment['comment']); ?></p>
    				</div>
    			</article>
          <?php
        }
      ?>
		</ol>
</section>
<div class="container3">
    <div id="box1">
        <p>We are at your disposal every day. To see our opening hours <a href="Visit%20us.html">clik here.</a> </p>
        <p>To book a relaxing weekend with us plase call 3278004637 or email: tophill@gmail.com</p>
    </div>
    <div id ="box2">
    </div>
</div>
    <section>
	<footer>
		<div><p style ="text-align: center">All rigts reserved@2020</p>
         </div>
    </footer>
</section>
</body>
</html>