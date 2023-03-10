@extends('admin.layout.admin')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="header">
                <div class="header-body">
                    Добавить Страницу <a href="" class="btn btn-primary btn-sm" style="margin-left: 900px"> Назад </a>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="companiesListPane" role="tabpanel" aria-labelledby="companiesListTab">
                    <div class="card" data-list>
                        <form action="{{route('add_pages_to_db')}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="card col-12 col-lg-7 m-3">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="kaz" role="tabpanel">
                                                <div class="mb-4">
                                                    <label class="required form-label">Заголовок</label>
                                                    <input type="text" class="form-control form-control-solid" name="title" placeholder="Введите заголовок" required>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="required form-label">Содержание</label>
                                                    <textarea name="content" ></textarea>
                                                    <script>
                                                        CKEDITOR.replace( 'content' );
                                                    </script>
{{--                                                        <script type="text/javascript">--}}
{{--                                                            function myFunction() {--}}
{{--                                                               var content=CKEDITOR.instances.editor1.getData();--}}
{{--                                                            }--}}
{{--                                                        </script>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="mb-4">
                                            <label class="required form-label">Отображать</label>
                                            <select class="form-control form-control-solid" name="visible">
                                                <option value="1">Да</option>
                                                <option value="0">Нет</option>
                                            </select><!---->
                                        </div>
                                        <button class="btn btn-primary"  type="submit" onclick="myFunction()"> Сохранить</button>
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
