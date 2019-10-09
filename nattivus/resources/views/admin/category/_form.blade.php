@include('admin.layouts.forms._name_select_pluck', [
    'label' => 'Categoria',
    'name' => 'category_id',
    'select' => $categories
])
<div class="row">
@include('admin.layouts.forms._image',[
    'label' => 'Banner',
    'size' => '106px de altura',
    'name' => 'banner',
    'path' => 'category',
    'merge' => true,
    'route_destroy' => route('admin.category.destroyFile', ['id' => isset($dados->id) ? $dados->id : null, 'name' => 'banner'])
])
@include('admin.layouts.forms._image',[
    'label' => 'Imagem',
    'size' => '106px de altura',
    'name' => 'image',
    'path' => 'category',
    'merge' => true,
    'route_destroy' => route('admin.category.destroyFile', ['id' => isset($dados->id) ? $dados->id : null, 'name' => 'image'])
])
</div>
<div class="row">
@include('admin.layouts.forms._image',[
    'label' => 'Ícone',
    'size' => '106px de altura',
    'name' => 'icon',
    'path' => 'category',
    'merge' => true,
    'route_destroy' => route('admin.category.destroyFile', ['id' => isset($dados->id) ? $dados->id : null, 'name' => 'icon'])
])
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('featured_home', 'Destaque Home *') !!}
            {!! Form::select('featured_home', ['n' => 'Não', 'y' => 'Sim'], null, ['class'=>'form-control', 'required' => 'required']) !!}
        </div>
    </div>
</div>
@include('admin.layouts.forms._active_featured_order')
@include('admin.layouts.forms._seo_keywords_description')
@include('admin.layouts.forms._seo_link')
@include('admin.layouts.forms._description')