<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | بيانات المجموعات - يمكنك لاحقاً ربطها بقاعدة البيانات
    |--------------------------------------------------------------------------
    */
    private array $collections = [

        'luxury' => [
            'name'        => 'عبايات فخمة',
            'description' => 'تصاميم راقية تجمع بين الجمال والفخامة',
            'banner'      => '/images/collection-luxury.jpg',
        ],

        'daily' => [
            'name'        => 'عبايات يومية',
            'description' => 'أناقة مريحة لكل يوم جميل',
            'banner'      => '/images/collection-daily.jpg',
        ],

        'events' => [
            'name'        => 'عبايات مناسبات',
            'description' => 'كوني الأجمل في كل مناسبة خاصة',
            'banner'      => '/images/collection-events.jpg',
        ],

        'winter' => [
            'name'        => 'عبايات شتوية',
            'description' => 'دفء وأناقة في كل موسم',
            'banner'      => '/images/collection-winter.jpg',
        ],
    ];

    /*
    |--------------------------------------------------------------------------
    | منتجات وهمية لكل مجموعة - استبدليها لاحقاً بـ DB::table أو Eloquent
    |--------------------------------------------------------------------------
    */
    private array $products = [

        'luxury' => [
            ['name' => 'عباية ملكية سوداء',   'price' => 850, 'image' => '/images/abaya1-1.jpg'],
            ['name' => 'عباية سوداء مطرزة',   'price' => 920, 'image' => '/images/abaya1-2.jpg'],
            ['name' => 'عباية ذهبية فاخرة',   'price' => 1100, 'image' => '/images/abaya2-1.jpg'],
        ],

        'daily' => [
            ['name' => 'عباية يومية كلاسيك',  'price' => 450, 'image' => '/images/abaya2-1.jpg'],
            ['name' => 'عباية مريحة بيج',     'price' => 380, 'image' => '/images/abaya2-2.jpg'],
            ['name' => 'عباية كاجوال ناعمة',  'price' => 420, 'image' => '/images/abaya3-1.jpg'],
        ],

        'events' => [
            ['name' => 'عباية سهرة فاخرة',    'price' => 980, 'image' => '/images/abaya3-1.jpg'],
            ['name' => 'عباية زفاف راقية',    'price' => 1250, 'image' => '/images/abaya3-2.jpg'],
            ['name' => 'عباية مطرزة للأعراس', 'price' => 1400, 'image' => '/images/abaya1-1.jpg'],
        ],

        'winter' => [
            ['name' => 'عباية شتوية دافئة',   'price' => 650, 'image' => '/images/abaya1-2.jpg'],
            ['name' => 'عباية صوف فاخر',      'price' => 720, 'image' => '/images/abaya2-2.jpg'],
            ['name' => 'عباية كاشمير بني',    'price' => 880, 'image' => '/images/abaya3-2.jpg'],
        ],
    ];

    /*
    |--------------------------------------------------------------------------
    | show() - عرض صفحة المجموعة
    |--------------------------------------------------------------------------
    */
    public function show(string $slug)
    {
        // إذا المجموعة غير موجودة - أعد للرئيسية
        if (!isset($this->collections[$slug])) {
            return redirect('/');
        }

        $collection = $this->collections[$slug];
        $products   = $this->products[$slug] ?? [];

        return view('collection', compact('collection', 'products'));
    }
}