@extends('admin.layouts.app')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>{{ $config['title'] }}</h2>
            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{ route('admin.home.index') }}">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Home</span></li>
                    <li><span>{{ $config['title'] }}</span></li>
                </ol>
                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">{{ $config['title'] }}</h2>
            </header>
            <div class="panel-body">

                @include('admin.layouts._msg')
                @include('admin.modals._delete')

                <div class="row">
                    <div class="col-md-12 text-right">
                        <a href="{{ route('admin.budget.export').$config['route']['queryString'] }}" class="mb-xs mt-xs mr-xs btn btn-warning"><i class="fa fa-file-excel-o"></i> Exportar</a><br /><br />
                    </div>
                </div>
                @include('admin.budget._form_filter')

                @if($dados->isEmpty())
                <div class="text-center">
                    <h4>Nenhum registro encontrado ou cadastrado.</h4>
                </div>
                @else
                <table class="table table-no-more table-bordered table-striped mb-0">
                    <thead>
                        <tr>
                            <th>Nome ({{ $dados->total() }})</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th class="text-center">Lido</th>
                            <th class="text-center">Data</th>
                            <th class="col-md-2 text-center">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dados as $row)
                        <tr>
                            <td data-title="Nome">{{ $row->name }}</td>
                            <td data-title="E-mail">{{ $row->email }}</td>
                            <td data-title="Telefone">{{ $row->phone }}</td>
                            <td data-title="Lido" class="text-center"><i class="fa  @if($row->view == 'y') fa-check-square alert-success @else fa-times-circle alert-danger @endif"></i></td>
                            <td data-title="Data" class="text-center">{{ date('d/m/Y h:i', strtotime($row->created_at)) }}</td>
                            <td data-title="Ação" class="actions text-center">
                                <a href="{{ route('admin.budget.show', ['id' => $row->id]) }}" class="btn btn-default white-hover" title="Visualizar"><i class="fa el-icon-search"></i></a>
                                @if(Auth::user()->id == 1)
                                <a href="#modalDestroy" data-route="{{ route('admin.budget.destroy', ['id' => $row->id]) }}" class="excluir remove-row btn btn-danger white" title="Excluir">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $dados->links() }}
                @endif
            </div>
        </section>
    </section>
@endsection
