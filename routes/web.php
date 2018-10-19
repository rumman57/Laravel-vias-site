<?php

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

  /***************Fron View *****************/

 Route::group(['middleware'=>'language'], function(){
  
   Route::get('/',[
      'uses'=>'HomeController@getIndex',
      'as'  => 'home.index'
  ]);
   Route::get('/generalconditions',[
      'uses'=>'PagesController@getGeneralConditions',
      'as'  => 'pages.generalconditions'
  ]);
  Route::get('/faq',[
      'uses'=>'PagesController@getFaqPage',
      'as'  => 'pages.faq'
  ]); 
  Route::get('/urgent-apply',[
      'uses'=>'PagesController@getUrgentApplyPage',
      'as'  => 'pages.urgent.apply'
  ]);
  Route::get('/standard-apply',[
      'uses'=>'PagesController@getStandardApplyPage',
      'as'  => 'pages.standard.apply'
  ]);
  Route::get('/ongoing',[
      'uses'=>'PagesController@getOngoingPage',
      'as'  => 'pages.ongoing'
  ]);
  Route::get('/apply-now',[
      'uses'=>'PagesController@getApplyNowPage',
      'as'  => 'pages.apply.now'
  ]);
  Route::get('/contact',[
      'uses'=>'PagesController@getContactPage',
      'as'  => 'pages.contact'
  ]);
  Route::post('/contact',[
      'uses'=>'PagesController@postContactPage',
      'as'  => 'pages.contact'
  ]);
  Route::get('/about',[
      'uses'=>'PagesController@getAboutPage',
      'as'  => 'pages.about'
  ]);
  Route::get('/testimonials',[
      'uses'=>'PagesController@getTestimonialPage',
      'as'  => 'pages.testimonials'
  ]);
  Route::post('/apply/step-one',[
      'uses'=>'ApplyController@postApply',
      'as'  => 'apply.stepone'
  ]); 
  Route::get('/apply/personalinfo',[
      'uses'=>'ApplyController@getPersonalInfo',
      'as'  => 'apply.personalinfo'
  ]);
  Route::post('/apply/personalinfo',[
      'uses'=>'ApplyController@postPersonalInfo',
      'as'  => 'apply.personalinfo'
  ]);
  
  Route::get('/apply/urgent-apply-confirmation',[
      'uses'=>'ApplyController@getUrgentApplyConfirmation',
      'as'  => 'apply.urgentapplyconfirmation'
  ]);
  Route::post('/ongoing-applicatin-status',[
      'uses'=>'ApplyController@postOngoingApplicationStatus',
      'as'  => 'apply.ongoingstatus'
  ]);
  /*Route::get('/apply/activate',[
      'uses'=>'ApplyController@getApplyActivate',
      'as'  => 'apply.applyactivate'
  ]);*/

 });


 /********For Language Switcher ********/
 
   Route::get('/lang/{lang?}',[
      'uses'=>'LangSwitcherController@LangSwitcher',
      'as'  => 'lang.switch'
  ]);

 /********For Language Switcher ********/



