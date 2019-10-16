<?php

namespace AgenciaS3\Http\Controllers\Site;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\SiteRequest;
use AgenciaS3\Repositories\CatalogRepository;
use AgenciaS3\Services\SEOService;

class CatalogController extends Controller
{

    protected $SEOService;

    protected $repository;

    public function __construct(SEOService $SEOService,
                                CatalogRepository $repository)
    {
        $this->SEOService = $SEOService;
        $this->repository = $repository;
    }

    public function index(SiteRequest $request)
    {
        $seoPage = $this->SEOService->getSeoPageSession(3);
        $this->SEOService->getPage($seoPage);

        $catalogs = $this->repository->getActive(6);

        return view('site.catalog.index', compact('seoPage', 'catalogs'));
    }

}
