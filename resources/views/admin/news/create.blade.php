@extends('admin.layout.admin')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="header">
                <div class="header-body">
                    Добавить Новости <a href="" class="btn btn-primary btn-sm" style="margin-left: 900px"> Назад </a>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="companiesListPane" role="tabpanel" aria-labelledby="companiesListTab">
                    <div class="card" data-list>
                        <form action="{{route('add_news_to_db')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="card col-12 col-lg-7 m-3">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="kaz" role="tabpanel">
                                                <div class="mb-4">
                                                    <label class="required form-label">Заголовок</label>
                                                     <p style="color: red"> * поле обязательно для заполнения</p>
                                                    <input type="text" class="form-control form-control-solid" name="title" placeholder="Введите заголовок" required>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="required form-label">Автор</label>
                                                    <p style="color: red"> * поле обязательно для заполнения</p>
                                                    <input type="text" class="form-control form-control-solid" name="author" placeholder="Имя автора" required>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="required form-label">Содержание</label>
                                                    <p style="color: red"> * поле обязательно для заполнения</p>
                                                    <textarea name="content" required></textarea>
                                                    <script>
                                                        CKEDITOR.replace( 'content' );
                                                        CKEDITOR.config.allowedContent = true;
                                                    </script>
{{--                                                        <script type="text/javascript">--}}
{{--                                                            function myFunction() {--}}
{{--                                                               var content=CKEDITOR.instances.editor1.getData();--}}
{{--                                                            }--}}
{{--                                                        </script>--}}
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">SEO заголовок</label>
                                                    <input type="text" class="form-control form-control-solid" name="seotitles"><!---->
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">SEO описание</label>
                                                    <input type="text" class="form-control form-control-solid" name="seodescriptions"><!---->
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">SEO ключевые слова</label>
                                                    <input type="text" class="form-control form-control-solid" name="seokeywords">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="mb-4">
                                            <label class="required form-label">Выберите Категорию</label>
                                            <p style="color: red"> * поле обязательно для заполнения</p>
                                            <br>
                                            @foreach($allcategories as $category)
                                            <input value="{{$category->id}}" class="form-check-input"  type="checkbox"  id="flexCheckDefault"  name="сategories[]">
                                                <label class="form-check-label" for="flexCheckDefault">{{$category->name}}</label>    <br>
                                            @endforeach
                                        </div>

                                        <div class="mb-4">
                                            <label class="required form-label">Выберите Рубрику</label>
                                            <p style="color: red"> * поле обязательно для заполнения</p>
                                            <br>
                                            @foreach($allrubric as $rubric)
                                                <input value="{{$rubric->id}}" class="form-check-input"  type="checkbox"  id="flexCheckDefault"  name="rubrics[]">
                                                <label class="form-check-label" for="flexCheckDefault">{{$rubric->name}}</label>    <br>
                                            @endforeach
                                        </div>
                                        <div class="mb-4">
                                            <label class="required form-label">Дата</label>
                                            <p style="color: red"> * поле обязательно для заполнения</p>
                                            <input class="form-control form-control-solid" type="datetime-local" name="date_of_creation" required><!---->
                                        </div>
                                        <div class="mb-4">
                                            <label >Отображать</label>
                                            <p style="color: red"> * поле обязательно для заполнения</p>
                                            <select class="form-control form-control-solid" name="visibility" required>
                                                <option value="1">Да</option>
                                                <option value="0">Нет</option>
                                            </select><!---->
                                        </div>
                                        <button class="btn btn-primary"  type="submit" onclick="myFunction()"> Сохранить</button>
                                    </div>
                                </div>
                                <div class="card col-12 col-lg-4 m-3 h-50">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <label class="required form-label">Изображение</label>
                                            <p style="color: red"> * выберите изображение</p>
                                            <input accept="image/*" type="file" class="form-control form-control-solid" name="image" required>
                                        </div>
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
