<div class="row">
    <div class="col-sm-12 text-right">
        <a href="{{ route('admin.product.product.technical-specification.index', ['id' => $idRoute]) }}" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-file-text"></i> Especificação Técnica</a>
        <a href="{{ route('admin.product.product.related.index', ['id' => $idRoute]) }}" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-mobile-phone"></i> Relacionados</a>
        <a href="{{ route('admin.product.product.tags.index', ['id' => $idRoute]) }}" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-tags"></i> Tags</a>
        <a href="{{ route('admin.product.product.category.index', ['id' => $idRoute]) }}" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-list-ul"></i> Categorias</a>
        <a href="{{ route('admin.product.product.gallery.index', ['id' => $idRoute]) }}" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-image"></i> Galeria</a>
        <a href="{{ $routeBack }}" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-undo"></i> Voltar</a>
    </div>
</div>