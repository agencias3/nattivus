@extends('admin.layouts.app')
@section('content')
    <section role="main" class="content-body">
        @include('admin.layouts._page_header')
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">{{ $config['title'].' > '.$config['action'] }}</h2>
            </header>
            {!! Form::open(['route'=>'admin.product.product.category.store', 'files'=> true]) !!}
                <div class="panel-body">
                    @include('admin.layouts._msg')
                    @include('admin.modals._delete')
                    <?php
                    $idRoute = $id;
                    $routeBack = route('admin.product.product.edit', ['id' => $id]);
                    ?>
                    @include('admin.product.product.inc.menu')
                    @include('admin.product.product.category._form')
                </div>
                <footer class="panel-footer text-right">
                    <button type="submit" class="btn btn-raised btn-success waves-effect waves-light">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Salvar
                    </button>
                </footer>
            {!! Form::close() !!}
        </section>
        @if(!$dados->isEmpty())
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">Categorias</h2>
                </header>
                <div class="panel-body">
                    <div class="alert alert-info">
                        Utilizar apenas uma categoria marcada como principal!
                    </div>
                    <table class="table table-no-more table-bordered table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Categoria</th>
                                <th class="text-center">Principal</th>
                                <th class="text-center">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($dados as $row)
                            <tr>
                                <td data-title="Category">
									@if(isset($row->category->category->name))
										{{ $row->category->category->name.' > ' }}
									@endif
                                    @if(isset($row->category->name))
                                        {{ $row->category->name }}
                                    @endif
								</td>
                                <td data-title="Destaque" class="actions text-center">
                                    <div class="switch ativo switch-sm switch-success">
                                        <input type="checkbox" name="switch" data-route="{{ route('admin.product.product.category.main', ['id' => $row->id]) }}" data-plugin-ios-switch @if($row->main == 'y') checked="checked" @endif />
                                    </div>
                                </td>
                                <td data-title="Ação" class="actions text-center">
                                    <a href="#modalDestroy" data-route="{{ route('admin.product.product.category.destroy', ['id' => $row->id]) }}" class="excluir remove-row btn btn-danger white" title="Excluir">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        @endif
    </section>
@endsection