Route::group(['prefix'=>'myadmin','middleware'=>'auth'],function(){

Route::get('/',[
  'uses'=>'AdminController@getIndex',
  'as'  => 'admin.index'
]);
Route::get('/logout',[
  'uses'=>'AdminController@getLogOut',
  'as'  => 'admin.logout'
]);

Route::get('/new-application',[
  'uses'=>'AdminApplyController@getNewApplicationLists',
  'as'  => 'new.application'
]);

Route::get('/complete-application',[
  'uses'=>'AdminApplyController@getCompleteApplicationLists',
  'as'  => 'complete.application'
]);

Route::get('/single-new-application/{id}',[
  'uses'=>'AdminApplyController@getNewApplicationSinglePage',
  'as'  => 'new.details.single'
]);

Route::get('/make-application-complete/{id}',[
  'uses'=>'AdminApplyController@getMakeApplicationComplete',
  'as'  => 'make.application.complete'
]);

Route::get('/make-application-incomplete/{id}',[
  'uses'=>'AdminApplyController@getMakeApplicationInComplete',
  'as'  => 'make.application.incomplete'
]);

Route::delete('/application/{id}',[
  'uses'=>'AdminApplyController@destroy',
  'as'  => 'delete.application'
]);

/**For Social Site Link Start**/
Route::resource('social-site','SocialSiteController');
   /**For Social Site Link End**/


  /******Country*********/


Route::get('/all-countries',[
  'uses'=>'CountryController@getAllCountries',
  'as'  => 'all.countries'
]);
 Route::get('/all-block-visa-countries',[
  'uses'=>'CountryController@getBlockVisaCountries',
  'as'  => 'all.block.countries'
]);
  Route::get('/all-exempt-countries',[
  'uses'=>'CountryController@getExemptVisaCountries',
  'as'  => 'all.exempt.countries'
]);
Route::get('/add-country',[
  'uses'=>'CountryController@getAddCountry',
  'as'  => 'add.country'
]);

Route::post('/add-country',[
  'uses'=>'CountryController@postAddCountry',
  'as'  => 'add.country'
]);

Route::get('/make-country-exempt/{id}',[
  'uses'=>'CountryController@getMakeCountryExempt',
  'as'  => 'country.exempt'
]);

Route::get('/remove-country-exempt/{id}',[
  'uses'=>'CountryController@getRemoveCountryExempt',
  'as'  => 'remove.country.exempt'
]);

Route::get('/make-country-block/{id}',[
  'uses'=>'CountryController@getMakeCountryBlock',
  'as'  => 'country.block'
]);

Route::get('/remove-country-block/{id}',[
  'uses'=>'CountryController@getRemoveCountryBlock',
  'as'  => 'remove.country.block'
]);

Route::get('/manage-specific-country/{id}',[
  'uses'=>'CountryController@getManageSpecificPassport',
  'as'  => 'manage.specific.country'
]);
Route::put('/manage-specific-country/{id}',[
  'uses'=>'CountryController@putManageSpecificPassport',
  'as'  => 'manage.specific.country'
]);


Route::delete('/country/{id}',[
  'uses'=>'CountryController@destroy',
  'as'  => 'delete.country'
]);
  

  /*****Country End*******/


/*********  Site Option OptionController Start  ********/
 Route::get('/global-site-option',[
  'uses'=>'OptionController@getGlobalSiteOption',
  'as'  => 'global.site.options'
]);
  Route::post('/global-site-option',[
  'uses'=>'OptionController@postGlobalSiteOption',
  'as'  => 'global.site.options'
]);
 /********** Site Option OptionController Start *****/

 /*******Admin Profile******/
Route::get('/profile',[
  'uses'=>'AdminController@getAdminProfile',
  'as'  => 'admin.profile'
]);
Route::post('/profile',[
  'uses'=>'AdminController@postChangeAdminEmail',
  'as'  => 'changeadmin.email'
]);
Route::post('/profile-change-password',[
  'uses'=>'AdminController@postChangePassword',
  'as'  => 'changeadmin.password'
]);

 /*******Admin Profile**********/

  /*******Image Controller Start**********/
Route::get('/get-image',[
  'uses'=>'ImageController@getImagepage',
  'as'  => 'get.image'
]);
Route::post('/get-image',[
  'uses'=>'ImageController@postStoreImage',
  'as'  => 'get.image'
]);
Route::get('/showimages',[
  'uses'=>'ImageController@getShowImage',
  'as'  => 'show.image'
]);
Route::delete('deleteimage/{id}',['uses'=>'ImageController@DeleteImage', 'as'=>'image.delete']);
  /*******Image Controller End**********/


});


/***Login & Register Start*****/ 
Route::group(['prefix'=>'myadmin','middleware'=>'guest'],function(){

Route::get('/login',[
  'uses'=>'AdminController@getLogin',
  'as'  => 'admin.login'
]);
Route::post('/login',[
  'uses'=>'AdminController@postLogin',
  'as'  => 'admin.login'
]);
/*Route::get('/register',[
  'uses'=>'AdminController@getRegistrationForm',
  'as'  => 'admin.register'
]);
Route::post('/register',[
  'uses'=>'AdminController@postRegister',
  'as'  => 'admin.register'
]);*/

});















 /****************    Admin Panel ***************/

