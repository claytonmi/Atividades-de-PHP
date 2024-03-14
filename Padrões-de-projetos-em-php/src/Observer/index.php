<?php
// index.php

require_once 'Observer.php';
require_once 'Subject.php';

// Criar instâncias das classes
$observer1 = new Observer();
$observer2 = new Observer();

$subject = new Subject();

// Anexar os observadores ao sujeito
$subject->attach($observer1);
$subject->attach($observer2);

// Notificar os observadores
$subject->notify();