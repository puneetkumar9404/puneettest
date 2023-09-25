<?php
require_once 'database.php';

class FormModel {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function insertData($data) {
        $title = $this->conn->real_escape_string($data['name']);
        $instructor = $this->conn->real_escape_string($data['instructor']);
        $description = $this->conn->real_escape_string($data['description']);
	
        $sql = "INSERT INTO courses (title, description, instructor) 
                VALUES ('$title', '$description', '$instructor')";

        return $this->conn->query($sql);
    }

    public function getData() {
        $sql = "SELECT * FROM courses";
        $result = $this->conn->query($sql);

        $formData = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $formData[] = $row;
            }
        }

        return $formData;
    }

    public function closeConnection() {
        $this->conn->close();
    }
}
?>
