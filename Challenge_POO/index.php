<?php

require_once './classes/SchoolStudent.php';

$studentDavid = new SchoolStudent(
    'Bouscarle',
    'David',
    'étudiant',
    ['informatique', 'sciences physiques']
);

function getDisplayAll(SchoolStudent $schoolStudent)
{
    echo $schoolStudent->getTitle().'<br>';
    echo $schoolStudent->getDescription().'<br>';
}

getDisplayAll($studentDavid);