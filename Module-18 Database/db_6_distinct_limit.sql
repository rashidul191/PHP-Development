-- Duplicate Data Remove using DISTINCT

SELECT DISTINCT column_name FROM table_name;
SELECT DISTINCT City FROM student_details;

-- Data Limit

SELECT * FROM table_name LIMIT 4; -- only 4 data show
SELECT column_name FROM table_name LIMIT 4; -- only 4 data show column data
SELECT column_name FROM table_name LIMIT 2, 6; -- 2 to 6 data show