# SolusVM-API-PHP-
Execute SolusVM API externally with PHP. You can perform reboots and check server information.

# API Actions

This project contains HTML and PHP code to perform specific actions using the SolusVM API. By entering the API key, hash, and selecting an action, you can execute operations on the SolusVM server.

## Installation and Execution

1. Place this project on any web server.

2. Open the `index.php` file.
3. Change to the domain that manages your virtual server:
```php
$apiUrl = 'https://SolusVM.domain.com/api/client/command.php?key=' . urlencode($key) . '&hash=' . urlencode($hash) . '&action=' . $action;
```

3. Open the page of the uploaded PHP file from your browser.
4. Enter key and hash and select the action you wish to perform from the select box.
