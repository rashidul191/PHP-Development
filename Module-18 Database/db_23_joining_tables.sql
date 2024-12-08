-- Joining Tables
-- Join
SELECT table_name.column_name1, table_name.column_name2, table_name.column_name3, table_name.column_name4
FROM
    table_name,
    other_table_name
    JOIN table_name.Roll = other_table_name.Roll;

SELECT student2_details.Roll, Reg_Number, Name, Gender, GPA
FROM
    student2_details
    JOIN exam_result ON student2_details.Roll = exam_result.Roll;
-- Inner Join
SELECT table_name.column_name1, table_name.column_name2, table_name.column_name3, table_name.column_name4
FROM
    table_name,
    other_table_name
    INNER JOIN table_name.Roll = other_table_name.Roll;

SELECT student2_details.Roll, Reg_Number, Name, Gender, GPA
FROM
    student2_details
    INNER JOIN exam_result ON student2_details.Roll = exam_result.Roll;