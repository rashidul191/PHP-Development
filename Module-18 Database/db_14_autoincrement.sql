-- Not Null Auto Increment
CREATE TABLE teacher( 

    ID int NOT NULL AUTO_INCREMENT, -- here don't get a id then here auto AUTO_INCREMENT of ID.
    Name varchar(15) NOT NULL,
    Salary double(10, 2), 
    PRIMARY KEY (ID)
);