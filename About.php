<?php    //Create array of skills
    $mySkills = ['HTML', 'JavaScript', 'PHP', 'CSS', 'MySQL'];
    $anotherArray = ['1'];
    $anotheranotherArray = [1, 2, 3];
    function skillList ($skillsArray){ 
        echo '<ul>'; 
        foreach($skillsArray as $value){
        echo '<li>' . $value . '</li>';
       }
       echo '</ul>';
   }
   skillList($mySkills);
