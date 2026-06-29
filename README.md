# Week10 Project

## Overview
This is a PHP-based web application with user authentication and contact management functionality.

## Project Structure

- **index.php** - Main entry point of the application
- **login.php** - User login page
- **logout.php** - User logout functionality
- **User.php** - User class for handling user-related operations
- **contact.php** - Contact management page
- **classes.php** - Additional PHP classes

## Features

- User Authentication (Login/Logout)
- User Management
- Contact Management

## Requirements

- PHP 7.0 or higher
- MySQL Database
- XAMPP or similar PHP server environment

## Installation

1. Place the project files in your `htdocs` directory
2. Configure your database connection in the relevant PHP files
3. Access the application through your browser at `http://localhost/my_projects/Week10/`

## Usage

1. Navigate to the index page
2. Login with your credentials
3. Access contact and other features
4. Logout when finished

## File Descriptions

### User.php
Handles user-related operations including authentication and user data management.

### contact.php
Manages contact information and related operations.

### classes.php
Contains additional helper classes used throughout the application.

## Security Notes

- Ensure all user inputs are properly validated and sanitized
- Use prepared statements for database queries to prevent SQL injection
- Store passwords using secure hashing algorithms (bcrypt)

---

**Last Updated:** June 29, 2026
