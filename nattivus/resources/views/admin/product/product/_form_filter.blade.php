{!! Form::open(['route' => 'admin.product.product.index', 'method' => 'get']) !!}
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::text('name', null, ['class'=>'form-control mb-md', 'placeholder' => 'Produto']) !!}
        </div>
    </div>
    <div class="col-md-12 text-right">
        <a href="{{ route('admin.product.product.index') }}" title="Limpar" class="btn btn-danger mb-md"><i class="fa fa-trash"></i> Limpar</a>
        <button type="submit" class="btn btn-warning mb-md" value="Filtrar Dados"><i class="fa fa-search-plus"></i> Filtrar Dados</button>
    </div>
</div>
{!! Form::close() !!}