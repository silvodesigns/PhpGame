<?php
session_start();

if(isset($_SESSION['word'][1])){
    $word1 = htmlspecialchars($_SESSION['word'][1]);
    trim($word1);
} else if(empty($_SESSION['word'][1])){
    header('location: play.php');
} else {
    header('location: play.php');
}

if(isset($_SESSION['word'][2])){
    $word2 = htmlspecialchars($_SESSION['word'][2]);
    trim($word2);
} else if(empty($_SESSION['word'][2])){
    header('location: play.php?p=2');
} else {
    header('location: play.php?p=2');
}

if(isset($_SESSION['word'][3])){
    $word3 = htmlspecialchars($_SESSION['word'][3]);
    trim($word3);
} else if(empty($_SESSION['word'][3])){
    header('location: play.php?p=3');
} else {
    header('location: play.php?p=3');
}

if(isset($_SESSION['word'][4])){
    $word4 = htmlspecialchars($_SESSION['word'][4]);
    trim($word4);
} else if(empty($_SESSION['word'][4])){
    header('location: play.php?p=4');
} else {
    header('location: play.php?p=4');
}

if(isset($_SESSION['word'][5])){
    $word5 = htmlspecialchars($_SESSION['word'][5]);
    trim($word5);
} else if(empty($_SESSION['word'][5])){
    header('location: play.php?p=5');
} else {
    header('location: play.php?p=5');
}




include 'inc/header.php';

echo '<h1>My Treehouse Story</h1>';

echo '<p>There once was a(n) ' . $word1;
echo ' programmer named ' . $word2; 
echo '. </p>';
echo '<p>This ' .  $word3; 
echo ' programmer used Treehouse to learn to ' . $word4;
echo ' the ' . $word5 . '.</p>';

echo ' <a class="btn btn-default btn-lg" href="#" role="button">Save Story</a>';
echo ' <a class="btn btn-default btn-lg" href="play.php" role="button">Play Again</a>';
echo ' <a class="btn btn-default btn-lg" href="index.php" role="button">Other Stories</a>';


include 'inc/footer.php';