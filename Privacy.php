<!doctype html>
<html lang="en">
<?php
session_start();
 include 'connectdb.php';
$i=0;
    $ok=$_SESSION['name'];
    $sql= "SELECT * FROM `USERS` WHERE `USERS`.`USERNAME`='$ok' AND `USERS`.`PJPOINTS`!='0'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $i++;
        $pp=$row['PJPOINTS'];
        $ee=$row['UPPJ']; 
    }
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $totalCorrect = 0;
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "C") { $totalCorrect++; }
            if ($answer5 == "C") { $totalCorrect++; }
            if ($answer6 == "D") { $totalCorrect++; }
            if ($answer7 == "B") { $totalCorrect++; }
            if ($totalCorrect > 0) {
if ($pp == 0){ 
$ok = $_SESSION['name'];
    $sql = "UPDATE `USERS` SET `PJPOINTS` = '$totalCorrect' WHERE `USERS`.`USERNAME` = '$ok'";
    $result = mysqli_query($conn,$sql);
}
            }
if ($ee == ""){
    if ($pp > 6){
         $_SESSION['Points'] = 10 + $_SESSION['Points'];
         $sql = "UPDATE `USERS` SET `UPPJ` = 'T' WHERE `USERS`.`USERNAME` = '$ok'";
    $result = mysqli_query($conn,$sql);
    }
    else{ if ($pp > 3){
         $_SESSION['Points'] = 5 + $_SESSION['Points'];
         $sql = "UPDATE `USERS` SET `UPPJ` = 'T' WHERE `USERS`.`USERNAME` = '$ok'";
    $result = mysqli_query($conn,$sql);
    }
    }
    }
    $ko = $_SESSION['Points'];
    $sql = "UPDATE `USERS` SET `POINTS` = '$ko' WHERE `USERS`.`USERNAME` = '$ok'";
    $result = mysqli_query($conn,$sql);
    $i=0;
    $ok=$_SESSION['name'];
    $sql= "SELECT * FROM `USERS` WHERE `USERS`.`USERNAME`='$ok' AND `USERS`.`PJPOINTS`!='0'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $i++;
        $pp=$row['PJPOINTS'];
    }
    ?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
	 crossorigin="anonymous">
	<title>Cyber Privacy Quiz</title>
	<link rel="icon" href="https://i.ibb.co/k80kB58/logo.png" type="image/icon type">
	<style>
		.holder {
			background-color: rgb(230, 230, 230);
			width: auto;
			height: 250px;
			overflow: hidden;
			padding: 10px;
			font-family: Helvetica;
		}
		.holder .mask {
			position: relative;
			left: 0px;
			top: 10px;
			width: 300px;
			height: 500px;
			overflow: hidden;
		}

		.holder ul {
			list-style: none;
			margin: 0;
			padding: 0;
			position: relative;
		}

		.holder ul li {
			padding: 10px 0px;
		}

		.holder ul li a {
			color: darkred;
			text-decoration: none;
		}

		an.hover {
			text-decoration: underliner;
			color: darkgoldenrod;

		}

		body {
			 background: #72e8f2;
            /* fallback for old browsers */
            
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
		}

		::-webkit-scrollbar {
			display: none;
		}

		.navbar-custom {
			background-color: #fc3f3f;
			color: white;
		}

		.navbar-custom .navbar-nav .nav-link {
			color: white;
		}

		.navbar-custom .nav-item.active .nav-link,
		.navbar-custom .nav-item:hover .nav-link {
			color: white;
		}
        h1 {
  font-size: 72px;
  background: -webkit-linear-gradient(grey,white);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  -webkit-text-stroke-width: 0.5px;
  -webkit-text-stroke-color: black;
}

	</style>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-custom">
		
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    
                    <a class="nav-link" href="https://cyberkavach.epizy.com/home.php" style="font-size:22px;padding: 15px 15px;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:21px;padding: 15px 15px;">
                        Fun Zone
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <h6 class="dropdown-header">Fun Zone</h6>
                        <a class="dropdown-item" href="/Games.php">Cyber Games</a>
                        <a class="dropdown-item" href="/Quizmain.php">Cyber Quizzes</a>
                        <a class="dropdown-item" href="/Stories.php">Stories to Read</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/News.php" style="font-size:21px;padding: 15px 15px;">Latest News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Upholders.php" style="font-size:21px;padding: 15px 15px;">Cyber Upholders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/About.php" style="font-size:21px;padding: 15px 15px;">About us</a>
                </li>
            </ul>
            <a href="/Profile.php"><button class="btn btn-light my-2 my-sm-0" type="submit" style="padding:10px 23px;font-family: Raleway">My Profile</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
             </div>
    </nav>
    </div>
    <br>
    <div class="container" style="text-align: center">
        <h1>Privacy Quiz</h1>
    </div>
    <br>
