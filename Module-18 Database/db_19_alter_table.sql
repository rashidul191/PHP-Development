-- ALTER TABLE
-- Column Add of Table
ALTER TABLE table_name ADD column_name datatype (size);

ALTER TABLE teacher ADD Age int(5);

-- Column Rename From Table
ALTER TABLE table_name
CHANGE old_column_name new_column_name dataType (size);

ALTER TABLE teacher CHANGE Dept Department varchar(50);

-- Column Delete From Table
ALTER TABLE table_name DROP COLUMN column_name;
ALTER TABLE teacher DROP COLUMN Age;