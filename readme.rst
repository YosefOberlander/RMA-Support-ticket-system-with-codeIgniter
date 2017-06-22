###################
What is CodeIgniter
###################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

## Installation
1. Open /application/config/database.php and edit with your database settings
2. On your database, open a SQL terminal paste this and execute:

```sql
CREATE TABLE `request_rma_form` (
  `id` int(11) NOT NULL,
  `rma_request_count` int(11) NOT NULL,
  `reference_number` varchar(255) NOT NULL,
  `rma_number` varchar(255) NOT NULL,
  `refund_number` varchar(255) NOT NULL,
  `rma_request_date` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `extension` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `marketplace_name` varchar(255) NOT NULL,
  `order_number` varchar(255) NOT NULL,
  `address_one` varchar(255) NOT NULL,
  `address_two` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `return_type` varchar(255) NOT NULL,
  `hardware_problem` varchar(255) DEFAULT NULL,
  `sku` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `po_number` varchar(255) DEFAULT NULL,
  `hardware_serial_numbers` text,
  `comments` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1
```
