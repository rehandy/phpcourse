<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  	<br/>
  	<center>
	    <h1>
	    	<?php
				/* 
          print out to the screen
  				echo "Hello World!";

  				$firstName = "Rehan";
  				$favoriteNumber = 26;

  				echo $firstName;
        */

        /* 
          Math operators
          + - * / % **

          $num_1 = 41;
          $num_2 = 4;

          echo $num_1 % $num_2;

            Increment and decrement 
                ++ --
          $num_1 = 40;

          echo $num_1;
        */

        /*
          Concatenation
          $first_name = "Rehan";
          $last_name = "Khan";

          echo $first_name . " " . $last_name;
        */

        /*
          Comaprison Operator
          == Equal to
          != Not Equal to
          >= Greater than or equal to
          <= Less than or equal to
          <  Less than
          >  Greater than

          $num1 = 41;
          $num2 = 4;

          var_dump($num1 == $num2);
        */

        /*
          Escape Character
          echo "And then she said: \"you're ugly\""; double quotes
          echo 'And then she said: "you\'re ugly"';  single quotes

          \ => ignores quation mark

        */

          /*
            if else Statements
            $first_name = "Rehan";

            if(somethign is true){
              do something
            } else {
              do something
            }

            if($first_name == "Rehan"){
              echo "Hello " . $first_name . " how are you";
            } else {
              echo "Your not" . $first_name . ", who are you?";
            }
          */

            /*
              else if statement

              if(something is true){
                do something
              } else if(somethign else is true){
                do something
              } else {
                do something
              }

              $num1 = 23;
              $num2 = 10;

              if($num1 > 10){
                echo $num1 . " is greater than 10";
              } else if($num2 == 5){
                echo $num2 . " is equal to 5";
              } else {
                echo $num1 . " is less than 10";
              }
            */

            /*
              Numeric Arrays // can hold different data types
        
              $first_names = array("Rehan", "John", "Steve");

              echo $first_names[0];
            */

            /*
              Associative Arrays

              Key | Value pair

              $fav_pizza = array(
                  "Rehan" => "Plain Cheese",
                  "John" => "Pepporoni",
                  "Mary" => "Mushroom"
                );

                echo $fave_pizza["Rehan"];
            */

          /*

            Array Count
            
              $names = array("Rehan", "John", "Steve");
                    count of elements in array
              echo $names[count($names) - 1];
          */

          /*
            While Loop
        
            while(condition is true){
              do something
            }
            
            $counter = 0;

            while(counter < 10){
              echo "Count is: $counter <br/>";
              count++;
            }

          */

          /*
            For Loop
            
            for($int i = 0; $i <= 10; $i++){
              ech "Count is $i <br/>";
            }
          */

          /*
            For Each Loop

            $names = array("Rehan", "John", "Steve");

            foreach ($names as $value){
                echo "$value <br/>";
            }
          */

          /*
            Functions

            function helloThere(){
              echo "Hello There";
            } 

            helloThere();

            function helloThere($name, $age){
                echo "hello ther " . $name . ", you are $age year\'s old;
            }
            
            helloThere("Rehan", 23)


            funtion addNums($num1, $num2){
                return $num1 + $num2;
            }

            $ans = addNums(41, 23);
            echo $ans * 1.1;
          */

          /*
            // random function
            // echo rand(0, 100); // bad algorithm associated
            // echo mt_rand(0, 10); // better random func

            $names = arr("John", "Steve", "Marry");
            $rando = mt_rand(0, 2);
            echo $names[rando];
            
          */

          /*
              // Date function
              echo date('Y');
              echo date('l js \of F, Y');

              l = 
              Y = full year
              y = last two numbers of the year
              F = textual representation of a Month
          */

          /*
            String Manipulation

            $stuff = "John elder is php coding master";

            echo str_replace("master", "dork", $stuff);

            echo strtoupper($stuff);
            echo ucwords($stuff); // upercase the first letter of each word
            echo ucfirst($stuff) // upercase the first letter of the string

            echo strtolower($stuff);
            echo lcfirst($stuff);

            echo strlen($stuff) // string length
            echo strshuffle($stuff); // shuffles the strin
  
          */

            /*
                Include function:
                
                // insert the bottom at the top of the code base
                <?php include(variable.php);?>

                echo "Copyright (c)" . $company_name . date("Y") . " - All Rigths reserved";
            */

			?>
	    </h1>
	</center>
  <br/>
  <h1>
      



  </h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

