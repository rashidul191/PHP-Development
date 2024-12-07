-- UPPER & LOWER Function
-- UPPER()
SELECT UPPER(column_name) FROM table_name;

SELECT UPPER(City) FROM student_details;

-- LOWER()
SELECT LOWER(column_name) FROM table_name;

SELECT LOWER(City) FROM student_details;
-- CONCAT()
SELECT CONCAT(Name, " is ", Age, " Old") FROM student_details;
-- COUNT()
SELECT COUNT(*) FROM teacher;
-- MAX()
SELECT MAX(GPA) FROM student_details;
-- MIN()
SELECT MIN(GPA) FROM student_details;

-- SUM() & AVG()
SELECT SUM(Salary), AVG(Salary) FROM teacher;