<?php

class ControllerExtensionModuleCarouselProducts extends Controller {
    public function index($setting) {
        $this->load->language('extension/module/carousel_products');

        $data['products'] = array();

        $this->load->model('catalog/product');

        $results = $this->model_catalog_product->getProducts();

        foreach ($results as $result) {
            $data['products'][] = array(
                'name'  => $result['name'],
                'price' => $this->currency->format($result['price'], $this->session->data['currency']),
                'image' => $this->model_tool_image->resize($result['image'], 100, 100)
            );
        }

        return $this->load->view('extension/module/carousel_products', $data);
    }
}