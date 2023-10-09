<?php

if (!defined('_PS_VERSION_')) {
    exit;
}
// Importamos las clases necesarias
require_once _PS_MODULE_DIR_ . 'custom-product/custom-product';

// Instanciamos el módulo
$custom_product = new CustomProduct();

// Ejecutamos el módulo
$custom_product->ejecutar();

// Devolvemos el resultado
return $custom_product->getResultado();
