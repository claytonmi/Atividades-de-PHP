<?php
// index.php

require_once 'Context.php';
require_once 'ConcreteStrategyA.php';
require_once 'ConcreteStrategyB.php';

// Criando instâncias das estratégias
$strategyA = new ConcreteStrategyA();
$strategyB = new ConcreteStrategyB();

// Criando contexto com a estratégia A e executando-a
$contextA = new Context($strategyA);
echo $contextA->executeStrategy();

// Criando contexto com a estratégia B e executando-a
$contextB = new Context($strategyB);
echo $contextB->executeStrategy();

