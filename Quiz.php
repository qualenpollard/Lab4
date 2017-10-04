<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $answer_counter = 0;

    $question1_val = "1";
    $question2_val = "2";
    $question3_val = "3";
    $question4_val = "4";
    $question5_val = "5";

    //Get the values from the radio buttons.
    if(isset($_POST['submit'])){
        if(isset($_POST['Q1'])){
            $question1_val = $_POST['Q1'];
        }
        if(isset($_POST['Q2'])){
            $question2_val = $_POST['Q2'];
        }
        if(isset($_POST['Q3'])){
            $question3_val = $_POST['Q3'];
        }
        if(isset($_POST['Q4'])){
            $question4_val = $_POST['Q4'];
        }
        if(isset($_POST['Q5'])){
            $question5_val = $_POST['Q5'];
        }
    }

    //Check to see which one the user got right.
    if($question1_val == "Sputnik"){
        $answer_counter++;
    }
    if($question2_val == "Quentin Tarantino"){
        $answer_counter++;
    }
    if($question3_val == "91"){
        $answer_counter++;
    }
    if($question4_val == "Mark Zuckerberg"){
        $answer_counter++;
    }
    if($question5_val == "13.772 billion years"){
        $answer_counter++;
    }

    $percent = ($answer_counter / 5) * 100;

    //Print the results of the quiz.
    echo "You got " .$answer_counter. "/5 correct.<br>";
    echo "That's " .$percent. "%!<br><br>";

    echo "Question 1: What's anniversary is October 4, 2017?<br>";
    echo "You answered: " .$question1_val. "<br>";
    echo "Correct answer: Sputnik<br><br>";

    echo "Question 2: Who directed the movie Django?<br>";
    echo "You answered: " .$question2_val. "<br>";
    echo "Correct answer: Quentin Tarantino<br><br>";

    echo "Question 3: How many books has Stephen King written?<br>";
    echo "You answered: " .$question3_val. "<br>";
    echo "Correct answer: 91<br><br>";

    echo "Question 4: Who invented Facebook?<br>";
    echo "You answered: " .$question4_val. "<br>";
    echo "Correct answer: Mark Zuckerberg<br><br>";

    echo "Question 5: How old is the universe?<br>";
    echo "You answered: " .$question5_val. "<br>";
    echo "Correct answer: 13.772 billion years<br><br>";

 ?>
