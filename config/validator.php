<?php

function obligatoire(string $fieldName, string $value, array &$errors, $sms ="*Champ obligatoire") {
    if (empty($value)) {
        $errors[$fieldName] = $sms;
    }
}

function validate(array $error):bool{
    return count($error) == 0;
}