<br> 

<div class="container">
    <div class="row">
    <?php if ($pp==0) : ?>
<div class="col-sm-3.7">
<div class="card" style="width: 18rem;background-coloR:#ff3636">
  <div class="card-body">
    <h5 class="card-title" style="font-size:25px">Questions</h5>
    <table class="table table-dark">
  <tbody>
    <tr>
      <th scope="row">1</th>
      <th><button id="l1" type="button" class="btn btn-primary" style="padding:2px 12px;" onclick='Q1a();Q1b()'>Q1</button></th>
      <th scope="row">2</th>
      <th><button id="l2" type="button" class="btn btn-primary" style="padding:2px 12px;" onclick='Q2a();Q2b()'>Q2</button></th>
    </tr>
    <tr>
      <th scope="row">3</th>
      <th><button id="l3" type="button" class="btn btn-primary" style="padding:2px 12px;" onclick='Q3a();Q3b()'>Q3</button></th>
      <th scope="row">4</th>
      <th><button id="l4" type="button" class="btn btn-primary" style="padding:2px 12px;" onclick='Q4a();Q4b()'>Q4</button></th>
    </tr>
    <tr>
      <th scope="row">5</th>
      <th><button id="l5" type="button" class="btn btn-primary" style="padding:2px 12px;" onclick='Q5a();Q5b()'>Q5</button></th>
      <th scope="row">6</th>
      <th><button id="l6" type="button" class="btn btn-primary" style="padding:2px 12px;" onclick='Q6a();Q6b()'>Q6</button></th>
    </tr>
    <tr>
      <th scope="row">7</th>
      <th><button id="l7" type="button" class="btn btn-primary" style="padding:2px 12px;" onclick='Q7a();Q7b()'>Q7</button></th>
      
    </tr>
    
  </tbody>
