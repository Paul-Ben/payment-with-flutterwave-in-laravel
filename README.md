# Students Payment Management application(Flutterwave Integration)

## Features

- Admin Dashboard
- User Management
- Fee Management
- Faculty and Department Management
- Transactions & Registration Management
- Payment integration with Flutterwave

## How to Use

- Clone the repository and navigate (cd) into the application directory using the command : `git clone`

- navigate into the app folder

- copy contents of `.env.example` file to `.env` file.

- update the database details in the `.env` file as

    - `DB_DATABASE= your_Database_name`
    - `DB_USERNAME=your_username`
    - `DB_PASSWORD=your_password`

- run the commands: `composer update` and `composer install`

- Next run the command: `php artisan migrate` to run the database migrations

- Next run the command: `php artisan serve` to run the server to serve the project.

- browser url is http://127.0.0.1:8000 to check that the application is running fine.

- visit http://127.0.0.1:8000/eRegistration to view and test the app out

- visit http://127.0.0.1:8000/admin to access the admin panel to login.