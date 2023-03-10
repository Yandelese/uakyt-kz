@extends('admin.layout.admin')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="header">
                <div class="header-body">
                    Добавить Рубрику <a href="" class="btn btn-primary btn-sm" style="margin-left: 900px"> Назад </a>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="companiesListPane" role="tabpanel" aria-labelledby="companiesListTab">
                    <div class="card" data-list>
                        <form action="{{route('add_rubric_to_db')}}" method="post">
                            @method('POST')
                            @csrf
                            <div class="row">
                                <div class="card col-12 col-lg-7 m-3">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="kaz" role="tabpanel">
                                                <div class="mb-4">
                                                    <label class="required form-label">Название Рубрики</label>
                                                    <input type="text" class="form-control form-control-solid" name="name">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="required form-label">Отображать в центральной панели</label>
                                                    <select class="form-control form-control-solid" name="status" >
                                                        <option value="1">Да</option>
                                                        <option value="0">Нет</option>
                                                    </select><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <button class="btn btn-primary" type="submit"> Сохранить</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="card-footer d-flex justify-content-between">
                            {{--                            {{ $row->withQueryString()->links() }}--}}
                            {{--                            <x-admin.select-action/>--}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
