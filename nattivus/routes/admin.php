<?php

//Auth::routes();
Route::redirect('/admin', '/nattivus/admin/login');

// Authentication Routes...
Route::get('admin/login', 'Admin\Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Admin\Auth\LoginController@login');
Route::post('admin/logout', 'Admin\Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('admin/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('admin/password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('admin/password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('admin/password/reset', 'Admin\Auth\ResetPasswordController@reset');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {

    // HOME
    Route::get('/home', ['as' => 'home.index', 'uses' => 'HomeController@index']);

    //BANNERS
    Route::group(['prefix' => 'banner', 'as' => 'banner.', 'namespace' => 'Banner'], function () {
        //desktop
        Route::group(['prefix' => 'desktop', 'as' => 'desktop.'], function () {
            Route::get('', ['as' => 'index', 'uses' => 'BannerController@index']);
            Route::get('create', ['as' => 'create', 'uses' => 'BannerController@create']);
            Route::post('store', ['as' => 'store', 'uses' => 'BannerController@store']);
            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'BannerController@edit']);
            Route::post('update/{id}', ['as' => 'update', 'uses' => 'BannerController@update']);
            Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'BannerController@destroy']);
            Route::get('active/{id}', ['as' => 'active', 'uses' => 'BannerController@active']);
            Route::get('destroyFile/{id}/{name}', ['as' => 'destroyFile', 'uses' => 'BannerController@destroyFile']);
        });

        //MOBILE
        Route::group(['prefix' => 'mobile', 'as' => 'mobile.'], function () {
            Route::get('', ['as' => 'index', 'uses' => 'BannerMobileController@index']);
            Route::get('create', ['as' => 'create', 'uses' => 'BannerMobileController@create']);
            Route::post('store', ['as' => 'store', 'uses' => 'BannerMobileController@store']);
            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'BannerMobileController@edit']);
            Route::post('update/{id}', ['as' => 'update', 'uses' => 'BannerMobileController@update']);
            Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'BannerMobileController@destroy']);
            Route::get('active/{id}', ['as' => 'active', 'uses' => 'BannerMobileController@active']);
            Route::get('destroyFile/{id}/{name}', ['as' => 'destroyFile', 'uses' => 'BannerMobileController@destroyFile']);
        });
    });

    //CATALOG
    Route::group(['prefix' => 'catalog', 'as' => 'catalog.', 'namespace' => 'Catalog'], function () {
        Route::get('', ['as' => 'index', 'uses' => 'CatalogController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'CatalogController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'CatalogController@store']);
        Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'CatalogController@edit']);
        Route::post('update/{id}', ['as' => 'update', 'uses' => 'CatalogController@update']);
        Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'CatalogController@destroy']);
        Route::get('active/{id}', ['as' => 'active', 'uses' => 'CatalogController@active']);
        Route::get('destroyFile/{id}/{name}', ['as' => 'destroyFile', 'uses' => 'CatalogController@destroyFile']);
    });

    //TEAM
    Route::group(['prefix' => 'team', 'as' => 'team.', 'namespace' => 'Team'], function () {
        Route::get('', ['as' => 'index', 'uses' => 'TeamController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'TeamController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'TeamController@store']);
        Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'TeamController@edit']);
        Route::post('update/{id}', ['as' => 'update', 'uses' => 'TeamController@update']);
        Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'TeamController@destroy']);
        Route::get('active/{id}', ['as' => 'active', 'uses' => 'TeamController@active']);
        Route::get('destroyFile/{id}/{name}', ['as' => 'destroyFile', 'uses' => 'TeamController@destroyFile']);
    });

    //CATEGORY
    Route::group(['prefix' => 'category', 'as' => 'category.', 'namespace' => 'Category'], function () {
        Route::get('', ['as' => 'index', 'uses' => 'CategoryController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'CategoryController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'CategoryController@store']);
        Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'CategoryController@edit']);
        Route::post('update/{id}', ['as' => 'update', 'uses' => 'CategoryController@update']);
        Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'CategoryController@destroy']);
        Route::get('active/{id}', ['as' => 'active', 'uses' => 'CategoryController@active']);
        Route::get('destroyFile/{id}/{name}', ['as' => 'destroyFile', 'uses' => 'CategoryController@destroyFile']);
    });


    //PRODUCTS
    Route::group(['prefix' => 'product', 'as' => 'product.', 'namespace' => 'Product'], function () {

        //TAG
        Route::group(['prefix' => 'tag', 'as' => 'tag.'], function () {
            Route::get('', ['as' => 'index', 'uses' => 'TagProductController@index']);
            Route::get('create', ['as' => 'create', 'uses' => 'TagProductController@create']);
            Route::post('store', ['as' => 'store', 'uses' => 'TagProductController@store']);
            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'TagProductController@edit']);
            Route::post('update/{id}', ['as' => 'update', 'uses' => 'TagProductController@update']);
            Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'TagProductController@destroy']);
            Route::get('active/{id}', ['as' => 'active', 'uses' => 'TagProductController@active']);
        });

        //TECHNICAL SPECIFICATION
        Route::group(['prefix' => 'technical-specification', 'as' => 'technical-specification.'], function () {
            Route::get('', ['as' => 'index', 'uses' => 'TechnicalSpecificationController@index']);
            Route::get('create', ['as' => 'create', 'uses' => 'TechnicalSpecificationController@create']);
            Route::post('store', ['as' => 'store', 'uses' => 'TechnicalSpecificationController@store']);
            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'TechnicalSpecificationController@edit']);
            Route::post('update/{id}', ['as' => 'update', 'uses' => 'TechnicalSpecificationController@update']);
            Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'TechnicalSpecificationController@destroy']);
            Route::get('active/{id}', ['as' => 'active', 'uses' => 'TechnicalSpecificationController@active']);
        });

        Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
            Route::get('', ['as' => 'index', 'uses' => 'ProductController@index']);
            Route::get('create', ['as' => 'create', 'uses' => 'ProductController@create']);
            Route::post('store', ['as' => 'store', 'uses' => 'ProductController@store']);
            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'ProductController@edit']);
            Route::post('update/{id}', ['as' => 'update', 'uses' => 'ProductController@update']);
            Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'ProductController@destroy']);
            Route::get('active/{id}', ['as' => 'active', 'uses' => 'ProductController@active']);
            Route::get('destroyFile/{id}/{name}', ['as' => 'destroyFile', 'uses' => 'ProductController@destroyFile']);

            //GALERY
            Route::group(['prefix' => 'gallery', 'as' => 'gallery.'], function () {
                Route::get('{id}', ['as' => 'index', 'uses' => 'ProductImageController@index']);
                Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'ProductImageController@destroy']);
                Route::post('upload/{id}', ['as' => 'upload', 'uses' => 'ProductImageController@upload']);
                Route::post('updateLabel/{id}', ['as' => 'updateLabel', 'uses' => 'ProductImageController@updateLabel']);
                Route::post('cover/{id}', ['as' => 'cover', 'uses' => 'ProductImageController@cover']);
                Route::post('order/{id}', ['as' => 'order', 'uses' => 'ProductImageController@order']);
                Route::post('store', ['as' => 'store', 'uses' => 'ProductImageController@store']);
                Route::get('destroyGallery/{id}', ['as' => 'destroyGallery', 'uses' => 'ProductImageController@destroyAll']);
            });

            //TAGS
            Route::group(['prefix' => 'tags', 'as' => 'tags.'], function () {
                Route::get('{id}', ['as' => 'index', 'uses' => 'ProductTagController@index']);
                Route::post('store', ['as' => 'store', 'uses' => 'ProductTagController@store']);
                Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'ProductTagController@destroy']);
            });

            //CATEGORY
            Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
                Route::get('{id}', ['as' => 'index', 'uses' => 'ProductCategoryController@index']);
                Route::post('store', ['as' => 'store', 'uses' => 'ProductCategoryController@store']);
                Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'ProductCategoryController@destroy']);
                Route::get('main/{id}', ['as' => 'main', 'uses' => 'ProductCategoryController@main']);
            });

            //TECHNICAL SPECIFICATION
            Route::group(['prefix' => 'technical-specification', 'as' => 'technical-specification.'], function () {
                Route::get('{id}', ['as' => 'index', 'uses' => 'ProductTechnicalSpecificationController@index']);
                Route::post('store', ['as' => 'store', 'uses' => 'ProductTechnicalSpecificationController@store']);
                Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'ProductTechnicalSpecificationController@destroy']);
            });

            //RELATED
            Route::group(['prefix' => 'related', 'as' => 'related.'], function () {
                Route::get('{id}', ['as' => 'index', 'uses' => 'ProductRelatedController@index']);
                Route::post('store', ['as' => 'store', 'uses' => 'ProductRelatedController@store']);
                Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'ProductRelatedController@destroy']);
                Route::get('/productSelect/{id}', ['as' => 'productSelect', 'uses' => 'ProductRelatedController@productSelect']);
            });

            //FILES
            Route::group(['prefix' => 'file', 'as' => 'file.'], function () {
                Route::get('{id}', ['as' => 'index', 'uses' => 'ProductFileController@index']);
                Route::get('create/{id}', ['as' => 'create', 'uses' => 'ProductFileController@create']);
                Route::post('store', ['as' => 'store', 'uses' => 'ProductFileController@store']);
                Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'ProductFileController@edit']);
                Route::post('update/{id}', ['as' => 'update', 'uses' => 'ProductFileController@update']);
                Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'ProductFileController@destroy']);
                Route::get('active/{id}', ['as' => 'active', 'uses' => 'ProductFileController@active']);
                Route::get('destroyFile/{id}/{name}', ['as' => 'destroyFile', 'uses' => 'ProductFileController@destroyFile']);
            });

            //TEXTS
            Route::group(['prefix' => 'text', 'as' => 'text.'], function () {
                Route::get('{id}', ['as' => 'index', 'uses' => 'ProductTextController@index']);
                Route::get('create/{id}', ['as' => 'create', 'uses' => 'ProductTextController@create']);
                Route::post('store', ['as' => 'store', 'uses' => 'ProductTextController@store']);
                Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'ProductTextController@edit']);
                Route::post('update/{id}', ['as' => 'update', 'uses' => 'ProductTextController@update']);
                Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'ProductTextController@destroy']);
                Route::get('active/{id}', ['as' => 'active', 'uses' => 'ProductTextController@active']);
                Route::get('destroyFile/{id}/{name}', ['as' => 'destroyFile', 'uses' => 'ProductTextController@destroyFile']);
                Route::get('destroyFile/{id}/{name}', ['as' => 'destroyFile', 'uses' => 'ProductTextController@destroyFile']);
            });

            //CLIENTS
            Route::group(['prefix' => 'client', 'as' => 'client.'], function () {
                Route::get('{id}', ['as' => 'index', 'uses' => 'ProductClientController@index']);
                Route::post('store', ['as' => 'store', 'uses' => 'ProductClientController@store']);
                Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'ProductClientController@destroy']);
            });
        });


    });

    //BLOG
    Route::group(['prefix' => 'blog', 'as' => 'blog.', 'namespace' => 'Blog'], function () {

        //TAGS
        Route::group(['prefix' => 'tag', 'as' => 'tag.'], function () {
            Route::get('', ['as' => 'index', 'uses' => 'TagController@index']);
            Route::get('create', ['as' => 'create', 'uses' => 'TagController@create']);
            Route::post('store', ['as' => 'store', 'uses' => 'TagController@store']);
            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'TagController@edit']);
            Route::post('update/{id}', ['as' => 'update', 'uses' => 'TagController@update']);
            Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'TagController@destroy']);
            Route::get('active/{id}', ['as' => 'active', 'uses' => 'TagController@active']);
        });

        //POSTS
        Route::group(['prefix' => 'post', 'as' => 'post.'], function () {
            Route::get('', ['as' => 'index', 'uses' => 'PostController@index']);
            Route::get('create', ['as' => 'create', 'uses' => 'PostController@create']);
            Route::post('store', ['as' => 'store', 'uses' => 'PostController@store']);
            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'PostController@edit']);
            Route::post('update/{id}', ['as' => 'update', 'uses' => 'PostController@update']);
            Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'PostController@destroy']);
            Route::get('active/{id}', ['as' => 'active', 'uses' => 'PostController@active']);

            //TAGS
            Route::group(['prefix' => 'tags', 'as' => 'tags.'], function () {
                Route::get('{id}', ['as' => 'index', 'uses' => 'PostTagController@index']);
                Route::post('store', ['as' => 'store', 'uses' => 'PostTagController@store']);
                Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'PostTagController@destroy']);
            });

            //GALERY
            Route::group(['prefix' => 'gallery', 'as' => 'gallery.'], function () {
                Route::get('{id}', ['as' => 'index', 'uses' => 'PostImageController@index']);
                Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'PostImageController@destroy']);
                Route::post('upload/{id}', ['as' => 'upload', 'uses' => 'PostImageController@upload']);
                Route::post('updateLabel/{id}', ['as' => 'updateLabel', 'uses' => 'PostImageController@updateLabel']);
                Route::post('cover/{id}', ['as' => 'cover', 'uses' => 'PostImageController@cover']);
                Route::post('order/{id}', ['as' => 'order', 'uses' => 'PostImageController@order']);
                Route::post('store', ['as' => 'store', 'uses' => 'PostImageController@store']);
            });

        });
    });

    //NEWSLETTER
    Route::group(['prefix' => 'newsletter', 'as' => 'newsletter.'], function () {
        Route::get('', ['as' => 'index', 'uses' => 'NewsletterController@index']);
        Route::get('show/{id}', ['as' => 'show', 'uses' => 'NewsletterController@show']);
        Route::post('update/{id}', ['as' => 'update', 'uses' => 'NewsletterController@update']);
        Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'NewsletterController@destroy']);
        Route::get('export', ['as' => 'export', 'uses' => 'NewsletterController@export']);
        Route::get('destroyAllMessages', ['as' => 'destroyAllMessages', 'uses' => 'NewsletterController@destroyAllMessages']);
    });

    //CONTACT
    Route::group(['prefix' => 'contact', 'as' => 'contact.', 'namespace' => 'Contact'], function () {
        Route::get('', ['as' => 'index', 'uses' => 'ContactController@index']);
        Route::get('show/{id}', ['as' => 'show', 'uses' => 'ContactController@show']);
        Route::post('update/{id}', ['as' => 'update', 'uses' => 'ContactController@update']);
        Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'ContactController@destroy']);
        Route::get('destroyAllMessages', ['as' => 'destroyAllMessages', 'uses' => 'ContactController@destroyAllMessages']);
        Route::get('export', ['as' => 'export', 'uses' => 'ContactController@export']);
    });

    //BUDGET
    Route::group(['prefix' => 'budget', 'as' => 'budget.', 'namespace' => 'Budget'], function () {
        Route::get('', ['as' => 'index', 'uses' => 'BudgetController@index']);
        Route::get('show/{id}', ['as' => 'show', 'uses' => 'BudgetController@show']);
        Route::post('update/{id}', ['as' => 'update', 'uses' => 'BudgetController@update']);
        Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'BudgetController@destroy']);
        Route::get('destroyAllMessages', ['as' => 'destroyAllMessages', 'uses' => 'BudgetController@destroyAllMessages']);
        Route::get('export', ['as' => 'export', 'uses' => 'BudgetController@export']);
    });

    //WORK
    Route::group(['prefix' => 'work', 'as' => 'work.', 'namespace' => 'Work'], function () {
        Route::get('', ['as' => 'index', 'uses' => 'WorkController@index']);
        Route::get('show/{id}', ['as' => 'show', 'uses' => 'WorkController@show']);
        Route::post('update/{id}', ['as' => 'update', 'uses' => 'WorkController@update']);
        Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'WorkController@destroy']);
        Route::get('destroyAllMessages', ['as' => 'destroyAllMessages', 'uses' => 'WorkController@destroyAllMessages']);
        Route::get('export', ['as' => 'export', 'uses' => 'WorkController@export']);
    });

    //CONFIGURATIONS
    Route::group(['prefix' => 'configuration', 'as' => 'configuration.', 'namespace' => 'Configuration'], function () {

        //PAGE
        Route::group(['prefix' => 'page', 'as' => 'page.', 'namespace' => 'Page'], function () {
            Route::get('', ['as' => 'index', 'uses' => 'PageController@index']);
            Route::get('create', ['as' => 'create', 'uses' => 'PageController@create']);
            Route::post('store', ['as' => 'store', 'uses' => 'PageController@store']);
            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'PageController@edit']);
            Route::post('update/{id}', ['as' => 'update', 'uses' => 'PageController@update']);
            Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'PageController@destroy']);
            Route::get('active/{id}', ['as' => 'active', 'uses' => 'PageController@active']);
            Route::get('destroyFile/{id}/{name}', ['as' => 'destroyFile', 'uses' => 'PageController@destroyFile']);

            //GALERY
            Route::group(['prefix' => 'gallery', 'as' => 'gallery.'], function () {
                Route::get('{id}', ['as' => 'index', 'uses' => 'PageImageController@index']);
                Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'PageImageController@destroy']);
                Route::post('upload/{id}', ['as' => 'upload', 'uses' => 'PageImageController@upload']);
                Route::post('updateLabel/{id}', ['as' => 'updateLabel', 'uses' => 'PageImageController@updateLabel']);
                Route::post('cover/{id}', ['as' => 'cover', 'uses' => 'PageImageController@cover']);
                Route::post('order/{id}', ['as' => 'order', 'uses' => 'PageImageController@order']);
                Route::post('store', ['as' => 'store', 'uses' => 'PageImageController@store']);
                Route::get('destroyGallery/{id}', ['as' => 'destroyGallery', 'uses' => 'PageImageController@destroyAll']);
            });

            //ITEM
            Route::group(['prefix' => 'item', 'as' => 'item.'], function () {
                Route::get('/{id}', ['as' => 'index', 'uses' => 'PageItemController@index']);
                Route::get('create/{id}', ['as' => 'create', 'uses' => 'PageItemController@create']);
                Route::post('store', ['as' => 'store', 'uses' => 'PageItemController@store']);
                Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'PageItemController@edit']);
                Route::post('update/{id}', ['as' => 'update', 'uses' => 'PageItemController@update']);
                Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'PageItemController@destroy']);
                Route::get('active/{id}', ['as' => 'active', 'uses' => 'PageItemController@active']);
                Route::get('destroyFile/{id}/{name}', ['as' => 'destroyFile', 'uses' => 'PageItemController@destroyFile']);
            });
        });

        //KEYWORDS
        Route::group(['prefix' => 'keyword', 'as' => 'keyword.', 'namespace' => 'Keyword'], function () {
            Route::get('', ['as' => 'index', 'uses' => 'KeywordController@index']);
            Route::get('create', ['as' => 'create', 'uses' => 'KeywordController@create']);
            Route::post('store', ['as' => 'store', 'uses' => 'KeywordController@store']);
            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'KeywordController@edit']);
            Route::post('update/{id}', ['as' => 'update', 'uses' => 'KeywordController@update']);
            Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'KeywordController@destroy']);
            Route::get('active/{id}', ['as' => 'active', 'uses' => 'KeywordController@active']);
        });

        //SEO PAGES
        Route::group(['prefix' => 'seo-page', 'as' => 'seo-page.', 'namespace' => 'SeoPage'], function () {
            Route::get('', ['as' => 'index', 'uses' => 'SeoPageController@index']);
            Route::get('create', ['as' => 'create', 'uses' => 'SeoPageController@create']);
            Route::post('store', ['as' => 'store', 'uses' => 'SeoPageController@store']);
            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'SeoPageController@edit']);
            Route::post('update/{id}', ['as' => 'update', 'uses' => 'SeoPageController@update']);
            Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'SeoPageController@destroy']);
            Route::get('active/{id}', ['as' => 'active', 'uses' => 'SeoPageController@active']);
        });

        //FORMS
        Route::group(['prefix' => 'form', 'as' => 'form.', 'namespace' => 'Form'], function () {
            Route::get('', ['as' => 'index', 'uses' => 'FormController@index']);
            Route::get('create', ['as' => 'create', 'uses' => 'FormController@create']);
            Route::post('store', ['as' => 'store', 'uses' => 'FormController@store']);
            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'FormController@edit']);
            Route::post('update/{id}', ['as' => 'update', 'uses' => 'FormController@update']);
            Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'FormController@destroy']);
            Route::get('active/{id}', ['as' => 'active', 'uses' => 'FormController@active']);

            //EMAILS
            Route::group(['prefix' => 'email', 'as' => 'email.'], function () {
                Route::get('{id}', ['as' => 'index', 'uses' => 'FormEmailController@index']);
                Route::post('store', ['as' => 'store', 'uses' => 'FormEmailController@store']);
                Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'FormEmailController@destroy']);
            });
        });

        //CONFIGURATIONS
        Route::group(['prefix' => 'configuration', 'as' => 'configuration.', 'namespace' => 'Configuration'], function () {
            Route::get('', ['as' => 'index', 'uses' => 'ConfigurationController@index']);
            Route::get('create', ['as' => 'create', 'uses' => 'ConfigurationController@create']);
            Route::post('store', ['as' => 'store', 'uses' => 'ConfigurationController@store']);
            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'ConfigurationController@edit']);
            Route::post('update/{id}', ['as' => 'update', 'uses' => 'ConfigurationController@update']);
            Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'ConfigurationController@destroy']);
        });

        //USERS
        Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'User'], function () {
            Route::get('', ['as' => 'index', 'uses' => 'UserController@index']);
            Route::get('create', ['as' => 'create', 'uses' => 'UserController@create']);
            Route::post('store', ['as' => 'store', 'uses' => 'UserController@store']);
            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'UserController@edit']);
            Route::post('update/{id}', ['as' => 'update', 'uses' => 'UserController@update']);
            Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'UserController@destroy']);
            Route::get('active/{id}', ['as' => 'active', 'uses' => 'UserController@active']);
            Route::get('destroyImage/{id}', ['as' => 'destroyImage', 'uses' => 'UserController@destroyImage']);

            Route::group(['prefix' => 'password', 'as' => 'password.'], function () {
                Route::get('{id}', ['as' => 'edit', 'uses' => 'UserPasswordController@edit']);
                Route::post('update/{id}', ['as' => 'update', 'uses' => 'UserPasswordController@update']);
            });
        });
    });

});