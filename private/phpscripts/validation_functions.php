<?php
$errors = [];

// input field validations

function fieldnameAsText($string)
{
    $string = ucfirst(str_replace("_", " ", $string));
    return $string;
}

function hasPrescense($value)
{
    return isset($value) && $value !== "";
}

function validatePresences($requiredFields)
{
    global $errors;
    foreach ($requiredFields as $field) {
        $value = trim($_POST[$field]);
        if (!hasPrescense($value)) {
            $errors[$field] = fieldnameAsText($field) . " can't be blank";
        }
    }
}

function hasMaxLength($string, $max)
{
    return strlen($string) <= $max;
}

function validateMaxLength($fieldsArray)
{
    global $errors;
    foreach ($fieldsArray as $field => $max) {
        $value = trim($_POST[$field]);
        if (!hasMaxLength($value, $max)) {
            $errors[$field] = fieldnameAsText($field) . " is too long";
        }
    }
}
