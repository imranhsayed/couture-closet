# Couture Closet Proposal

## 1. Introduction

This document outlines the detailed project proposal for the development of Couture Closet, an online fashion platform for men, women, and children. This project, undertaken by Commerce Crew from WDD Development, aims to demonstrate our capabilities as a full-stack development studio by presenting this project to XYZ Marketing. By leveraging Laravel, PHP, JavaScript, AWS, and MySQL, we intend to build a robust, secure, user-friendly, and responsive website that showcases our technical and collaborative skills. The proposal encompasses the project scope, target audience, key features, technical stack, development team, and timeline, outlining the vision, technical approach, and collaborative roadmap to ensure successful implementation.

## 2. Target Audience & Market Analysis

Couture Closet is a modern eCommerce platform tailored to provide a wide array of stylish and affordable clothing options for men, women, and children. Our target audience is diverse, including both fashion-conscious individuals and budget-minded shoppers, ensuring we cater to a broad spectrum of customers.

Target Market Segments

Fashion-Forward Individuals: People who are always on the lookout for the latest trends and styles, seeking to make a fashion statement with their wardrobe choices.

Budget-Conscious Shoppers: Individuals who prioritize affordability without compromising on quality, looking for the best value in their clothing purchases.

Parents: Caregivers searching for stylish, comfortable, and durable clothing options for their children, balancing fashion with functionality.

By addressing these market segments, Couture Closet aims to become the go-to online destination for all clothing needs, offering a seamless shopping experience that combines trendiness, quality, and affordability.


## 3. Project Details

### Functionality

#### Front-End
- **Homepage (HOME):** Displaying featured products, new arrivals, and promotions.
- **Product Listing Page (SHOP):** Showing all products with filtering and sorting options.
- **Product Detail Page:** Detailed view of each product with images, descriptions, reviews, rating, and available sizes.
- **Shopping Cart:** Allowing users to add, remove, and update product quantities.
- **Checkout Process:** Seamless checkout experience with multiple payment options.
- **User Account Management:** User registration, login, profile management, and order history.
- **Responsive Design:** Ensuring usability across various devices (desktops, tablets, and mobile phones).

#### Back-End
- **Admin Dashboard:** Managing products, categories, orders, and users.
- **PRODUCT Management:** Tracking product stock levels and updating quantities after purchases.
- **Order Management:** Processing orders, updating order status, and handling returns (USER: ONLY ADMIN).
- **USER MANAGEMENT:** Tracking list of customers (display of user table). CRUD functionality.
- **Review Management:** List of the feedback, reviews and rating from the users.

## 4. Proposed Design Solution

### Home Page
![Home Page Design](exports/home_page.png)

### Product Listing Page
![Product Listing Page Design](exports/product_listing.png)

### Product Detail Page
![Product Detail Page Design](exports/product_detail.png)

## 5. User Personas/Use Case Diagrams

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

## 6. Sitemaps

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

## 7. Server
| Name      | Version |
| ----------| --------|
| Ubuntu    | 24.04   |
| MySQL     | 8.0.37  |
| Git       | 2.43.0  |
| PHP       | 8.3.6   |
| Apache    | 2.4.58  |
| NPM       | 10.7.0  |
| Node      | v18.20.4|
| Composer  | 2.7.7   |
| Laravel   | 11.9    |
| bootstrap | 5.2.3   |
| Zip       | 3.0     |

## 8. Security

### Server-Level Security
- Regular updates and patch management.
- Firewalls and access control lists (ACLs).

### Application-Level Security
- **XSS Protection:** Output sanitization and escaping.
- **CSRF Protection:** Tokens and secure form submissions.
- **SQL Injection Prevention:** Prepared statements and parameterized queries.

## 9. Database

### ERD
![ERD](./exports/test.jpeg)

### Tables
- **Users:** User information and credentials.
- **Products:** Product details and stock information.
- **Categories:** Product categorization.
- **Orders:** Order details and status.
- **Order_Details:** Items within each order.
- **Payments:** Payment transaction details.

## 10. Value Adds

- **Advanced Search Functionality:** Implementing full-text search for better product discovery.
- **Recommendation System:** Personalized product recommendations based on user behavior.
- **Customer Reviews and Ratings:** Allowing users to leave feedback and rate products.

### Revised ERD for Value Adds
![Revised ERD](exports/revised_erd.png)

## 11. Team

### Team Name: Code Couture

- **Imran:** Project Management, Git, JavaScript, Checkout, Cart
- **Donald:** Design, HTML, CSS
- **Snigdha:** HTML, CSS
- **Rui:** Server Setup, Database, MySQL, Login, Register, Admin Dashboard
- **Parth:** QA, Testing, Bug Fixing

## 12. Timeline

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

## 13. Additional Requirements

- Physical items requiring shipment and delivery.
- Database tracking product quantities and adjusting after purchase.
- Displaying item stock levels to users.
- Implementing a shipping cost strategy.
- Applying taxes for each Canadian province or territory.
- Managing all data tables through CRUD operations.
- Ensuring original code development by team members.
- Equal contribution and collaboration among team members.
