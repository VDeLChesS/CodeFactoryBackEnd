
-- Livecoding queries

CREATE TABLE orders (
	order_id INT PRIMARY KEY AUTO_INCREMENT,
    order_date DATE,
    fk_customer_id INT,
    FOREIGN KEY (fk_customer_id) REFERENCES customer(customer_id)
    ON DELETE CASCADE;
);

CREATE TABLE order_books(
	fk_order_id INT,
    fk_book_id INT,
    FOREIGN KEY (fk_order_id) REFERENCES orders(order_id)
);

CREATE TABLE book (
	book_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(30) NOT NULL,
    price DECIMAL(5,2) NOT NULL,
    description VARCHAR(255) NOT NULL
)

ALTER TABLE order_books
ADD FOREIGN KEY (fk_book_id) REFERENCES book(book_id)

INSERT INTO `customer`(`first_name`, `last_name`, `age`, `email`) 
VALUES 
('Jane','Smith','36','jane@mail.com')

INSERT INTO `customer`(`first_name`, `last_name`, `age`, `email`)  
VALUES  
('Jane', 'Smith', 35, 'jane@mail.com'),
('David', 'Lee', 38, 'david@mail.com'),
('Sara', 'Johnson', 31, 'sara@mail.com'),
('Michael', 'Smith', 40, 'michael@mail.com'),
('Maria', 'Garcia', 29, 'maria@mail.com'),
('Andrew', 'Wilson', 31, 'andrew@mail.com'),
('Emily', 'Johnson', 25, 'emily@mail.com');

INSERT INTO `orders`(`order_date`, `fk_customer_id`) 
VALUES 
('2024-03-15', 5),
('2024-04-15', 2),
('2024-02-15', 7),
('2024-05-17', 4),
('2024-03-15', 7),
('2024-03-15', 3);

INSERT INTO `book`(`title`, `price`, `description`)
VALUES
('The Great Gatsby', 15.99,'A classic novel by F. Scott Fitzgerald'),
('To Kill a Mockingbird', 12.99, 'A Pulitzer Prize-winning novel by Harper Lee'),
('1984', 10.99, 'A dystopian novel by George Orwell'),
('Pride and Prejudice', 11.99, 'A romantic novel by Jane Austen'),
('The Catcher in the Rye', 13.99, 'A novel by J.D. Salinger'),
('The Hobbit', 14.99,'A fantasy novel by J.R.R. Tolkien')
