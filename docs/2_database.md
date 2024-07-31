```SQL
-- The users table contains core information about registered users, including their account credentials and personal details.
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    email VARCHAR(255) UNIQUE NOT NULL,
    telephone VARCHAR(15),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

```SQL
-- The user_addresses table stores multiple shipping and billing addresses associated with each user account.
CREATE TABLE user_addresses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    street VARCHAR(255),
    postal_code VARCHAR(20),
    city VARCHAR(255),
    province VARCHAR(255),
    country VARCHAR(255),
    is_primary BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
```

```SQL
-- The user_roles table defines different levels of access and permissions for users within the system.
CREATE TABLE user_roles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    role_type TINYINT NOT NULL comment '0: admin, 1: customer, 2: guests',
    role_name VARCHAR(50) NOT NULL comment 'role_type = 0 -> admin, role_type = 1 -> customer, role_type = 2 -> guests',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY unique_user_role (user_id, role_name),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
```

```SQL
-- The products table stores detailed information about individual clothing items, including their attributes and inventory status.
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sku VARCHAR(50) UNIQUE NOT NULL comment 'Example: For a brand, medium-sized t-shirt, the SKU might be "CC-NIKE-M-001"',
    name VARCHAR(100) NOT NULL,
    description TEXT,
    brand VARCHAR(50),
    gender ENUM('Men', 'Women', 'Kids') NOT NULL,
    size VARCHAR(20) NOT NULL comment 'XS: Extra Small, S: Small, M: Medium, L: Large, XL: Extra Large, XXL: Double Extra Large',
    price DECIMAL(10, 2) NOT NULL,
    stock_quantity INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    deleted_at TIMESTAMP
);
```

```SQL
-- The product_images table stores image information for each product.
CREATE TABLE product_images (
    id SERIAL PRIMARY KEY,
    product_id INTEGER NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    is_primary BOOLEAN DEFAULT FALSE,
    display_order INTEGER,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);
```

```SQL
-- The product_reviews table that allows users to leave reviews for products they've purchased
CREATE TABLE product_reviews (
    id SERIAL PRIMARY KEY,
    product_id INTEGER NOT NULL,
    user_id INTEGER NOT NULL,
    order_id INTEGER NOT NULL,
    rating INTEGER NOT NULL CHECK (rating >= 1 AND rating <= 5),
    title VARCHAR(255),
    review_text TEXT,
    is_verified_purchase BOOLEAN DEFAULT TRUE,
    is_approved BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id),
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (order_id) REFERENCES orders(id),
    UNIQUE (user_id, product_id, order_id)
);
```

```SQL
-- The product_categories table organizes products into a hierarchical structure of categories and subcategories.
CREATE TABLE product_categories (
    category_id INT NOT NULL,
    product_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES category(id)
    FOREIGN KEY (product_id) REFERENCES products(id)
);
```

```SQL
-- The category table to store all the categories
CREATE TABLE category (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

```SQL
-- The provincial_tax_rates table store all Canadian provinces tax rates
CREATE TABLE provincial_tax_rates (
    id SERIAL PRIMARY KEY,
    province_code CHAR(2) NOT NULL UNIQUE,
    province_name VARCHAR(50) NOT NULL,
    gst_rate DECIMAL(5, 3) NOT NULL,
    pst_rate DECIMAL(5, 3) NOT NULL,
    hst_rate DECIMAL(5, 3) NOT NULL ,
    vat_rate DECIMAL(5, 3) NOT NULL DEFAULT 0,
    total_tax_rate DECIMAL(5, 3) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
);
```

```SQL
-- The orders table stores overall order information.
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    email VARCHAR(255) NOT NULL,
    pst DECIMAL(10, 2) NOT NULL,
    gst DECIMAL(10, 2) NOT NULL,
    hst DECIMAL(10, 2) NOT NULL,
    sub_amount DECIMAL(10, 2) NOT NULL,
    total_amount DECIMAL(10, 2) NOT NULL,
    shipping_address TEXT NOT NULL,
    billing_address TEXT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE RESTRICT
);
```

```SQL
-- The order_items table links orders to specific products and quantities. 
CREATE TABLE order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    unit_price DECIMAL(10, 2) NOT NULL,
    line_price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE RESTRICT
);
```

```SQL
-- The transactions table tracks trasactions associated with each order.
CREATE TABLE transactions (
    id SERIAL PRIMARY KEY,
    order_id BIGINT NOT NULL,
    transaction_id VARCHAR(255),
    transaction_status VARCHAR(255) NOT NULL,
    response TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP,
    FOREIGN KEY (order_id) REFERENCES orders(id)
);
```