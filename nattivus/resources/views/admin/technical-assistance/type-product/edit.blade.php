@extends('admin.layouts.app')
@section('content')
    <section role="main" class="content-body">
        @include('admin.layouts._page_header')
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">{{ $config['title'].' > '.$config['action'] }}</h2>
            </header>

            {!! Form::model($dados, ['route'=>['admin.technical-assistance.type-product.update', $dados->id], 'files' => true]) !!}
                <div class="panel-body">

                    @include('admin.layouts._msg')

                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <a href="{{ route('admin.technical-assistance.type-product.index') }}" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-undo"></i> Voltar</a>
                        </div>
                    </div>

                    @include('admin.technical-assistance.type-product._form')

                </div>

                <footer class="panel-footer text-right">
                    <button type="submit"
                            class="btn btn-raised btn-success waves-effect waves-light">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Salvar Alteração
                    </button>
                </footer>
            {!! Form::close() !!}
        </section>
    </section>
@endsection
