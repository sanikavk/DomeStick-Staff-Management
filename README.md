# DomeStick - Domestic Staff Management System
A full-stack web application that connects homeowners with verified domestic service providers including cleaners, plumbers, electricians, and babysitters. Built as a 3rd year academic project (2022–23).

## Overview
DomeStick simplifies the process of finding and hiring reliable household service professionals through a centralized online portal with separate customer and admin interfaces.

## Features
### Customer side

- User registration and secure login
- Browse and book services across 4 categories (Cleaning, Plumbing, Electrical, Babysitting)
- Scheduling with date, time, and address input
- Payment interface (PayPal / Debit/Credit Card)
- Feedback submission

### Admin side

- Secure admin login
- View and manage all incoming orders
- Accept or hold bookings per service category
- View customer feedback

## Tech Stack

| Layer | Technology |
|-------|------------|
|Frontend|HTML, CSS, JavaScript|
|Backend|PHP|
|Database|MySQL|
|Server|Apache (XAMPP)|

## Database Schema
The domestick.sql file contains the full database schema including tables for users, service bookings (cleaning, plumbing, electrical, babysitting), orders, and feedback.

## Screenshots
### Home Page
![Home Page](https://github.com/sanikavk/DomeStick-Staff-Management/blob/main/screenshots/Home%20Page.png)

### Customer Registration
![Customer Registration](https://github.com/sanikavk/DomeStick-Staff-Management/blob/main/screenshots/Customer%20Registration.png)

### Customer Login
![Customer login](https://github.com/sanikavk/DomeStick-Staff-Management/blob/main/screenshots/Customer%20login.png)

### Customer Dashboard
![Customer dashboard](https://github.com/sanikavk/DomeStick-Staff-Management/blob/main/screenshots/Customer%20dashboard.png)

### Booking Form for Cleaning Services
![Booking form for cleaning services](https://github.com/sanikavk/DomeStick-Staff-Management/blob/main/screenshots/Booking%20form%20for%20Cleaning%20Services.png)

### Payment Page
![Payment Page](https://github.com/sanikavk/DomeStick-Staff-Management/blob/main/screenshots/Payment%20Page.png)

### Orders
![Orders](https://github.com/sanikavk/DomeStick-Staff-Management/blob/main/screenshots/Orders.png)

### Admin Login
![Admin Login](https://github.com/sanikavk/DomeStick-Staff-Management/blob/main/screenshots/Admin%20Login.png)

### Admin Dashboard
![Admin Dashboard](https://github.com/sanikavk/DomeStick-Staff-Management/blob/main/screenshots/Admin%20Dashboard.png)

### Orders for Cleaning Services
![Orders for Cleaning Services](https://github.com/sanikavk/DomeStick-Staff-Management/blob/main/screenshots/Orders%20for%20Cleaning%20Servies.png)


## How to Run Locally

- Install XAMPP
- Clone this repo into your htdocs folder
- Import domestick.sql into MySQL via phpMyAdmin
- Start Apache and MySQL from XAMPP Control Panel
- Visit http://localhost/Domestick/src/ in your browser

## Project Structure
```
domestick-staff-management/
|-- README.md
|-- domestick.sql              # Database schema and seed data
|-- src/
    |-- adminlogin/            # Admin login, dashboard, order management
    |-- customer_register/     # Customer registration, dashboard, booking forms
    |-- mainpage/              # Home page and landing UI
```
