<?php

// wrong way.
class Student
{
    function checkAttendance() {}
    function calculateGrade() {}
    function collectFee() {}
}

// batter way.
class StudentAttendance
{
    function checkAttendance() {}
}
class StudentCalculateGrade
{
    function calculateGrade() {}
}
class StudentPayment
{
    function collectFee() {}
}
