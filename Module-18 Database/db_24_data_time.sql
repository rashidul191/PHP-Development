-- Current Data();
SELECT CURRENT_DATE();

-- Current Time();
SELECT CURRENT_TIME();

-- New() -- Date with Time
SELECT NOW();

-- ADD Date
SELECT ADDDATE("2017-9-25", INTERVAL 5 DAY);
-- ADD Month
SELECT ADDDATE("2017-9-25", INTERVAL 5 MONTH);

-- SUBDATE
SELECT SUBDATE("2017-9-25", INTERVAL 5 DAY);