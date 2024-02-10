<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\FormRequest;
use App\Models\About;
use App\Models\Catalog;
use App\Models\Contact;
use App\Models\Forma;
use App\Models\MainText;
use App\Models\OurPrinciple;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function index(){

        $lang = App::getLocale();
        $main_text = MainText::select("desc_$lang as text", "image")->latest()->first();

        $catalogs = Catalog::select("id", "name_$lang as name", 'image')->get();

        $products = Product::select("id", "name_$lang as name", "main_image")->get();
        $contact = Contact::select("address_$lang as address", "phone", 'whatsapp', 'facebook', 'instagram', 'tiktok', 'email')->first();

        return view('index', compact('lang', 'main_text', 'catalogs', 'products', 'contact'));
    }

    public function catalogList(){
        $lang = App::getLocale();
        $catalogs = Catalog::select("id", "name_$lang as name", 'image')->get();
        $contact = Contact::select("address_$lang as address", "phone", 'whatsapp', 'facebook', 'instagram', 'tiktok', 'email')->first();

        return view('catalog.catalog-list', compact('lang', 'catalogs', 'contact'));
    }

    public function catalog($id){

        $lang = App::getLocale();
        $catalog = Catalog::with('properties')->select("id", "name_$lang as name", "desc_$lang as desc", "image")->findOrFail($id);
        $contact = Contact::select("address_$lang as address", "phone", 'whatsapp', 'facebook', 'instagram', 'tiktok', 'email')->first();

        return view('catalog.catalog', compact('lang', 'catalog', 'contact'));
    }

    public function about(){

        $lang = App::getLocale();
        $about = About::select("main_text_$lang as main_text", "sub_text_$lang as sub_text", "image")->first();
        $principles = OurPrinciple::select("title_$lang as title", "description_$lang as description")->get();
        $contact = Contact::select("address_$lang as address", "phone", 'whatsapp', 'facebook', 'instagram', 'tiktok', 'email')->first();

        return view('about-us', compact('lang', 'about', 'principles', 'contact'));
    }

    public function products(){

        $lang = App::getLocale();
        $products = Product::select("id", "name_$lang as name", "main_image")->get();
        $contact = Contact::select("address_$lang as address", "phone", 'whatsapp', 'facebook', 'instagram', 'tiktok', 'email')->first();

        return view('products', compact('lang', 'products', 'contact'));
    }

    public function productType($id){

        $lang = App::getLocale();
        $product = Product::select("id", "name_$lang as name", "desc_1_$lang as desc_1", "desc_2_$lang as desc_2", "wallpaper",
                                "tema_1_$lang as tema_1", "tema_desc_1_$lang as tema_desc_1", "tema_1_image", "tema_2_$lang as tema_2",
                                "tema_desc_2_$lang as tema_desc_2", "tema_2_image")->findOrFail($id);
        $contact = Contact::select("address_$lang as address", "phone", 'whatsapp', 'facebook', 'instagram', 'tiktok', 'email')->first();

        return view('product-type', compact('lang', 'product', 'contact'));
    }

    public function contacts(){

        $lang = App::getLocale();
        $contact = Contact::select("address_$lang as address", "phone", 'whatsapp', 'facebook', 'instagram', 'tiktok', 'email')->first();

        return view('contact', compact('lang', 'contact'));
    }

    public function contactForm(ContactFormRequest $request){
        $data = $request->validated();

        Forma::create($data);

        $lang = App::getLocale();
        return view('success', compact('lang'));
    }

    public function success(){

        $lang = App::getLocale();
        $contact = Contact::select("address_$lang as address", "phone", 'whatsapp', 'facebook', 'instagram', 'tiktok', 'email')->first();

        return view('success', compact('lang', 'contact'));
    }
}
