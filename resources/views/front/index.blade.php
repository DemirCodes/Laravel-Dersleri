@extends('front')
@section('css')
@endsection

@section('content')

    <form action="" method="post">
        @csrf
        @method('post')
{{--        @dmrMethod('Vakıf Demirci')--}}
        <input type="text" name="fullName" value=""><br>
        <button type="submit">Gönder</button>
    </form>

    <hr>
    içerik alanı
    <hr>
    Gelen Yas: {{$age ?? "yas degeri gönderilmedi"}}
    <hr>
    Gelen 2.deger : {{$dmrcode ?? ''}}
@endsection

@section('js')
@endsection
