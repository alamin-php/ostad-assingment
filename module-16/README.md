<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
<p align="center"><a href="https://ostad.app/" target="_blank"><img src="https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/ostad-app-logo-vector.png?raw=true" width="200" alt="Ostad Logo"></a></p>
<h3 align="center">Assignment of Module-16</h3>

### Task 1: 
Create a new Laravel project named "MigrationAssignment" using the Laravel command-line interface.

### Answer:

![Screenshot#01](https://github.com/alamin-php/ostad-assingment/blob/master/module-16/public/images/a-1-1.png?raw=true)

### Task 2:
Within the project, create a new migration file named "create_products_table" that will be responsible for creating a table called "products" in the database. The "products" table should have the following columns:


id: an auto-incrementing integer and primary key.

name: a string column to store the product name.

price: a decimal column to store the product price.

description: a text column to store the product description.

created_at: a timestamp column to store the creation date and time.

updated_at: a timestamp column to store the last update date and time.

### Answer:
![Screenshot#02-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-16/public/images/a-2-1.png?raw=true)
### Task 3:
After creating the migration file, run the migration to create the "products" table in the database.
### Answer:
![Screenshot#03-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-16/public/images/a-3-1.png?raw=true)
### Task 4:
Modify the existing migration file "create_products_table" to add a new column called "quantity" to the "products" table. The "quantity" column should be an integer column and allow null values.
### Answer:
![Screenshot#04-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-16/public/images/a-4-1.png?raw=true)
![Screenshot#04-2](https://github.com/alamin-php/ostad-assingment/blob/master/module-16/public/images/a-4-2.png?raw=true)

### Task 5:
Create a new migration file named "add_category_to_products_table" that will be responsible for adding a new column called "category" to the "products" table. The "category" column should be a string column with a maximum length of 50 characters.

### Answer:
![Screenshot#05-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-16/public/images/5-1-1.png?raw=true)

### Task 6:
After creating the new migration file, run the migration to add the "category" column to the "products" table.
### Answer:
![Screenshot#06-1](https://raw.githubusercontent.com/alamin-php/ostad-assingment/master/module-15/public/images/a-6-1.png)

### Task 7:
Create a new migration file named "create_orders_table" that will be responsible for creating a table called "orders" in the database. The "orders" table should have the following columns:

id: an auto-incrementing integer and primary key.

product_id: an unsigned integer column to establish a foreign key relationship with the "id" column of the "products" table.

quantity: an integer column to store the quantity of products ordered.

created_at: a timestamp column to store the creation date and time.

updated_at: a timestamp column to store the last update date and time.
### Answer:
![Screenshot#07-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-16/public/images/7-1-1.png?raw=true)

### Task 8:
After creating the migration file for the "orders" table, run the migration to create the "orders" table in the database.
### Answer:
![Screenshot#08-1](https://raw.githubusercontent.com/alamin-php/ostad-assingment/master/module-15/public/images/a-8-1.png)

![Screenshot#08-2](https://raw.githubusercontent.com/alamin-php/ostad-assingment/master/module-15/public/images/a-8-2.png)
