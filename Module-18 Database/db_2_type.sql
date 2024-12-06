1. Numeric Data Types
CREATE TABLE students (
    id INT,
    age INT
);
DECIMAL(p, d): For exact decimal numbers, p is precision (total digits), and d is the number of digits after the decimal.
CREATE TABLE products (
    price DECIMAL(10, 2) -- 10 total digits, 2 after decimal
);
FLOAT: For floating-point numbers.
CREATE TABLE sensors (
    temperature FLOAT
);
2. String Data Types
VARCHAR(n): For variable-length strings, where n is the max length.
CREATE TABLE users (
    name VARCHAR(50) -- Max 50 characters
);
TEXT: For long text data.
CREATE TABLE posts (
    content TEXT
);
CHAR(n): For fixed-length strings.
CREATE TABLE codes (
    code CHAR(5) -- Always 5 characters
);
3. Date and Time Data Types
DATE: For date values (YYYY-MM-DD).
CREATE TABLE events (
    event_date DATE
);
DATETIME: For date and time (YYYY-MM-DD HH:MM:SS).
CREATE TABLE logs (
    created_at DATETIME
);
TIME: For time values (HH:MM:SS).
CREATE TABLE schedules (
    start_time TIME
);
4. Boolean Data Type
TINYINT(1): MySQL uses TINYINT for boolean values (0 = false, 1 = true).
CREATE TABLE flags (
    is_active TINYINT(1)
);
5. Other Data Types
ENUM: For predefined list of values.
CREATE TABLE orders (
    status ENUM('pending', 'completed', 'canceled')
);
BLOB: For binary large objects like images or files.
CREATE TABLE files (
    file_data BLOB
);