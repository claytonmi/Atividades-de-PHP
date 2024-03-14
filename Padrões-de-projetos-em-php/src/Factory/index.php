<?php
// index.php

require_once 'Factory.php';

$productA = Factory::createProduct('A');
echo $productA->operation() . "<br>";

$productB = Factory::createProduct('B');
echo $productB->operation() . "<br>";