</table>
  </div>
  </div>
  <br>
  <div class="card" style="width: 18rem;background-coloR:#ff3636;  ">
  <div class="card-body">
    <h5 class="card-title" style="font-size:25px">Instructions:</h5>
    <h6>• There are 7 questions.</h6>
    <h6>• Click the question number to get the question.</h6>
    <h6>• Correct choice will give you +1 points.</h6>
    <h6>• No negative points.</h6>
    <h6>• Score more than 3 points to get 5 Cyber Points.</h6>

  </div>
  </div>
  </div>
  <div class="col-sm-8">
    <div class="card" style="width: 51rem;background-color:#ff0000;height: 39rem">
   <div class="card-body">
   <h2 class="card-title" id="demo" style="color:white">Click Question Number to get question.</h2>
   <br>
   <div class="card" style="width: 48rem;background-color:#c2ffef;height: 30rem">
   <div class="card-body">
   
   <form method="post" action="/Quiz/Privacy.php" >
		<ol>
        <li id="Q1" style="display:none">
                
                    <h3 style="padding-top:15px">Which of these is not a wise idea when it comes to password security? </h5>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" oninput="document.getElementById('l1').className='btn btn-success'"/>
                        <label for="question-1-answers-A" style="font-size:17px;padding:10px 5px;">A) Using a password manager to securely store your login information.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" oninput="document.getElementById('l1').className='btn btn-success'"/>
                        <label for="question-1-answers-B" style="font-size:17px;padding:10px 5px;">B) Writing your passwords down on a sticky note that you keep near your computer.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" oninput="document.getElementById('l1').className='btn btn-success'"/>
                        <label for="question-1-answers-C" style="font-size:17px;padding:10px 5px;">C) Changing your passwords on a regular basis, such as every three-to-six months.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" oninput="document.getElementById('l1').className='btn btn-success'"/>
                        <label for="question-1-answers-D" style="font-size:16px;padding:10px 5px;">D) Creating unique, long, complex passwords for each and every online account you have.</label>
                    </div>
          
                </li>
                <li id="Q2" style="display:none">
                
                    <h3 style="padding-top:15px">When collecting a customer’s personal information you must: </h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" oninput="document.getElementById('l2').className='btn btn-success'"/>
                        <label for="question-2-answers-A" style="font-size:20px;padding:10px 5px;">A) Not collect personal information indiscriminately.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-2-answers-B" value="B" oninput="document.getElementById('l2').className='btn btn-success'"/>
                        <label for="question-2-answers-B" style="font-size:20px;padding:10px 5px;">B) Not deceive or mislead individuals about the purposes for collecting <br>personal information</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" oninput="document.getElementById('l2').className='btn btn-success'"/>
                        <label for="question-1-answers-C" style="font-size:20px;padding:10px 5px;">C) Limit the amount and type of the information gathered to what is <br>necessary for your identified purposes</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" oninput="document.getElementById('l2').className='btn btn-success'"/>
                        <label for="question-2-answers-D" style="font-size:20px;padding:10px 5px;">D) All of These</label>
                    </div>
                
 
     </li>
                <li id="Q3" style="display:none">
		
            
                    <h3 style="padding-top:15px">When you use a library terminal, the library knows what sites you have visited.</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" oninput="document.getElementById('l3').className='btn btn-success'"/>
                        <label for="question-1-answers-A" style="font-size:23px;padding:10px 5px;">A) True</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" oninput="document.getElementById('l3').className='btn btn-success'"/>
                        <label for="question-3-answers-B" style="font-size:23px;padding:10px 5px;">B) False</label>
                    </div>
                    
                    
                
           
    </li>
                <li id="Q4" style="display:none">
		

                    <h3 style="padding-top:15px">Internet "cookies" are: </h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" oninput="document.getElementById('l4').className='btn btn-success'"/>
                        <label for="question-4-answers-A" style="font-size:23px;padding:10px 5px;">A) The same as browser bookmarks</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" oninput="document.getElementById('l4').className='btn btn-success'"/>
                        <label for="question-4-answers-B" style="font-size:23px;padding:10px 5px;">B) Delicious</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" oninput="document.getElementById('l4').className='btn btn-success'"/>
                        <label for="question-4-answers-C" style="font-size:23px;padding:10px 5px;">C) Text packets stored on your computer by Web sites</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" oninput="document.getElementById('l4').className='btn btn-success'"/>
                        <label for="question-4-answers-D" style="font-size:23px;padding:10px 5px;">D) Illegal to use</label>
                    </div>
                
            
    </li>
                <li id="Q5" style="display:none">
		

                
                    <h3 style="padding-top:15px">If I select "clear cookies" or "empty cache" in my browser then advertisers cannot track me.</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" oninput="document.getElementById('l5').className='btn btn-success'"/>
                        <label for="question-5-answers-A" style="font-size:23px;padding:10px 5px;">A) True</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" oninput="document.getElementById('l5').className='btn btn-success'"/>
                        <label for="question-5-answers-B" style="font-size:23px;padding:10px 5px;">B) False</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" oninput="document.getElementById('l5').className='btn btn-success'"/>
                        <label for="question-5-answers-C" style="font-size:23px;padding:10px 5px;">C) It Depends</label>
                    </div>
                    
                    
                </li>
                <li id="Q6" style="display:none">
		

                
                    <h3 style="padding-top:15px">If I give a company my email address and they contact me via email, the email must contain: </h3>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" oninput="document.getElementById('l6').className='btn btn-success'"/>
                        <label for="question-6-answers-A" style="font-size:23px;padding:10px 5px;">A) A subject line that accurately reflects the content of the message.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" oninput="document.getElementById('l6').className='btn btn-success'"/>
                        <label for="question-6-answers-B" style="font-size:23px;padding:10px 5px;">B) A valid physical postal address for the company</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" oninput="document.getElementById('l6').className='btn btn-success'"/>
                        <label for="question-6-answers-C" style="font-size:23px;padding:10px 5px;">C) A clear and conspicuous way to opt out of future emails.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" oninput="document.getElementById('l6').className='btn btn-success'"/>
                        <label for="question-6-answers-D" style="font-size:23px;padding:10px 5px;">D) All of the above</label>
                    </div>
                </li>
                <li id="Q7" style="display:none">
        

                
                    <h3 style="padding-top:15px">Which federal organization most actively enforces privacy laws that protect consumers?</h3>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" oninput="document.getElementById('l7').className='btn btn-success'"/>
                        <label for="question-7-answers-A" style="font-size:23px;padding:10px 5px;">A) The Department of Justice</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" oninput="document.getElementById('l7').className='btn btn-success'"/>
                        <label for="question-7-answers-B" style="font-size:23px;padding:10px 5px;">B) The Federal Trade Commission</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" oninput="document.getElementById('l7').className='btn btn-success'"/>
                        <label for="question-7-answers-C" style="font-size:23px;padding:10px 5px;">C) The Federal Communications Commission</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" oninput="document.getElementById('l7').className='btn btn-success'"/>
                        <label for="question-7-answers-D" style="font-size:23px;padding:10px 5px;">D) The Federal Bureau of Investigation</label>
                    </div>
                </li>


                </ol>

    </div>
    </div>
    </div><input type="submit" id="B" value="Submit" class="submitbtn btn btn-primary" style="display:none;float:bottom-right">
    </form>
   </div>
   <?php endif ?>
