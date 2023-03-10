<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">

                <x-admin.tab-lang-list/>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="kz">

                        <x-admin.form.input :row="$row ?? null" title="Название (kz)" name="name_kz" type="text"/>

                    </div>
                    <div class="tab-pane fade" id="ru">

                        <x-admin.form.input :row="$row ?? null" title="Название (ru)" name="name_ru" type="text"/>

                    </div>
                    <div class="tab-pane fade" id="en">

                        <x-admin.form.input :row="$row ?? null" title="Название (en)" name="name_en" type="text"/>

                    </div>
                </div>

                <x-admin.form.input :row="$row ?? null" title="Порядок сортировки" name="sort_num" type="number"/>

            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <x-admin.form.is_show :row="$row ?? null"/>
            </div>
        </div>
    </div>
</div>
