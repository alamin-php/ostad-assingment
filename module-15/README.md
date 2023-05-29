<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
<p align="center"><a href="https://ostad.app/" target="_blank"><img src="https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/ostad-app-logo-vector.png?raw=true" width="200" alt="Ostad Logo"></a></p>
<h3 align="center">Assignment of Module-15</h3>

### Task 1: Request Validation
Implement request validation for a registration form that contains the following fields: name, email, and password. Validate the following rules:

name: required, string, minimum length 2.
email: required, valid email format.
password: required, string, minimum length 8.
### Answer:

![Screenshot#01](https://raw.githubusercontent.com/alamin-php/ostad-assingment/master/module-15/public/images/a-1-1.png)

![Screenshot#02](https://raw.githubusercontent.com/alamin-php/ostad-assingment/master/module-15/public/images/a-1-2.png)

![Screenshot#03](https://raw.githubusercontent.com/alamin-php/ostad-assingment/master/module-15/public/images/a-1-3.png)

![Screenshot#04](https://raw.githubusercontent.com/alamin-php/ostad-assingment/master/module-15/public/images/a-1-4.png)
### Task 2: Request Redirect
Create a route /home that redirects to /dashboard using a 302 redirect.
### Answer:
![Screenshot#02-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/screenshot%2302-1.png?raw=true)

![Screenshot#02-2](https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/screenshot%2302-2.png?raw=true)
### Task 3: Global Middleware
Create a global middleware that logs the request method and URL for every incoming request. Log the information to the Laravel log file.
### Answer:
![Screenshot#03-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/screenshot-03-1.png?raw=true)

![Screenshot#03-2](https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/screenshot-03-2.png?raw=true)

![Screenshot#03-3](https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/screenshot-03-3.png?raw=true)
### Task 4: Route Middleware
Create a route group for authenticated users only. This group should include routes for /profile and /settings. Apply a middleware called AuthMiddleware to the route group to ensure only authenticated users can access these routes.
### Answer:
![Screenshot#04-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/screenshot-04-1.png?raw=true)

![Screenshot#04-2](https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/screenshot-04-2.png?raw=true)
### Task 5: Controller
Create a controller called ProductController that handles CRUD operations for a resource called Product. Implement the following methods:

index(): Display a list of all products.

create(): Display the form to create a new product.

store(): Store a newly created product.

edit($id): Display the form to edit an existing product.

update($id): Update the specified product.

destroy($id): Delete the specified product.

### Answer:
![Screenshot#05-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/screenshot-05-1.png?raw=true)

![Screenshot#05-2](https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/screenshot-05-2.png?raw=true)
### Task 6: Single Action Controller
Create a single action controller called ContactController that handles a contact form submission. Implement the __invoke() method to process the form submission and send an email to a predefined address with the submitted data.
### Answer:
![Screenshot#06-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/screenshot-06-1.png?raw=true)

![Screenshot#06-2](https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/screenshot-06-2.png?raw=true)

### Task 7: Resource Controller
Create a resource controller called PostController that handles CRUD operations for a resource called Post. Ensure that the controller provides the necessary methods for the resourceful routing conventions in Laravel.
### Answer:
![Screenshot#06-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/screenshot-07-1.png?raw=true)

![Screenshot#06-2](https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/screenshot-07-2.png?raw=true)

### Task 8: Blade Template Engine
Create a Blade view called welcome.blade.php that includes a navigation bar and a section displaying the text "Welcome to Laravel!".
### Answer:
![Screenshot#06-1](https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/screenshot-07-1.png?raw=true)

![Screenshot#06-2](https://github.com/alamin-php/ostad-assingment/blob/master/module-14/public/assets/screenshot-07-2.png?raw=true)
