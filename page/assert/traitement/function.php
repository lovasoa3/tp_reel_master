<?php
function selectDepartement($db){
    $sql=sprintf("SELECT departments.*,employees.first_name,employees.last_name FROM `departments`
        JOIN dept_emp
        ON dept_emp.dept_no=departments.dept_no
        JOIN dept_manager
        ON dept_manager.emp_no=dept_emp.emp_no
        JOIN employees
        on employees.emp_no=dept_manager.emp_no");
return $statement=mysqli_query($db,$sql);
}
?>
