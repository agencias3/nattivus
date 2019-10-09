<?php

namespace AgenciaS3\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\AgenciaS3\Repositories\UserRepository::class, \AgenciaS3\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ConfigurationRepository::class, \AgenciaS3\Repositories\ConfigurationRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\FormRepository::class, \AgenciaS3\Repositories\FormRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\FormEmailRepository::class, \AgenciaS3\Repositories\FormEmailRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\NewsletterRepository::class, \AgenciaS3\Repositories\NewsletterRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PageRepository::class, \AgenciaS3\Repositories\PageRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PageImageRepository::class, \AgenciaS3\Repositories\PageImageRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\BannerRepository::class, \AgenciaS3\Repositories\BannerRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\BannerMobileRepository::class, \AgenciaS3\Repositories\BannerMobileRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\SeoPageRepository::class, \AgenciaS3\Repositories\SeoPageRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\TagRepository::class, \AgenciaS3\Repositories\TagRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PostRepository::class, \AgenciaS3\Repositories\PostRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PostImageRepository::class, \AgenciaS3\Repositories\PostImageRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PostTagRepository::class, \AgenciaS3\Repositories\PostTagRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\KeywordRepository::class, \AgenciaS3\Repositories\KeywordRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ContactRepository::class, \AgenciaS3\Repositories\ContactRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PageItemRepository::class, \AgenciaS3\Repositories\PageItemRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ProductRepository::class, \AgenciaS3\Repositories\ProductRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ProductImageRepository::class, \AgenciaS3\Repositories\ProductImageRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\WorkRepository::class, \AgenciaS3\Repositories\WorkRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\CategoryRepository::class, \AgenciaS3\Repositories\CategoryRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\TeamRepository::class, \AgenciaS3\Repositories\TeamRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PostProductRepository::class, \AgenciaS3\Repositories\PostProductRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\TagProductRepository::class, \AgenciaS3\Repositories\TagProductRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ProductTagRepository::class, \AgenciaS3\Repositories\ProductTagRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ProductCategoryRepository::class, \AgenciaS3\Repositories\ProductCategoryRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\TechnicalSpecificationRepository::class, \AgenciaS3\Repositories\TechnicalSpecificationRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ProductTechnicalSpecificationRepository::class, \AgenciaS3\Repositories\ProductTechnicalSpecificationRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ProductRelatedRepository::class, \AgenciaS3\Repositories\ProductRelatedRepositoryEloquent::class);
        //:end-bindings:
    }
}
