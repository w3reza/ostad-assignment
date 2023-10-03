<?php 


class Product {
    private  $id;
    private  $name;

    private $price;
    
    public function __construct(int $id,string $name,float $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice() {
        return '$' . number_format($this->price, 2);
    }

    // TODO: Add getFormattedPrice method

    public function showDetails() {
        echo "ID: {$this->id}\n";
        echo "Name: {$this->name}\n";
        echo "Price: {$this->getFormattedPrice()}\n";
    }

    // TODO: Add showDetails method
}

// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();

?>