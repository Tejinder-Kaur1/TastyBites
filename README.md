# TastyBites Restaurant Website

A responsive restaurant booking website built using PHP, MySQL, Bootstrap, HTML, CSS, and JavaScript.

## Features

- Table booking form
- MySQL database integration
- Responsive UI
- Bootstrap design
- Booking data storage using PHP & MySQL
- phpMyAdmin database management

## Technologies Used

- PHP
- MySQL
- Bootstrap 5
- HTML5
- CSS3
- JavaScript

## Database Setup

1. Open phpMyAdmin
2. Create database:

```sql
CREATE DATABASE tastybites;
```

3. Create bookings table:

```sql
CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    booking_date DATETIME NOT NULL,
    noOfPeople INT NOT NULL,
    specialRequest TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## Run Project

https://tastybites04.infinityfreeapp.com/

## Author

Tejinder Kaur
