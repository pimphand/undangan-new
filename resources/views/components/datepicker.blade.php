<div>
    @props(['id', 'error'])

    <input {{ $attributes }} type="text" class="form-control datetimepicker-input @error($error) is-invalid @enderror"
        id="{{ $id }}" data-toggle="datetimepicker" data-target="#{{ $id }}"
        onchange="this.dispatchEvent(new InputEvent('input'))" />

    @push('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js"
        integrity="sha512-k6/Bkb8Fxf/c1Tkyl39yJwcOZ1P4cRrJu77p83zJjN2Z55prbFHxPs9vN7q3l3+tSMGPDdoH51AEU8Vgo1cgAA=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css"
        integrity="sha512-3JRrEUwaCkFUBLK1N8HehwQgu8e23jTH4np5NHOmQOobuC4ROQxFwFgBLTnhcnQRMs84muMh0PnnwXlPq5MGjg=="
        crossorigin="anonymous" />
    <script type="text/javascript">
        $('#{{ $id }}').datetimepicker({
            	format: 'LT'
            });
    </script>
    @endpush
</div>