<?php if ($pp>0) : ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" id="grad" style="padding: 10px 15px; background-color: #ff0000; border-radius: 7px">
            <h2 class= "display-4" style="text-align: center; color: white; font-size: 60px">Results</h2>
            <br>
            <h3 style="color: white; margin-left: 15px">
                <?php if ($pp > 0 and $pp < 7) {
                    echo "You scored ", $pp, " points out of 7!";
                } else {
                    echo "Wow! You scored full marks in the Quiz! ";
                } 
                ?>
                <br>
                <?php if ($pp >= 3 and $pp < 7) {
                    echo "Congratulations! you got 5 more cyber secure points";
                   
                } elseif ($pp == 7) {
                    echo "Congratulations! you got 10 more cyber secure points";
                    
                } else {
                    echo "If you had scored ", 4-$pp, " more points, you would have got 5 more cyber secure points!";
                }
                ?>
            </h3>
            <br>
            <h3> >> Leaderboard:</h3>
            <div class="container">
<table class="table table-bordered table-danger">
   <thead>
    <tr>
      <th scope="col">Rank</th>
      <th scope="col">Username</th>
      <th scope="col">Score</th>
     
    </tr>
  </thead>
  <tbody>
  <?php
  $i=1;
    $sql = "SELECT USERNAME, PJPOINTS,NAME FROM USERS ORDER BY PJPOINTS DESC LIMIT 5 ";
$result = mysqli_query($conn, $sql);  
  while($row = mysqli_fetch_assoc($result) and $row["PJPOINTS"] != 0) {
    if (strlen($row["NAME"])==0){
    echo "<tr>","<td>",$i,"</td>","<td>",$row["USERNAME"],"</td>","<td>",$row["PJPOINTS"],"</td>","</tr>";
    $i++;
    }
    else {
echo "<tr>","<td>",$i,"</td>","<td>",$row["NAME"],"</td>","<td>",$row["PJPOINTS"],"</td>","</tr>";
    $i++;
    }
  
  }

?>
  </tbody>
</table>
<br>
<a href="https://cyberkavach.epizy.com/home.php" type="button" class="btn btn-light btn-lg btn-block">Back to Home</a>
</div>
    </div>
</div>
<?php endif ?>
 </div>
  </div>
     </div>
     </div>
         <br>
    <br>
