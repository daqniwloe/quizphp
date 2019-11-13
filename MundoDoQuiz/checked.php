<?php
session_start();

include "connect.php";
/*$con = mysqli_connect('localhost','root');
if($con){
  echo"connection";
}

mysqli_select_db($con,'quizdb');
*/
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style type="text/css">
	.animateuse{
			animation: leelaanimate 0.5s infinite;
		}

@keyframes leelaanimate{
			0% { color: red },
			10% { color: yellow },
			20%{ color: blue }
			40% {color: green },
			50% { color: pink }
			60% { color: orange },
			80% {  color: black },
			100% {  color: brown }
		}
</style>

   </head>
   <body>
     <div class="container text-center" >
     	<br><br>
    	<h1 class="text-center text-success text-uppercase animateuse" > Mundo Do Quiz</h1>
    	<br><br>
      <table class="table text-center table-bordered table-hover">
      	<tr>
      		<th colspan="2" class="bg-dark"> <h1 class="text-white"> Resultados </h1></th>
      		
      	</tr>
      	<tr>
		      	<td>
		      		Questões Respondidas
		      	</td>

	         <?php
         $counter = 0;
         $Resultans = 0;
            if(isset($_POST['submit'])){
            if(!empty($_POST['quizcheck'])) {
            // Conta o Número de CheckBox.
            $checked_count = count($_POST['quizcheck']);
            // print_r($_POST);
            ?>

        	<td>
            <?php
            echo "De  5, você respondeu ".$checked_count." perguntas."; ?>
            </td>
        
          	
            <?php
            // Looping para guardar e gerar o checkbox e o resultado.
            $selected = $_POST['quizcheck'];
            
            $q1= " select ans from questions ";
            $ansresults = mysqli_query($con,$q1);
            $i = 1;
            while($rows = mysqli_fetch_array($ansresults)) {
              // print_r($rows);
            	$flag = $rows['ans'] == $selected[$i];
            			if($flag){
            				// echo "Resposta Correta é ".$rows['ans']."<br>";				
            				$counter++;
            				$Resultans++;
            				// echo "Muito Bom! voce acertou ". $counter ." Respostas  <br><br>";
            			}else{
            				$counter++;
            				// echo "Oups! suas ". $counter ." respostas estão incorretas <br><br>";
            			}					
            		$i++;		
            	}
            	?>
            	
    		
    		<tr>
    			<td>
    				Pontuação total
    			</td>
    			<td colspan="2">
	    	<?php 
	            echo " Sua pontuação é ". $Resultans.".";
	            }
	            else{
                echo "<script>alert('Selecione ao menos uma pergunta!');location.href='home.php';</script>";
	            }
	            } 
	          ?>
	          </td>
            </tr>

            <?php 
/*
            $name = $_SESSION['username'];
            $finalresult = " insert into usersession(name,u_q_id, u_a_id) values ('$name','5','$Resultans') ";
            $queryresult= mysqli_query($con,$finalresult); 
            // if($queryresult){
            // 	echo "Sucessooooo";
            // }*/
            ?>


      </table>
         
      <a href="home.php" class="btn btn-success"> JOGAR NOVAMETE </a>      
      	<a href="logout.php" class="btn btn-danger"> SAIR </a>
      </div>
   </body>
</html>












<!-- 

<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

 $con = mysqli_connect('localhost','root');
    if($con){
      echo"connection";
    }
   
    mysqli_select_db($con,'quizdatabases');


    if(isset($_POST['submit'])){

      if(!empty($_POST['quizcheck'])){

        $count = count($_POST['quizcheck']);
          echo "you count is". $count;

          $selected = $_POST['quizcheck'];
          print_r($selected);

          $q = " select * from question ";
          $query = mysqli_query($con,$q);

          $result = 0;
          $i = 1;
          while ( $rows = mysqli_fetch_array($query)) {
            
              print_r($rows['ans_id']);

              $stored  = $rows['ans_id'] == $selected[$i];

              if($stored){

                $result++;

              }

              $i++;

          }

          echo $result;

      }

    }


?> -->