# Couture Closet Proposal

## 1. Introduction

Couture Closet is an e-commerce platform designed to sell a variety of clothing items catering to men, women, and children. This project aims to demonstrate our capabilities as a full-stack development studio, fulfilling the requirements set forth by XYZ Marketing. By leveraging Laravel, PHP, JavaScript, AWS, and MySQL, we intend to build a robust, user-friendly, and responsive website that showcases our technical and collaborative skills.

## 2. Project Details

### Functionality

#### Front-End
- **Homepage:** Displaying featured products, new arrivals, and promotions.
- **Product Listing Page:** Showing all products with filtering and sorting options.
- **Product Detail Page:** Detailed view of each product with images, descriptions, reviews, and available sizes.
- **Shopping Cart:** Allowing users to add, remove, and update product quantities.
- **Checkout Process:** Seamless checkout experience with multiple payment options.
- **User Account Management:** User registration, login, profile management, and order history.
- **Responsive Design:** Ensuring usability across various devices (desktops, tablets, and mobile phones).

#### Back-End
- **Admin Dashboard:** Managing products, categories, orders, and users.
- **Inventory Management:** Tracking product stock levels and updating quantities after purchases.
- **Order Management:** Processing orders, updating order status, and handling returns.
- **Payment Integration:** Secure payment processing with a payment gateway.
- **Security Measures:** Implementing protections against XSS, CSRF, and SQL injection attacks.

## 3. Proposed Design Solution

### Home Page
![Home Page Design](exports/home_page.png)

### Product Listing Page
![Product Listing Page Design](exports/product_listing.png)

### Product Detail Page
![Product Detail Page Design](exports/product_detail.png)

## 4. User Personas/Use Case Diagrams

### User Personas

#### Guest User
- **Actions:** Browse products, view product details, and register an account.
- **Use Case:** 
  1. Visits the homepage.
  2. Browses through product categories.
  3. Views product details.
  4. Registers for an account.

#### Authenticated User
- **Actions:** All guest actions plus add to cart, checkout, and view order history.
- **Use Case:**
  1. Logs into the account.
  2. Adds products to the cart.
  3. Proceeds to checkout.
  4. Completes the purchase.
  5. Views order history.

#### Admin
- **Actions:** Manage products, categories, users, and orders.
- **Use Case:**
  1. Logs into the admin dashboard.
  2. Adds new products and updates existing ones.
  3. Manages user accounts and reviews orders.
  4. Updates order statuses and handles customer inquiries.

## 5. Sitemaps

### Front-End
- Home
- Product Listing
- Product Detail
- Shopping Cart
- Checkout
- User Account
  - Profile
  - Order History
- Login/Sign-Up

### Back-End (Admin)
- Dashboard
- Manage Products
- Manage Categories
- Manage Orders
- Manage Users

## 6. Server Setup

- **Server Provider:** AWS
- **Server Type:** EC2 Instance
- **Operating System:** Ubuntu 20.04 LTS
- **Web Server:** Apache 2.4
- **Database Server:** MySQL 8.0
- **PHP Version:** PHP 8.0
- **Other Software:** Composer, Git

## 7. Security

### Server-Level Security
- Regular updates and patch management.
- Firewalls and access control lists (ACLs).

### Application-Level Security
- **XSS Protection:** Output sanitization and escaping.
- **CSRF Protection:** Tokens and secure form submissions.
- **SQL Injection Prevention:** Prepared statements and parameterized queries.

## 8. Database

### ERD
![ERD](exports/erd.png)

### Tables
- **Users:** User information and credentials.
- **Products:** Product details and stock information.
- **Categories:** Product categorization.
- **Orders:** Order details and status.
- **Order_Details:** Items within each order.
- **Payments:** Payment transaction details.

## 9. Value Adds

- **Advanced Search Functionality:** Implementing full-text search for better product discovery.
- **Recommendation System:** Personalized product recommendations based on user behavior.
- **Customer Reviews and Ratings:** Allowing users to leave feedback and rate products.

### Revised ERD for Value Adds
![Revised ERD](exports/revised_erd.png)

## 10. Team

### Team Name: Code Couture

- **Imran:** Project Management, Git, JavaScript, Checkout, Cart
- **Donald:** Design, HTML, CSS
- **Snigdha:** HTML, CSS
- **Rui:** Server Setup, Database, MySQL, Login, Register, Admin Dashboard
- **Parth:** QA, Testing, Bug Fixing

## 11. Deliverables

### Day 1
- **Team Roles and Project Idea Pitch:** Completed by 12:00 PM
- **Configured Server:** Completed by 12:00 PM

### Day 2
- **Graphic Design:** Completed by 12:00 PM
- **Data Model:** Completed by 12:00 PM

### Day 3
- **HTML Templates:** Completed by 12:00 PM
- **Proposal:** Completed by 12:00 PM

### Day 12
- **Completed Site and Presentation:** Completed by 10:00 AM
- **Project Repo Submission:** Completed by 12:00 PM

## 12. Additional Requirements

- Physical items requiring shipment and delivery.
- Database tracking product quantities and adjusting after purchase.
- Displaying item stock levels to users.
- Implementing a shipping cost strategy.
- Applying taxes for each Canadian province or territory.
- Managing all data tables through CRUD operations.
- Ensuring original code development by team members.
- Equal contribution and collaboration among team members.
