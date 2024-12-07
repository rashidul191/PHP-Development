-- Group By Clause
SELECT column_name FROM table_name GROUP BY column_name;

SELECT Department, SUM(Salary) FROM teacher GROUP BY Department;
SELECT Department, SUM(Salary) FROM teacher
 GROUP BY Department
 ORDER BY sum(Salary) DESC;