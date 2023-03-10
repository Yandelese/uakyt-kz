<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">

                <x-admin.form.upload-image :row="$row ?? null" title="Аватар" type="img" name="avatar"/>

                <div class="row">
                    <div class="col-12 col-md-6">
                       <x-admin.form.input :row="$row ?? null" title="Имя" type="text" name="first_name"/>
                    </div>
                    <div class="col-12 col-md-6">
                        <x-admin.form.input :row="$row ?? null" title="Фамилия" type="text" name="last_name"/>
                    </div>
                    <div class="col-12">
                        <x-admin.form.input :row="$row ?? null" title="Почта" type="text" name="email"/>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label class="form-label">
                                Телефон
                            </label>
                            <input name="phone" value="{{ $row->phone ??'' }}" type="text" class="form-control mb-3" placeholder="77475552211" data-inputmask="'mask': '99999999999'" >
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <x-admin.form.select :row="$row ?? null" :list="$roles ?? null" title="Роль" name="role_id"/>
                    </div>
                    <div class="col-12">
                        <x-admin.form.select :row="$row ?? null" :list="$cities ?? null" title="Город" name="city_id"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <x-admin.form.is_show :row="$row ?? null"/>
            </div>
        </div>
        @if(empty($row))
            <div class="card">
                <div class="card-body">
                    <x-admin.form.input :row="$row ?? null" title="Пароль" name="password" type="password"/>
                </div>
            </div>
        @endif
    </div>
</div>
