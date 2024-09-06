<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require_once $path . "/CreateTables/Database.php";
$dbo = new Database();

//First, make your database at phpMyAdmin and name it "CAS_db" so that we both have the same database and we can access it.

$sql = "CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL, 
    role ENUM('Student', 'Faculty') NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);";

try {
    $dbo->conn->exec($sql);
    echo "Table users created succesfully<br>";
}catch (PDOException $e) {
    echo "Eror creating the table: ". $e->$getMessage()."<br>";
}

$sql = "CREATE TABLE IF NOT EXISTS student (
    student_id INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    course VARCHAR(50) NOT NULL,  
    year TINYINT CHECK(year BETWEEN 1 AND 4),  -- 1st Year to 4th Year
    semester VARCHAR(20) CHECK(semester IN ('1st Semester', '2nd Semester')),
    clearance_status VARCHAR(10) CHECK(clearance_status IN ('Pending', 'Cleared')),
    FOREIGN KEY (student_id) REFERENCES users(user_id) ON DELETE CASCADE);";

try {
    $dbo->conn->exec($sql);
    echo "Table student created succesfully<br>";
}catch (PDOException $e) {
    echo "Eror creating the table: ". $e->$getMessage()."<br>";
}

$sql= "CREATE TABLE IF NOT EXISTS faculty (
    faculty_id INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    department VARCHAR(50) DEFAULT 'CCS',
    role VARCHAR(50) CHECK(role IN ('Clearance Officer','Professor')),
    FOREIGN KEY (faculty_id) REFERENCES users(user_id) ON DELETE CASCADE);";

try {
    $dbo->conn->exec($sql);
    echo "Table faculty created succesfully<br>";
}catch (PDOException $e) {
    echo "Eror creating the table: ". $e->$getMessage()."<br>";
}

$sql= "CREATE TABLE IF NOT EXISTS attendance (
    attendance_id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    faculty_id INT NOT NULL,
    date DATE NOT NULL,
    status VARCHAR(10) CHECK(status IN ('Present', 'Absent')),
    semester VARCHAR(20) CHECK(semester IN ('1st Semester', '2nd Semester')),
    year_level TINYINT CHECK(year_level BETWEEN 1 AND 4),  -- 1st Year to 4th Year
    FOREIGN KEY (student_id) REFERENCES student(student_id) ON DELETE CASCADE,
    FOREIGN KEY (faculty_id) REFERENCES faculty(faculty_id) ON DELETE CASCADE
);";

try { 
    $dbo->conn->exec($sql);
    echo "Table attendance created succesfully<br>";
}catch (PDOException $e) {
    echo "Eror creating the table: ". $e->getMessage()."<br>";
}

$sql= "CREATE TABLE IF NOT EXISTS clearance (
    clearance_id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    faculty_id INT NOT NULL,
    clearance_type VARCHAR(100) NOT NULL,  -- e.g., Library
    status VARCHAR(10) CHECK(status IN ('Pending', 'Cleared')),
    due_date DATE,
    semester VARCHAR(20) CHECK(semester IN ('1st Semester', '2nd Semester')),
    year_level TINYINT CHECK(year_level BETWEEN 1 AND 4),  -- 1st Year to 4th Year
    FOREIGN KEY (student_id) REFERENCES student(student_id) ON DELETE CASCADE,
    FOREIGN KEY (faculty_id) REFERENCES faculty(faculty_id) ON DELETE CASCADE
);";

try {
    $dbo->conn->exec($sql);
    echo "Table clearance created succesfully<br>";
}catch(PDOException $e) {
    echo "Error creating table: ", $getMessage(). "<br>";
}

$sql= "CREATE TABLE IF NOT EXISTS course (
    course_id INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(100) NOT NULL UNIQUE,  -- e.g., BSCS, BSIT
    faculty_id INT NOT NULL,
    FOREIGN KEY (faculty_id) REFERENCES faculty(faculty_id) ON DELETE CASCADE
);";

try {
    $dbo->conn->exec($sql);
    echo "Table course created succesfully<br>";
}catch(PDOException $e) {
    echo "Error creating table: ", $getMessage(). "<br>";
}

$sql = "CREATE TABLE IF NOT EXISTS semester (
    semester_id INT AUTO_INCREMENT PRIMARY KEY,
    semester_name VARCHAR(20) NOT NULL UNIQUE,  -- e.g., 1st Semester, 2nd Semester
    year_level TINYINT CHECK(year_level BETWEEN 1 AND 4)  -- 1st Year to 4th Year
);";

try {
    $dbo->conn->exec($sql);
    echo "Table semester created succesfully<br>";
}catch(PDOException $e) {
    echo "Error creating table: ", $getMessage(). "<br>";
}
?>


