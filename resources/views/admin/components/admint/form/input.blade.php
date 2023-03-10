<div class="form-group">
    <label class="form-label">{{ $title }}</label>
    <input type="{{ $type }}" class="form-control" name="{{ $name }}" value="{{ $row[$name] ?? old($name) }}" {{$required??''}}>
</div>
