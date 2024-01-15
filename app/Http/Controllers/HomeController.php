<?php

namespace App\Http\Controllers;

use App\Models\{
    Inbox,
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
        $product = Product::select('id', 'images', 'title_ar', 'title_en', 'desc_ar', 'desc_en')->find($id);
        return view('site.product_details', compact('sliders', 'settings', 'product'));
    }

    public function sendMessage(Request $request)
    {
        try {
            $name = $request->input('name');
            $email = $request->input('email');
            $subject = $request->input('subject');
            $message = $request->input('message');

            
            $inbox = new Inbox();

            
            $inbox->name = $name;
            $inbox->email = $email;
            $inbox->subject = $subject;
            $inbox->message = $message;

            $inbox->save();
            flash()->addSuccess('تم ارسال  طلبك بنجاح انتظر للرد');
            return redirect()->back();
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error saving the message'], 500);
        }
    }

    private function getSlider()
    {
        return Slider::query()->select('image', 'name_ar', 'name_en', 'description_ar', 'description_en')->get();
    }

    private function getSetting()
    {
        return Setting::query()->select('logo', 'email', 'phone', 'address_ar', 'address_en', 'link_youtube', 'instagram', 'linkedin', 'twitter', 'facebook', 'desc_about_ar', 'desc_about_en', 'image')->first();
    }

    private function getProduct()
    {
        return Product::query()->select('id', 'images', 'title_ar', 'title_en', 'desc_ar', 'desc_en')->get();
    }

    private function getPartner()
    {
        return Partner::query()->select('id', 'image')->get();
    }
}
