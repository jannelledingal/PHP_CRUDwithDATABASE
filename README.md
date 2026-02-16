# PHP_CRUDwithDATABASE

# User Management CRUD System

A simple PHP and MySQL-based User Management application that allows users to Create, Read, Update, and Delete records with a Bootstrap 5 interface.

## 📂 Project Structure

As per the current setup, all files are located within the `components` folder for logic and view consistency:

* **`add.php`**: The interface and logic for adding new users to the database.
* **`view.php`**: The main dashboard that displays all registered users in a table.
* **`edit.php`**: Form to modify existing user details (First Name and Last Name).
* **`delete.php`**: Script to remove a user record from the system.
* **`pdo.php`**: Database connection file using PHP Data Objects (PDO).
* **`index.php`**: A demonstration file showing PHP basics like roles, loops, and arrays.

## 🛠️ Requirements

* **Local Server**: XAMPP, WAMP, or Laragon.
* **PHP Version**: 8.0 or higher.
* **Database**: MySQL/MariaDB.

## 🚀 Setup Instructions

### 1. Database Configuration

1. Open **phpMyAdmin** (`http://localhost/phpmyadmin`).
2. Create a new database named **`usermnt`**.
3. Run the following SQL query to create the table:
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL
);

```



### 2. File Configuration

Ensure your `pdo.php` file matches your local database credentials:

* **Host**: `localhost`
* **DB Name**: `usermnt`
* **User**: `root`
* **Password**: `""` (empty)

### 3. Running the Application

Place the `usercore` folder in your server's root directory (e.g., `C:/xampp/htdocs/usercore/`). Access the application via the following URLs:

* **View Users**: `http://localhost/usercore/components/view.php`
* **Add User**: `http://localhost/usercore/components/add.php`

## ✨ Features

* **Bootstrap 5 UI**: Fully responsive design for mobile and desktop.
* **PDO Prepared Statements**: Secure database interactions to prevent SQL injection.
* **Real-time Alerts**: Success and error messages when adding users.

---
Author: JANNELLE DINGAL
