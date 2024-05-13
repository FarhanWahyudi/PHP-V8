<?php
    class Product {
        public function __construct(public string $id,
                                    public string $name,
                                    public int $price = 0,
                                    public int $quantity = 0,
                                    private bool $expensive = false) 
        {
        }
    }

    $product = new Product(id: '31', name: 'farhan', price: 2000);
    var_dump($product);

    echo $product->name;
?>