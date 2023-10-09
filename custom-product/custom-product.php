<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class CustomProduct extends Module {

    // Constructor del módulo
    public function __construct() {
        parent::__construct();

        $this->name = 'Personalización del modulo';
        $this->version = '1.0.0';
        $this->author = 'JssChaz14';
        $this->description = 'Este módulo es un ejemplo de módulo personalizado para PrestaShop.';
        $this->bootstrap = true;

        $this->hooks = [
            'displayHome',
        ];
    }

    // Método que se ejecuta al cargar el módulo
    public function ejecutar() {

        $this->context->smarty->assign('mi_contenido', 'Este es el contenido del módulo personalizado.');

        $this->context->controller->addJS(_PS_MODULE_DIR_ . 'custom-product/custom-product.js');
        $this->context->controller->addCSS(_PS_MODULE_DIR_ . 'custom-product/custom-product.css');
        $this->context->controller->addBlock('custom-product', 'custom-product', 'home');
    }

    public function getResultado() {
        return 'El módulo se ha ejecutado correctamente.';
    }

}

?>