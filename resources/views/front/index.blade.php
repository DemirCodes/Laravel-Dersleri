@extends('front')
@section('css')
@endsection

@section('content')
    <hr>
    içerik alanı
    <hr>
    Gelen Yas: {{$age ?? "yas degeri gönderilmedi"}}
    <hr>
    Gelen 2.deger : {{$dmrcode ?? ''}}
@endsection

@section('js')
@endsection
