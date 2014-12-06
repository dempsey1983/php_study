use books;

insert into customers values
(2,	'Julie Liu', '25 Oak Street', 'Airport West'),
(3,	'Julie Smith', '25 Oak Street', 'Airport West'),
(4, 'Alan Wong', '1/47 Waines Avenue', 'Box Hill'),
(5, 'Nichelle Arthur', '357 North Road', 'Yarraville');

insert into orders values
(NULL, 3, 69.98, '2007-04-02'),
(NULL, 1, 49.88, '2007-04-11'),
(NULL, 2, 39.78, '2007-11-10'),
(NULL, 3, 67.54, '2010-09-05'),
(NULL, 4, 22.37, '2011-10-10');

insert into books values
('0-672-31697-9',	'Michael Morgan',	'Java 2 for developers',	139.96),
('0-672-31697-1',	'Michael Morgan1',	'Java 3 for developers',	49.88),
('0-672-31697-2',	'Michael Morgan2',	'Java 4 for developers',	39.78),
('0-672-31697-3',	'Michael Morgan3',	'Java 5 for developers',	67.54),
('0-672-31697-4',	'Michael Morgan4',	'Java 6 for developers',	22.37);

insert into order_items values
(1, '0-672-31697-9', 2),
(2, '0-672-31697-1', 1),
(3, '0-672-31697-2', 1),
(4, '0-672-31697-3', 1),
(5, '0-672-31697-4', 1);

insert into book_reviews values
('0-672-31697-9',	'This book is clearly written and goes well beyond most of the basic java books out theres.');


select customers.name from customers,orders,order_items,books
where customers.customerid = orders.customerid
and orders.orderid = order_items.orderid
and order_items.isbn = books.isbn
and books.title like '%Java%';
