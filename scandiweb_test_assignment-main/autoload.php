<?php
session_start();
require_once('App/Database/Config/config.php');
require_once('App/Database/Queries/ProductQueries.php');
require_once('App/Database/DatabaseConnection.php');
require_once('App/Validation/Validator.php');
require_once('App/Products/ProductFactory.php');
require_once('App/Products/Product.php');
require_once('App/Products/Book.php');
require_once('App/Products/DVD.php');
require_once('App/Products/Furniture.php');
require_once('App/Validation/ProductRequest.php');
