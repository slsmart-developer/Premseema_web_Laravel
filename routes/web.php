<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ConfirmComponent;
use App\Http\Livewire\AccountComponent;
use App\Http\Livewire\ContactUsComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ProductDetailsComponent;
use App\Http\Livewire\ProductComponent;
use App\Http\Livewire\UsesinskyfruitComponent;
use App\Http\Livewire\UsesinskyfruitMoreDetailsComponent;
use App\Http\Livewire\MediaComponent;
use App\Http\Livewire\HealthTipsComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
Use App\Http\Livewire\Admin\AdminOrderComponent;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class);

Route::get('/cart',CartComponent::class)->name('product.cart');

Route::get('/checkout',CheckoutComponent::class);

Route::get('/confirm',ConfirmComponent::class);

//phRoute::get('/account',AccountComponent::class);

Route::get('/contact',ContactUsComponent::class);

Route::get('/about',AboutComponent::class);

Route::get('/product/{slug}',ProductDetailsComponent::class)->name('product.details');

Route::get('/products',ProductComponent::class);

Route::get('/usesinskyfruit',UsesinskyfruitComponent::class);

Route::get('/more-details',UsesinskyfruitMoreDetailsComponent::class);

Route::get('/media',MediaComponent::class);

Route::get('/health-tips',HealthTipsComponent::class);

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

// for User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

//  for Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function (){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
   // Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
   Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
   Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.addproduct');
   Route::get('/admin/product/edit/{product_slug}',AdminEditProductComponent::class)->name('admin.editproduct');

   Route::get('/admin/orders',AdminOrderComponent::class)->name('admin.orders');
});
