<div class="table-responsive">
    <table class="table table-sm table-hover table-nowrap card-table">
        <thead>
        <tr class="tr-table">
            <th>
                <x-admin.checkbox-all/>
            </th>
            <th>ID</th>
            <th>Название (kz)</th>
            <th>Название (ru)</th>
            <th>Название (en)</th>
            <th>Порядок</th>
            @if(request('type') !== 'deleted')
                <th colspan="2">Действия</th>
            @endif
        </tr>
        </thead>
        <tbody class="list fs-base">
        @foreach($row as $item)
            <tr>
                <td>
                    <x-admin.checkbox-item :id="$item->id"/>
                </td>
                <td>
                    {{ data_get($item, \App\Contracts\CategoryContract::FIELD_ID) }}
                </td>
                <td>
                    {{ data_get($item, \App\Contracts\CategoryContract::FIELD_NAME_KZ) }}
                </td>
                <td>
                    {{ data_get($item, \App\Contracts\CategoryContract::FIELD_NAME_RU) }}
                </td>
                <td>
                    {{ data_get($item, \App\Contracts\CategoryContract::FIELD_NAME_EN) }}
                </td>
                <td>
                    {{ data_get($item, \App\Contracts\CategoryContract::FIELD_SORT_NUM) }}
                </td>
                <x-admin.edit-icon :item="$item" :model="$model"/>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
