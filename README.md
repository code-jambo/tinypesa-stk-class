
# tinyPesa STK Library/Class

This is a practical class for [tinyPesa](https://tinypesa.com) STK initializing api, it makes it easy to implement the api in php.
avoid alot of messy code and get a clean implementation code.


## Features

- Authentication
- STK Push Initialization
- Transaction status
- Callback 


## Installation

Download The project zip https://github.com/codes-neo/tinypesa-stk-class
 or:

```bash
  git clone  https://github.com/codes-neo/tinypesa-stk-class
  
```
    
## Usage/Examples
Initiate payment 
```php
<?php
require('tinyPesa.php');

$payment = new tinyPesa('api_key');
$initiate = $payment->initiate(phone,amount);

echo($initiate->account_id); //output : phonenumber,time transacted.
//e.g output 071123456,03:28:54

```
Check Transaction Status 
```php
<?php
require('tinyPesa.php);

$instance = new tinyPesa('api_key');
$check = $instance->status('account_id');
//account id is : phone,time acquired from initializing

```


## Acknowledgements

- [code neo](https://www.github.com/codes-neo)
 - [Tiny Pesa](https://tinypesa.com)
 - [Documentation](https://tinypesa.com/developers/docs)


