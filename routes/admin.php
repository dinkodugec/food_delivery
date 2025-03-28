<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductGalleryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\DeliveryAreaController;
use App\Http\Controllers\Admin\PaymentGatewaySettingController;
use App\Http\Controllers\Admin\ProductOptionController;
use App\Http\Controllers\Admin\ProductSizeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\WhyChooseUsController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    /** Slider Routes */
    Route::resource('slider', SliderController::class);

    /** Why choose us Routes */
    Route::put('why-choose-title-update', [WhyChooseUsController::class, 'updateTitle'])->name('why-choose-title.update');
    //always register your route before resource controller
    Route::resource('why_choose_us', WhyChooseUsController::class);


    /** Profile Routes */
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');

    Route::put('profile', [ProfileController::class, 'updateProfile'])->name('profile.update');

    Route::put('profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');

      /** Product Category Routes */
      Route::resource('category', CategoryController::class);

        /** Product  Routes */
        Route::resource('product', ProductController::class);

            /** Product Gallery Routes */
    Route::get('product-gallery/{product}', [ProductGalleryController::class, 'index'])->name('product-gallery.show-index');
    Route::resource('product-gallery', ProductGalleryController::class);

      /** Product Size Routes */
      Route::get('product-size/{product}', [ProductSizeController::class, 'index'])->name('product-size.show-index');
      Route::resource('product-size', ProductSizeController::class);

        /** Product Size Routes */
    Route::resource('product-option', ProductOptionController::class);

       /** Delivery Area Routes */
       Route::resource('delivery-area', DeliveryAreaController::class);

     /** Setting Routes */
     Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
     Route::put('/general-setting', [SettingController::class, 'UpdateGeneralSetting'])->name('general-setting.update');

        /** Coupon Routes */
   Route::resource('coupon', CouponController::class);



       /** Payment Gateway Setting Routes */
       Route::get('/payment-gateway-setting', [PaymentGatewaySettingController::class, 'index'])->name('payment-setting.index');
       Route::put('/paypal-setting', [PaymentGatewaySettingController::class, 'paypalSettingUpdate'])->name('paypal-setting.update');
});
