<?php

function assets($path) {
    include 'assets/' . $path;
}

function template($path) {
    include 'templates/' . $path;
}

function countCart() {
    if (isset($_SESSION['cart'])) {
        return count($_SESSION['cart']);
    }
    return 0;
}