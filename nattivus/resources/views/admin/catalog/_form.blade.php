@include('admin.layouts.forms._name')
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('date', 'Data *') !!}
            {!! Form::text('date', null, ['class'=>'form-control', 'data-input-mask' => '99/99/9999', 'data-plugin-datepicker', 'data-plugin-masked-input', 'placeholder' => '__/__/____', 'required' => 'required']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('active', 'Ativo? *') !!}
            {!! Form::select('active', ['y' => 'Sim', 'n' => 'Não'], null, ['class'=>'form-control', 'required' => 'required']) !!}
        </div>
    </div>
</div>
@include('admin.layouts.forms._image',[
    'label' => 'Imagem',
    'size' => '215px X 305px, conteúdo principal centralizado',
    'name' => 'image',
    'path' => 'catalog',
    'route_destroy' => route('admin.catalog.destroyFile', ['id' => isset($dados->id) ? $dados->id : null, 'name' => 'image'])
])
@include('admin.layouts.forms._image',[
    'label' => 'Arquivo',
    'size' => 'PDF | Máx: 10MB',
    'name' => 'file',
    'path' => 'catalog',
    'lightBox' => true,
    'route_destroy' => route('admin.catalog.destroyFile', ['id' => isset($dados->id) ? $dados->id : null, 'name' => 'file'])
])