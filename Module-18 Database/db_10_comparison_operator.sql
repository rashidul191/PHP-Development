-- Comparison Operator

-- BETWEEN
SELECT Roll, Name, Gpa FROM student_details WHERE `Roll` BETWEEN 102 AND 105;
SELECT Roll, Name, Gpa FROM student_details WHERE `Roll` != 102;


SELECT Name, City, Gender FROM student_details WHERE Age > 15;
SELECT Name, City, Gender FROM student_details WHERE Age < 15;
SELECT Name, City, Gender FROM student_details WHERE Age =< 15;
SELECT Name, City, Gender FROM student_details WHERE Age >= 15;