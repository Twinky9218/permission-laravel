
1: CROSS joins
SELECT * FROM `employees` CROSS JOIN `department`;

2.inner joins

SELECT employees.`empname`,employees.`mobileno`,department.`deptname` FROM employees,department
WHERE department.`id`=employees.`id`

3.left JOIN

SELECT  department. `deptname` , employees. `empname`,employees. `mobileno` FROM  `department` LEFT JOIN `employees` ON employees .`id`=department.`id`

4.Right JOIN

select employees.`empname`,employees.`mobileno`,department.`deptname` from `employees` Right join `department`   on department.`id`=employees.`id`