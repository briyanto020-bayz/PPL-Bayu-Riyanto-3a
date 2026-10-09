<?php
function validateAge($age) {
    if (!is_numeric($age)) {
        return new InvalidArgumentException("umur harus berupa angka.");
    }
    if ($age < 0 ) {
        return new InvalidArgumentException("umur tidak boleh negatif.");
    }
    return true;
}