<?php

/**
 * AttendanceRecordTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class AttendanceRecordTable extends PluginAttendanceRecordTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object AttendanceRecordTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('AttendanceRecord');
    }
}
$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "1ccb8097d0e9ce9f154608be60224c7c";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$db);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	//echo "Connected successfully";
	if(isset($_POST["submit"])){
		$number = $_POST['number'];
		//I'm the best web developer.
		//number is too dangerous. I have to do something.
		if(strchr($number,"'")){
			echo "What are you trying to do?<br>";
			echo "Awesome hacking skillzz<br>";
			echo "But you can't hack me anymore!";
			exit;
		}

		$query = "SELECT bookname,authorname FROM books WHERE number = $number"; 
		$result = mysqli_query($conn,$query);

		if (!$result) { //Check result
		    $message  = 'Invalid query: ' . mysql_error() . "\n";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}

		while ($row = mysqli_fetch_assoc($result)) {
			echo "<hr>";
		    echo $row['bookname']." ----> ".$row['authorname'];    
		}

		if(mysqli_num_rows($result) <= 0)
			echo "0 result";

	}
