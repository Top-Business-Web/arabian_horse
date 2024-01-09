<?php

namespace App\Http\Controllers;

use App\Models\{
    Slider,
    Partner,
    Product,
    Setting
};
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = $this->getSlider();
        $settings = $this->getSetting();
        $products = $this->getProduct();
        $partners = $this->getPartner();
        return view('site.layouts.index', compact('settings', 'sliders', 'products', 'partners'));
    }

    public function product($id)
    {
        $sliders = $this->getSlider();
        $settings = $this->getSetting();
        $product = Product::select('id', 'images', 'title', 'desc')->find($id);
        return view('site.product_details', compact('sliders', 'settings', 'product'));
    }

    private function getSlider()
    {
        return Slider::query()->select('image', 'name', 'description')->get();
    }

    private function getSetting()
    {
        return Setting::query()->select('logo', 'email', 'phone', 'address', 'link_youtube', 'instagram', 'linkedin', 'twitter', 'facebook', 'desc_about', 'image')->first();
    }

    private function getProduct()
    {
        return Product::query()->select('id', 'images', 'title', 'desc')->get();
    }

    private function getPartner()
    {
        return Partner::query()->select('id', 'image')->get();
    }
}
