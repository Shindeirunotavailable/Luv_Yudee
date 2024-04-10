@extends('layout.master')
@section('content')

<select class="form-select changeLanguage">
    <option value="th" {{ session()->get('locale') == 'th' ? 'selected' : ''}}>th</option>
    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : ''}}>English</option>
    <option value="zh-CN" {{ session()->get('locale') == 'zh-CN' ? 'selected' : ''}}>CN</option>
</select>

<p class="text-ap">{{ GoogleTranslate::trans('บริหารจัดการข้อมูลผู้ใช้งาน', session()->get('locale')) }}</p>


<?php
// $locale = session()->get('locale', 'th');
?>
{{-- <p class="text-ap">{{ GoogleTranslate::trans('บริหารจัดการข้อมูลผู้ใช้งาน', $locale) }}</p> --}}



<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
$('.changeLanguage').change(function(event){
    var url = "{{ route('google.translate.change') }}";
    window.location.href = url+"?lang="+$(this).val()
})
</script>

@endsection
