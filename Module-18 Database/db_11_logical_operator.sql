-- Logical Operator

-- AND
SELECT *
FROM `student_details`
WHERE
    Gender = "Male"
    AND City = "Dhaka";

SELECT * FROM `student_details` WHERE Gender = "Male" AND Age >= 15;

-- OR
SELECT *
FROM `student_details`
WHERE
    Gender = "Male"
    OR City = "Dhaka";

-- IN

-- NOT

-- LIKE
