<?php

function validate_code($code)
{
    $sandbox = new PHPSandbox\PHPSandbox;

    $sandbox->setValidationErrorHandler(function(PHPSandbox\Error $error, PHPSandbox\PHPSandbox $sandbox){
        if($error->getCode() == PHPSandbox\Error::PARSER_ERROR){ //PARSER_ERROR == 1
            return $result = [
                "Синтаксическая ошибка",
                "false"
            ];
        }
        throw $error;
    });

    //Разрешеные функции
    $sandbox->whitelistFunc(['sizeof', 'implode', 'bubble_sort']);

    //разрешаю использовать пользовательиские функции
    $sandbox->allow_functions = true;

    $test_params = "$" . "arr = array(5, 1, 4, 2, 8);
     bubble_sort(" . "$" . "arr);";

    $sandbox->execute($code);
    $result[0] = ob_get_contents();

    $test_answer = "12458";

    if($result[0] === $test_answer)
    {
        $result[1] = "true";
    }
    else
    {
        $result[1] = "false";
    }

    //require_once(public_path('tests\test_with_parameters.php'));
    //$result[1] = parameter_test($code, $test_params, $test_answer);

    return $result;
}
