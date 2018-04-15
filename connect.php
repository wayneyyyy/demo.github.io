

<?php


//Connecting to sql db.
/*$connect = mysqli_connect('104.236.193.66','root','3b1c319e4423c9ad2afeefcccc17750e54666c016e7058d8','Student_info');
if(!$connect) {
    echo 'Not connected to server!';
}
//Sending form data to sql db.
$sql = "INSERT INTO Challenging_questions (age, UID, birth_year, birth_month, maiden, grandpa, elementary_name, middle_school_name,eye_color, hair_color) VALUES ('$_POST[age]', '$_POST[UID]', '$_POST[year]', '$_POST[month]', '$_POST[city]', '$_POST[maiden]','$_POST[grandpa]','$_POST[elementary]','$_POST[mieddle]','$_POST[eye]','$_POST[hair]')";
if(!mysqli_query($connect,$sql)) {
    echo 'Data not inserted';
} else {
    echo 'Data inserted';
}*/
echo 'success';


/*
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "Challenging_questions"

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//insert something
$sql ="INSERT INTO Challenging_questions(age,birth_year, birth_month, maiden, grandpa, elementary_name, middle_school_name,
                                    eye_color, hair_color) values ('ss')";

*/
?>
