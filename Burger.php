<?php

// Стоимость гамбургера
$hamburgerPrice = 4.95;

// Стоимость молочно-шоколадного коктейля
$milkshakePrice = 1.95;

// Стоимость кока-колы
$cokePrice = 0.85;

// Количество гамбургеров
$hamburgerCount = 2;

// Рассчитываем стоимость гамбургеров
$totalHamburgerCost = $hamburgerPrice * $hamburgerCount;

// Рассчитываем общую стоимость еды
$totalFoodCost = $totalHamburgerCost + $milkshakePrice + $cokePrice;

// Ставка НДС
$taxRate = 0.075;

// Рассчитываем стоимость НДС
$taxCost = $totalFoodCost * $taxRate;

// Ставка чаевых
$tipRate = 0.16;

// Рассчитываем стоимость чаевых
$tipCost = ($totalFoodCost) * $tipRate;

// Рассчитываем итоговую стоимость
$totalCost = $totalFoodCost + $taxCost + $tipCost;

// Вывод счета
echo "---------------------------------\n";
echo "      Счет в ресторане\n";
echo "---------------------------------\n";

// Вывод позиций заказа
echo "Гамбургер      $" . number_format($hamburgerPrice, 2) . " x " . $hamburgerCount . " = $" . number_format($totalHamburgerCost, 2) . "\n";
echo "Молочный коктейль $" . number_format($milkshakePrice, 2) . " x 1 = $" . number_format($milkshakePrice, 2) . "\n";
echo "Кока-кола        $" . number_format($cokePrice, 2) . " x 1 = $" . number_format($cokePrice, 2) . "\n";

// Вывод общей стоимости
echo "\n";
echo "Общая стоимость еды: $" . number_format($totalFoodCost, 2) . "\n";
echo "НДС:             $" . number_format($taxCost, 2) . "\n";
echo "Чаевые:         $" . number_format($tipCost, 2) . "\n";
echo "---------------------------------\n";
echo "Итого:           $" . number_format($totalCost, 2) . "\n";
echo "---------------------------------\n";
