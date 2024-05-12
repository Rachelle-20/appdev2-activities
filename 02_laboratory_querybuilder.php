<?php

// Task#1
# SQL Syntax
SELECT * FROM students;

// Your query builder syntax
DB::table('students')->get();

// Task#2
# SQL Syntax
SELECT * FROM students WHERE grade = '10';

// Your query builder syntax
DB::table('students')->where('grade', '10')->get();

// Task#3
# SQL Syntax
SELECT * FROM students WHERE age BETWEEN 15 AND 18;

// Your query builder syntax
DB::table('students')->whereBetween('age', [15, 18])->get();

// Task#4
# SQL Syntax
SELECT * FROM students WHERE city = 'Manila';

// Your query builder syntax
DB::table('students')->where('city', 'Manila')->get();

// Task#5
# SQL Syntax
SELECT * FROM students ORDER BY age DESC;

// Your query builder syntax
DB::table('students')->orderBy('age', 'desc')->get();

// Task#6
# SQL Syntax
SELECT students.*, teachers.name AS teacher_name 
FROM students 
LEFT JOIN teachers ON students.teacher_id = teachers.id;

// Your query builder syntax
DB::table('students')
    ->leftJoin('teachers', 'students.teacher_id', '=', 'teachers.id')
    ->select('students.*', 'teachers.name as teacher_name')
    ->get();

// Task#7
# SQL Syntax
SELECT teachers.*, COUNT(students.id) AS student_count 
FROM teachers 
LEFT JOIN students ON teachers.id = students.teacher_id 
GROUP BY teachers.id;

// Your query builder syntax
DB::table('teachers')
    ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
    ->select('teachers.*', DB::raw('COUNT(students.id) as student_count'))
    ->groupBy('teachers.id')
    ->get();

// Task#8
# SQL Syntax
SELECT students.*, subjects.name AS subject_name 
FROM students 
INNER JOIN subjects ON students.subject_id = subjects.id;

// Your query builder syntax
DB::table('students')
    ->join('subjects', 'students.subject_id', '=', 'subjects.id')
    ->select('students.*', 'subjects.name as subject_name')
    ->get();

// Task#9
# SQL Syntax
SELECT students.*, AVG(scores.score) AS average_score 
FROM students 
LEFT JOIN scores ON students.id = scores.student_id 
GROUP BY students.id;

// Your query builder syntax
DB::table('students')
    ->leftJoin('scores', 'students.id', '=', 'scores.student_id')
    ->select('students.*', DB::raw('AVG(scores.score) as average_score'))
    ->groupBy('students.id')
    ->get();

// Task#10
# SQL Syntax
SELECT teachers.*, COUNT(students.id) AS student_count 
FROM teachers 
LEFT JOIN students ON teachers.id = students.teacher_id 
GROUP BY teachers.id 
ORDER BY student_count DESC 
LIMIT 5;

// Your query builder syntax
DB::table('teachers')
    ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
    ->select('teachers.*', DB::raw('COUNT(students.id) as student_count'))
    ->groupBy('teachers.id')
    ->orderBy('student_count', 'desc')
    ->limit(5)
    ->get();

?>
