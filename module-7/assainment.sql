-- create a new database naeme xyzdb
CREATE DATABASE xyzdb;

-- create employees table
CREATE TABLE employees (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    salary DECIMAL(10, 2) NOT NULL,
    department_id INT NOT NULL
);

-- create departments table
CREATE TABLE departments (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    manager VARCHAR(50) NOT NULL
);

-- select all columns and rows from the employees table.
SELECT * FROM employees

-- select only the name and salary columns of all employees where salary greater than 50000.
SELECT  `name`
       ,`salary`
FROM `employees`
WHERE `salary` > 50000;

-- calculating the average salary of all employees.
SELECT  AVG(salary) AS average_salary
FROM `employees`;

-- count the number of employees work in the "Marketing" department.
SELECT  COUNT(*) Total_Merkating_Employee
FROM `employees`
JOIN `departments`
ON departments.id = employees.department_id
WHERE departments.name = 'Marketing';

-- update the salary column of the employee where id is 1001 and salary will be 60,000.
UPDATE `employees`
SET `salary` = '60000'
WHERE `id` = 1001

-- delete all employees whose salary is less than 30000.
DELETE
FROM `employees`
WHERE `salary` < 30000

-- departments table to answer the following questions to ans 

-- select all columns and rows from the departments table.
SELECT  *
FROM `departments`

-- select only the name and manager columns of the "Finance" department.
SELECT  `name`
       ,`manager`
FROM `departments`
WHERE `name` = 'Finance';

-- calculated the total number of employees in each department.
SELECT  departments.name
       ,COUNT(*) AS total_employees
FROM `departments`
JOIN `employees`
ON departments.id = employees.department_id
GROUP BY  departments.name;

-- inserted a new department called "Research" with a manager named "John Doe".
INSERT INTO `departments`(`name`, `manager`) VALUES('Research', 'John Doe');