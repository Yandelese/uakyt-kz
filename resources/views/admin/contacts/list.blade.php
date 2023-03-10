@extends('admin.layout.admin')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="header">
                <div class="header-body">
                    Общее Положение        <button type="submit" class="btn btn-primary  btn-sm" style="margin-left: 900px">Добавить </button>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="companiesListPane" role="tabpanel" aria-labelledby="companiesListTab">
                    <form method="post">
                        <textarea id="mytextarea">Hello, World!</textarea>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
