# Update - June 29, 2020
I've been seeing people interact with this repo, do you want me to keep updating this? if yes please open an Issue and let me know.
Thanks

# codeigniter-rma/support ticket
A user rma/support ticket start for Codeigniter 3

## Installation
1. Open /application/config/database.php and edit with your database settings
2. On your database, open a SQL terminal paste this and execute:

```sql
CREATE TABLE IF NOT EXISTS `request_rma_form` (
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
);
```
## Usage
It is just a starter for RMA/Support Ticket functionalities.

Extend the user controller or keep it as it is and write your own application with Codeigniter.
