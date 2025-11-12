# Product Management Website

## Overview
This project is a simple product management website focused on safety products. It allows users to view product information, submit orders, and learn more about the company.

## Project Structure
```
product-management-website
├── public
│   ├── index.php            # Main page (safety products, About Us on left, order form on right)
│   ├── products.php         # Product quantity & prices page (redirect target)
│   ├── order.php            # Order form handler
│   └── assets
│       ├── css
│       │   └── style.css    # CSS styles for the website
│       ├── js
│       │   └── main.js      # JavaScript functionality
│       └── fonts            # Custom fonts directory
├── src
│   ├── controllers
│   │   └── OrderController.php # Logic for processing customer orders
│   ├── models
│   │   └── Product.php      # Product model definition
│   └── views
│       ├── header.php       # Header section for consistent inclusion
│       └── footer.php       # Footer section for consistent inclusion
├── config
│   └── config.php           # Database credentials and site settings
├── sql
│   └── schema.sql           # MySQL schema for products and orders
├── .gitignore                # Files and directories to ignore by version control
└── README.md                 # Project documentation
```

## Features
- **Main Page**: Displays information about safety products, an "About Us" section, and a customer order form.
- **Product Page**: A placeholder for displaying product quantities and prices.
- **Order Form**: Allows customers to submit their orders with necessary details.
- **Responsive Design**: The website is designed to be attractive and user-friendly.

## Setup Instructions
1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Set up a MySQL database and import the schema from `sql/schema.sql`.
4. Update the database credentials in `config/config.php`.
5. Open `public/index.php` in your web browser to view the main page.

## Technologies Used
- HTML
- CSS
- PHP
- MySQL

## Future Enhancements
- Implement product data retrieval and display on the products page.
- Add form validation and error handling in the order form.
- Enhance the user interface with additional styling and JavaScript functionality.