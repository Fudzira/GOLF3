<?php
    if(isset($_POST['calculate'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        // Проверка входных данных на числовой тип
        if(!is_numeric($num1) || !is_numeric($num2)){
            echo '<div class="result">Пожалуйста, введите числовые значения.</div>';
            exit;
        }

        switch($operation){
            case "add":
                $result = $num1 + $num2;
                echo '<div class="result">Результат сложения: ' . $result . '</div>';
                break;
            case "subtract":
                $result = $num1 - $num2;
                echo '<div class="result">Результат вычитания: ' . $result . '</div>';
                break;
            case "multiply":
                $result = $num1 * $num2;
                echo '<div class="result">Результат умножения: ' . $result . '</div>';
                break;
            case "divide":
                if($num2 == 0){
                    echo '<div class="result">Ошибка! Деление на ноль невозможно.</div>';
                } else {
                    $result = $num1 / $num2;
                    echo '<div class="result">Результат деления: ' . $result . '</div>';
                }
                break;
            case "percentage":
                $result = ($num1 * $num2) / 100;
                echo '<div class="result">Результат процента от числа: ' . $result . '</div>';
                break;
            default:
                echo '<div class="result">Выберите операцию.</div>';
                break;
        }
    }
    ?>
