<?php

class BankAccount {
    public $balance = 10.5;
    
    public function displayBalance() {
        return 'Balance: '.$this->balance.'<br />';
    }
    
    public function withDraw($amount) {
        if ($this->balance < $amount) {
            echo 'Not enough money.<br />';
        } else {
            $this->balance = $this->balance - $amount;
        }
    }
}

$alex = new BankAccount;
$alex->withDraw(11);
echo $alex->displayBalance();

/* Output
Not enough money.
Balance: 10.5
*/
?>
