
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
Now generate migrations using following command

```bash
    php artisan migrate
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

## Application Screenshots

## Login 
<img width="950" alt="Screenshot 2023-10-20 110517" src="https://github.com/itsmepiyushdev/performance-monitor/assets/53112560/0d4bc5bf-eb5a-404f-8b26-0b25dc8a3dfe">

## Dashboard
<img width="960" alt="Screenshot 2023-10-18 180315" src="https://github.com/itsmepiyushdev/performance-monitor/assets/53112560/348489b0-d294-4441-b0f5-ff741c22a2c5">

## Application
<img width="960" alt="Screenshot 2023-10-20 110601" src="https://github.com/itsmepiyushdev/performance-monitor/assets/53112560/c8a80d44-2edf-4d17-8918-a73bdbe55313">

## View Applications
<img width="960" alt="Screenshot 2023-10-20 110619" src="https://github.com/itsmepiyushdev/performance-monitor/assets/53112560/77e899b3-6f96-46b6-991c-2e0fe5c18d48">

## Other Activity
<img width="960" alt="Screenshot 2023-10-20 111120" src="https://github.com/itsmepiyushdev/performance-monitor/assets/53112560/f2e8d503-1878-4430-a91b-6e7cc51b64b8">

## View Other Activity
<img width="950" alt="Screenshot 2023-10-20 111305" src="https://github.com/itsmepiyushdev/performance-monitor/assets/53112560/c458411e-da09-4a2a-a806-1c19e0aa6c12">

## Performance
<img width="960" alt="Screenshot 2023-10-20 111433" src="https://github.com/itsmepiyushdev/performance-monitor/assets/53112560/1422590e-b1e2-4feb-ad3b-412720adadd6">

## View Performances
<img width="960" alt="Screenshot 2023-10-20 111534" src="https://github.com/itsmepiyushdev/performance-monitor/assets/53112560/1126edc2-f6c6-44f7-a004-4d2297df5e72">

