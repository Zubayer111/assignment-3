<?php
$studentGrades = array(
    'Student1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student3' => array('Math' => 75, 'English' => 85, 'Science' => 80)
);

function calculateAverageGrades($studentGrades)
{
    foreach($studentGrades as $student=>$grades)
    {
        $total = array_sum($grades);
        $average = $total / count($grades);
        echo "Student {$student} average grade: {$average}\n";
    }
}

calculateAverageGrades($studentGrades);