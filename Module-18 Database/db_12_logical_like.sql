-- LIKE
-- match with first letter
SELECT * FROM `student_details` WHERE Name LIKE "R%";
-- match with last letter
SELECT * FROM `student_details` WHERE Name LIKE "%R";
-- match with meddle letter
SELECT * FROM `student_details` WHERE Name LIKE "%sh%";
-- match with second letter
SELECT * FROM `student_details` WHERE Name LIKE "_s%";
-- match with 3th letter
SELECT * FROM `student_details` WHERE Name LIKE "__s%";

-- match with last second letter
SELECT * FROM `student_details` WHERE Name LIKE "%s_";
-- match with last 3th letter
SELECT * FROM `student_details` WHERE Name LIKE "%s__";