<?php
/**
 * Created by PhpStorm.
 * User: surest.cn
 * Date: 2018/11/3
 * Time: 23:21
 */

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Banner;

class IndexController extends Controller
{
    public function index()
    {
        # 获取分类
        $categories = Category::getByCategory();

        $products = Product::getProductsAll(false)->take(6);

        $banners = Banner::getCacheBanner()->take(4);

        return view('index.index',compact('categories','products','banners'));
    }
}