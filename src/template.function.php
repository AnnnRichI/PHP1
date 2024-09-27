<?php

function error(string $errorText): void {
    echo "\033[31m" . $errorText . " \r\n \033[31m";

}

function man(): void {
    $help = "Порядок вызова\r\n";
    $help .= "php app.php [COMMAND]\r\n";
    $help .= "Доступные команды\r\n";
    $help .= "rand - игра, \"Угадай число\" \r\n";
    $help .= "help - помощь \r\n";

    echo $help;

}