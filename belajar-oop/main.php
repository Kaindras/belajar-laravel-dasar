<?php
// Your PHP code starts here
class Fruit {
    public $name;
    public $color;
    public $weight;
    public $taste;
    public $price;
    public $quantity;
    function introduce() {
        return "Name: " . $this->name .
               "  Color: " . $this->color . 
               "  Weight: " . $this->weight . 
               "  Taste: " . $this->taste . 
               "  Price: $" . $this->price . 
               "  Quantity: " . $this->quantity . " in stock";
    }
}
    $apple = new Fruit();
    $apple->name = "Apple"; // Name of the fruit
    $apple->color = "Red"; // Color of the fruit        
    $apple->weight = 150; // Weight in grams
    $apple->taste = "Sweet"; // Taste of the fruit
    $apple->price = 1.50; // Price in dollars
    $apple->quantity = 10; // Quantity in stock

    echo $apple->introduce();
    

?>