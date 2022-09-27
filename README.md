# Installation

## 1. Download the repository or clone using this command in the terminal.
 ```
 git clone https://github.com/nestinho/resto.git

```

## 2. Go into the project folder. or use this command in the terminal 
```
cd resto
```

## 3. rename the file name `.env.example` to `.env` or copy it and rename paste it at the project root and name it `.env`.You can simply use this command.
```
cp .env.example .env
```

## 4. Generate app key using this command.
```php artisan key:generate ```

## 5. setup your database and your app name in the .env file 

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=resto
DB_USERNAME=root
DB_PASSWORD=

```

## 6. Install/Update dependencies using the following command
```
composer install/ composer update

```

## 7. Run the following command in the terminal to run migrations and seeds

 ```
 php artisan migrate
 ```
 You can also import the tms.sql file in the database folder. 

## 8. Import the database
```
You can also import the resto.sql file in the .DB folder. 
```

## 9. Open your browser and go to the address in the terminal like this 

```
http://localhost/resto

```

## 10. Login to the default user :

```
email: admin@gmail.com
password: admin

```
