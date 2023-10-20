
# Performance Monitor Application

Project to keep logs of your daily work as per Application you are working on.
 


## Installation

Clone or download the application

```bash
  Mac    (cp .env.example .env) 
  Windows( copy .env.example .env)
```
Now, change the credentials of the database and enter desired database name.

```bash
    composer install 
```
Generate a key using following command

```bash
    php artisan key:generate
```
Now install node modules using following command

```bash
    npm install && npm run dev
```
Once all the above steps completed, generate a user using 

```bash
    php artisan make:filament-user
```
Provide Name,Email and Password this will create user.
Now you can login and try testing the admin panel using the user credentials you have just created.
To run the server use the following command.
```bash
   php artisan serve
```
## License

[MIT](https://choosealicense.com/licenses/mit/)
