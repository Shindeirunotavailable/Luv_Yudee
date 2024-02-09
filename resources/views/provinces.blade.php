<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="{{ asset('/assets/css/ppcss/dashboard.css') }}" rel="stylesheet" type="text/css" />


</head>

<body>
    @csrf
    <label>จังหวัด</label>
    <select name="provinces" id="provinces" class="form-control-ap">
        <option value="" selected disabled>กรุณาเลือกจังหวัด</option>
        @foreach ($provinces as $value)
            <option value="{{ $value['id'] }}">{{ $value['name_th'] }}</option>
        @endforeach
    </select><br>

    <label>อำเภอ</label>
    <select name="amphures" id="amphures" class="form-control-ap">
    </select><br>

    <label>ตำบล</label>
    <select name="districts" id="districts" class="form-control-ap">
        {{-- <option value="">กรุณาเลือกตำบล</option>
            @foreach ($districts as $value)
                <option value="{{ $value['id'] }}">{{ $value['name_th'] }}</option>
            @endforeach --}}
    </select><br>

    <label>รหัสไปรษณีย์</label>
    <input type="text" name="zipcode" id="zipcode">

{{-- <input type="hidden" value="{{ route('db_provinces') }}" name="db_provinces" id="db_provinces"> --}}
<script type="module" crossorigin="" src="{{ asset('/assets/js/ppjs/dashboard.js') }}"></script>
</body>

</html>
