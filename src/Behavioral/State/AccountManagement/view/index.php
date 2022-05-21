<?php

use Workspace\DesignPatterns\Behavioral\State\AccountManagement\Account;

 require_once('D:/laragon/www/design-pattern/vendor/autoload.php');

echo "<h1>Design Pattern: Behavioral - State</h1>";

echo "<h3>Account Management</h3>";

try {
    $account = new Account();
    echo "<p>Account is in state: " . $account->getState()->getName() . "</p>";
    $account->moveToPending();
    echo "<p>Account is in state: " . $account->getState()->getName() . "</p>";
    $account->moveToInvoiced();
    echo "<p>Account is in state: " . $account->getState()->getName() . "</p>";

} catch (\Exception $e) {
    echo "<strong style='color: red;'>Error Exception: " . $e->getMessage() . "</strong>";
}