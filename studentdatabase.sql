CREATE DATABASE student_db;

USE student_db;

CREATE TABLE students(
    student_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    phone VARCHAR(15),
    class VARCHAR(20),
    section VARCHAR(10),
    photo VARCHAR(255)
);
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

INSERT INTO admin (username, password)
VALUES ('admin', 'admin123');