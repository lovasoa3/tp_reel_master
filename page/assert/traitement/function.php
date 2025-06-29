<?php
function selectDepartement($db){
    $sql=sprintf("SELECT departments.*,employees.first_name,employees.last_name FROM `departments`
        JOIN dept_manager
        ON dept_manager.dept_no=departments.dept_no
        JOIN employees
        on employees.emp_no=dept_manager.emp_no order by dept_no desc");
return $statement=mysqli_query($db,$sql);
}
?>
