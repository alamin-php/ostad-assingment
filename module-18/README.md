<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
<p align="center"><a href="https://ostad.app/" target="_blank"><img src="https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/ostad-app-logo-vector.png?raw=true" width="200" alt="Ostad Logo"></a></p>
<b><h2 align="center">Assignment of Module-18</h2></b>

### Task 1: 
Create a new migration file to add a new table named "categories" to the database. The table should have the following columns:


id (primary key, auto-increment)


name (string)


created_at (timestamp)


updated_at (timestamp)

### Answer:
![Screenshot#01-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-18/public/images/a-1.1.png?raw=true)

### Task 2:
Create a new model named "Category" associated with the "categories" table. Define the necessary properties and relationships.

### Answer:
![Screenshot#02-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-18/public/images/a-2-1.png?raw=true)
### Task 3:
Write a migration file to add a foreign key constraint to the "posts" table. The foreign key should reference the "categories" table on the "category_id" column.
### Answer:
![Screenshot#03-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-18/public/images/a-3-1.png?raw=true)
### Task 4:
Create a relationship between the "Post" and "Category" models. A post belongs to a category, and a category can have multiple posts.
### Answer:
![Screenshot#04-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-18/public/images/a-4-1.png?raw=true)

![Screenshot#04-2](https://github.com/alamin-php/ostad-assingment/blob/master/module-18/public/images/a-4-2.png?raw=true)
### Task 5:
Write a query using Eloquent ORM to retrieve all posts along with their associated categories. Make sure to eager load the categories to optimize the query.
### Answer:
![Screenshot#05-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-18/public/images/a-5-1.png?raw=true)

### Task 6:
Implement a method in the "Post" model to get the total number of posts belonging to a specific category. The method should accept the category ID as a parameter and return the count.
### Answer:
![Screenshot#06-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-18/public/images/a-6-1.png?raw=true)
### Task 7:
Create a new route in the web.php file to handle the following URL pattern: "/posts/{id}/delete". Implement the corresponding controller method to delete a post by its ID. Soft delete should be used.
### Answer:
![Screenshot#07-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-18/public/images/a-7-1.png?raw=true)

### Task 8:
Implement a method in the "Post" model to get all posts that have been soft deleted. The method should return a collection of soft deleted posts.
### Answer:
![Screenshot#08-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-18/public/images/a-8-1.png?raw=true)

![Screenshot#08-2](https://github.com/alamin-php/ostad-assingment/blob/master/module-18/public/images/a-8-2.png?raw=true)

### Task 9:
Write a Blade template to display all posts and their associated categories. Use a loop to iterate over the posts and display their details.
### Answer:
![Screenshot#09-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-18/public/images/a-9-1.png?raw=true)

![Screenshot#09-2](https://github.com/alamin-php/ostad-assingment/blob/master/module-18/public/images/a-9-2.png?raw=true)
### Task 10:
Create a new route in the web.php file to handle the following URL pattern: "/categories/{id}/posts". Implement the corresponding controller method to retrieve all posts belonging to a specific category. The category ID should be passed as a parameter to the method.
### Answer:
![Screenshot#10-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-18/public/images/a-10-1.png?raw=true)
### Task 11:
Implement a method in the "Category" model to get the latest post associated with the category. The method should return the post object.
### Answer:
![Screenshot#11-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-18/public/images/a-11-1.png?raw=true)
### Task 12:
Write a Blade template to display the latest post for each category. Use a loop to iterate over the categories and display the post details.
### Answer:
![Screenshot#12-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-18/public/images/a-12-1.png?raw=true)

![Screenshot#12-2](https://github.com/alamin-php/ostad-assingment/blob/master/module-18/public/images/a-12-2.png?raw=true)