<br> 
 <script>
         function Q1a() {
            document.getElementById("demo").innerHTML = "Question 1";
         }
         function Q1b() {
            document.getElementById('Q1').style.display='block';
            document.getElementById('B').style.display='block';
            document.getElementById('Q2').style.display='none';
            document.getElementById('Q3').style.display='none';
            document.getElementById('Q4').style.display='none';
            document.getElementById('Q7').style.display='none';
            document.getElementById('Q8').style.display='none';
            document.getElementById('Q9').style.display='none';
            document.getElementById('Q10').style.display='none';
            document.getElementById('Q6').style.display='none';
            document.getElementById('Q5').style.display='none';
         }
         function Q2a() {
            document.getElementById("demo").innerHTML = "Question 2";
         }
         function Q2b() {
            document.getElementById('Q2').style.display='block';
            document.getElementById('Q1').style.display='none';
            document.getElementById('Q3').style.display='none';
            document.getElementById('Q4').style.display='none';
            document.getElementById('Q5').style.display='none';
            document.getElementById('Q6').style.display='none';
            document.getElementById('Q7').style.display='none';
            document.getElementById('Q8').style.display='none';
            document.getElementById('Q9').style.display='none';
            document.getElementById('Q10').style.display='none';
            document.getElementById('B').style.display='block';
         }
         function Q3a() {
            document.getElementById("demo").innerHTML = "Question 3";
         }
         function Q3b() {
            document.getElementById('Q3').style.display='block';
            document.getElementById('Q2').style.display='none';
            document.getElementById('Q1').style.display='none';
            document.getElementById('Q4').style.display='none';
            document.getElementById('Q5').style.display='none';
            document.getElementById('B').style.display='block';
            document.getElementById('Q7').style.display='none';
            document.getElementById('Q8').style.display='none';
            document.getElementById('Q9').style.display='none';
            document.getElementById('Q10').style.display='none';
            document.getElementById('Q6').style.display='none';
         }
         function Q4a() {
            document.getElementById("demo").innerHTML = "Question 4";

         }
         function Q4b() {
            document.getElementById('Q4').style.display='block';
            document.getElementById('Q2').style.display='none';
            document.getElementById('Q3').style.display='none';
            document.getElementById('Q1').style.display='none';
            document.getElementById('Q5').style.display='none';
            document.getElementById('B').style.display='block';
            document.getElementById('Q6').style.display='none';
            document.getElementById('Q7').style.display='none';
            document.getElementById('Q8').style.display='none';
            document.getElementById('Q9').style.display='none';
            document.getElementById('Q10').style.display='none';
         }
         function Q5a() {
            document.getElementById("demo").innerHTML = "Question 5";
         }
         function Q5b() {
            document.getElementById('Q5').style.display='block';
            document.getElementById('Q2').style.display='none';
            document.getElementById('Q3').style.display='none';
            document.getElementById('Q4').style.display='none';
            document.getElementById('Q6').style.display='none';
            document.getElementById('Q1').style.display='none';
            document.getElementById('Q7').style.display='none';
            document.getElementById('Q8').style.display='none';
            document.getElementById('Q9').style.display='none';
            document.getElementById('Q10').style.display='none';
            document.getElementById('B').style.display='block';
         }
         function Q6a() {
            document.getElementById("demo").innerHTML = "Question 6";
         }
         function Q7a() {
            document.getElementById("demo").innerHTML = "Question 7";
         }
         function Q6b() {
            document.getElementById('Q6').style.display='block';
            document.getElementById('Q2').style.display='none';
            document.getElementById('Q3').style.display='none';
            document.getElementById('Q4').style.display='none';
            document.getElementById('Q1').style.display='none';
            document.getElementById('Q5').style.display='none';
            document.getElementById('Q7').style.display='none';
            document.getElementById('Q8').style.display='none';
            document.getElementById('Q9').style.display='none';
            document.getElementById('Q10').style.display='none';
            document.getElementById('B').style.display='block';
         }
          function Q7b() {
            document.getElementById('Q7').style.display='block';
            document.getElementById('Q2').style.display='none';
            document.getElementById('Q3').style.display='none';
            document.getElementById('Q4').style.display='none';
            document.getElementById('Q6').style.display='none';
            document.getElementById('Q1').style.display='none';
            document.getElementById('Q5').style.display='none';
            document.getElementById('Q8').style.display='none';
            document.getElementById('Q9').style.display='none';
            document.getElementById('Q10').style.display='none';
            document.getElementById('B').style.display='block';
         }
      </script>
                <footer class="page-footer font-small blue pt-4" style="background-color: #ff9191;">
        <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase">Cyber Safety</h5>
                    <p>Cyber Security is trying to be safe on the internet and is the act of maximizing a user's
                        awareness of
                        personal safety and security risks to private information and property associated with using
                        the
                        internet,
                        and the self-protection from computer crime.</p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Features</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a class="an" href="/Stories.php" style="color:blue">Case
                                Studies</a>
                        </li>
                        <li>
                            <a class="an" href="/News.php"
                                style="color:blue">Latest-News</a>
                        </li>
                        <li>
                            <a class="an" href="/Securify.php"
                                style="color:blue">Securify</a>
                        </li>
                        <li>
                            <a class="an" href="/Upholders.php" style="color:blue">Cyber
                                Upholders</a>
                        </li>
                    </ul>

                </div>
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Fun Zone</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a class="an" href="/Quiz/DigitalIndia.php" style="color:blue">
                                Digital
                                India Quiz</a>
                        </li>
                        <li>
                            <a class="an" href="/Games/Cyberthon.php"
                                style="color:blue">Cyberthon</a>
                        </li>
                        <li>
                            <a class="an" href="/Games/DodgeVirus.php"
                                style="color:blue">Dodge the Virus</a>
                        </li>
                        <li>
                            <a class="an" href="/Quiz/Privacy.php" style="color:blue">Privacy
                                Junction</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3" style="background-color:#fc3f3f; color: white">
            2020<br>
            <a>Cyber Kavach</a>
        </div>
    </footer>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    </body>
    </html>