-- Joining Tables

SELECT
    column_name1,
    column_name2,
    column_name3,
    column_name4
FROM table_name, other_table_name
INNER JOIN table_name.Roll = other_table_name.Roll;


SELECT 
    student2_details.Roll, 
    Reg_Number, 
    Name, 
    Gender, 
    GPA
FROM student2_details
INNER JOIN exam_result 
    ON student2_details.Roll = exam_result.Roll;