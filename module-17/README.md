<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
<p align="center"><a href="https://ostad.app/" target="_blank"><img src="https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/ostad-app-logo-vector.png?raw=true" width="200" alt="Ostad Logo"></a></p>
<h3 align="center">Assignment of Module-17</h3>

### Task 1: 
Explain what Laravel's query builder is and how it provides a simple and elegant way to interact with databases.

### Answer:

Laravel's query builder is a feature of the Laravel PHP framework that provides a simple and elegant way to interact with databases. It allows you to build and execute database queries using a fluent, chainable interface, making it easier to retrieve and manipulate data from your database.

The query builder abstracts the underlying database engine, allowing you to write database-agnostic code. It supports various database systems such as MySQL, PostgreSQL, SQLite, and SQL Server. This means you can write the same code to interact with different databases without needing to worry about the differences in syntax or query structure.

### Task 2:
Write the code to retrieve the "excerpt" and "description" columns from the "posts" table using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.

### Answer:
![Screenshot#02-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-17/public/images/a-2-1.PNG?raw=true)
### Task 3:
Describe the purpose of the distinct() method in Laravel's query builder. How is it used in conjunction with the select() method?
### Answer:
The distinct() method in Laravel's query builder is used to retrieve only the unique rows from a result set. It ensures that duplicate rows are eliminated, and only distinct rows are returned in the query results.
When used in conjunction with the select() method, the distinct() method affects the columns specified in the select() method. It modifies the query to consider only distinct values for those columns when retrieving data.
Here's an example to illustrate how distinct() and select() work together:

![Screenshot#03-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-17/public/images/a-3-1.PNG?raw=true)
### Task 4:
Write the code to retrieve the first record from the "posts" table where the "id" is 2 using Laravel's query builder. Store the result in the $posts variable. Print the "description" column of the $posts variable.
### Answer:
![Screenshot#04-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-17/public/images/a-4-1.PNG?raw=true)

### Task 5:
Write the code to retrieve the "description" column from the "posts" table where the "id" is 2 using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.

### Answer:
![Screenshot#05-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-17/public/images/a-5-1.PNG?raw=true)

### Task 6:
Explain the difference between the first() and find() methods in Laravel's query builder. How are they used to retrieve single records?
### Answer:
first(): The first() method is used to retrieve the first record that matches the query conditions from a table. It returns a single object representing the record or null if no matching record is found. It is typically used when you want to retrieve the first record based on certain conditions, such as ordering or filtering.

![Screenshot#06-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-17/public/images/a-6-1.PNG?raw=true)

find(): The find() method is used to retrieve a record by its primary key value. It expects the primary key value as an argument and returns the corresponding record if found, or null if no record is found. It is typically used when you know the primary key value and want to directly fetch the record by that value.

![Screenshot#06-2](https://github.com/alamin-php/ostad-assingment/blob/master/module-17/public/images/a-6-2.PNG?raw=true)
### Task 7:
Write the code to retrieve the "title" column from the "posts" table using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.
### Answer:
![Screenshot#07-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-17/public/images/a-7-1.PNG?raw=true)

### Task 8:
Write the code to insert a new record into the "posts" table using Laravel's query builder. Set the "title" and "slug" columns to 'X', and the "excerpt" and "description" columns to 'excerpt' and 'description', respectively. Set the "is_published" column to true and the "min_to_read" column to 2. Print the result of the insert operation.
### Answer:
![Screenshot#08-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-17/public/images/a-8-1.PNG?raw=true)

### Task 9:
Write the code to update the "excerpt" and "description" columns of the record with the "id" of 2 in the "posts" table using Laravel's query builder. Set the new values to 'Laravel 10'. Print the number of affected rows.
### Answer:
![Screenshot#09-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-17/public/images/a-9-1.PNG?raw=true)
### Task 10:
Write the code to delete the record with the "id" of 3 from the "posts" table using Laravel's query builder. Print the number of affected rows.
### Answer:
![Screenshot#10-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-17/public/images/a-10-1.PNG?raw=true)
### Task 11:
Explain the purpose and usage of the aggregate methods count(), sum(), avg(), max(), and min() in Laravel's query builder. Provide an example of each.
### Answer:
The aggregate methods in Laravel's query builder (count(), sum(), avg(), max(), and min()) are used to perform calculations on a column or set of columns in a database table. These methods allow you to retrieve statistical information or perform aggregate operations on your data.

1. count(): The count() method is used to retrieve the number of records in a table or the number of occurrences of a specific column value.

2. sum(): The sum() method is used to calculate the sum of the values in a column.

3. avg(): The avg() method is used to calculate the average value of a column.

4. max(): The max() method is used to retrieve the maximum value from a column.

5. min(): The min() method is used to retrieve the minimum value from a column.
### Task 12:
Describe how the whereNot() method is used in Laravel's query builder. Provide an example of its usage.
### Answer:
![Screenshot#12-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-17/public/images/a-12-1.PNG?raw=true)
### Task 13:
Explain the difference between the exists() and doesntExist() methods in Laravel's query builder. How are they used to check the existence of records?
### Answer:
![Screenshot#13-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-17/public/images/a-13-1.PNG?raw=true)
### Task 14:
Write the code to retrieve records from the "posts" table where the "min_to_read" column is between 1 and 5 using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.
### Answer:
![Screenshot#14-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-17/public/images/a-14-1.PNG?raw=true)
### Task 15:
Write the code to increment the "min_to_read" column value of the record with the "id" of 3 in the "posts" table by 1 using Laravel's query builder. Print the number of affected rows.
### Answer:
![Screenshot#08-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-17/public/images/a-15-1.PNG?raw=true)
