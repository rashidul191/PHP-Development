-- Sub Query
SELECT *
FROM teacher
WHERE
    Salary > (
        SELECT AVG(Salary)
        FROM teacher
    );