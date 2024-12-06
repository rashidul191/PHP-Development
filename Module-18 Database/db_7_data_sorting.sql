-- Data Sorting with Ordering
-- Ascending Order
SELECT column_name, column_name
FROM `table_name`
ORDER BY sorting_column_name;

SELECT column_name, column_name
FROM `table_name`
ORDER BY sorting_column_name ASC;

SELECT Name, Age FROM `student_details` ORDER BY Name;

SELECT Name, Age FROM `student_details` ORDER BY Name ASC;
-- Multiple Sorting Ascending Order
SELECT column_name, column_name
FROM `table_name`
ORDER BY
    sorting_column_name,
    sorting_column_name;

SELECT Name, Age FROM `student_details` ORDER BY Name, Roll;

-- Descending Order

SELECT column_name, column_name
FROM `table_name`
ORDER BY sorting_column_name DESC;

SELECT Name, Age FROM `student_details` ORDER BY Name DESC;

-- Multiple Sorting Descending Order
SELECT column_name, column_name
FROM `table_name`
ORDER BY
    sorting_column_name,
    sorting_column_name DESC;

SELECT Name, Age FROM `student_details` ORDER BY Name, Roll DESC;