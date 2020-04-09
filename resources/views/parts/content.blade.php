@extends('layouts.helloapp')

@section('main')
    <div class="top">
        <h1 class="top_coment">
            ★活動内容★
        </h1>
    </div>
    <div class="table">
        <table>
            <tr>
                <td class="month">顧問</td>
                <td class="event">田中優子先生</td>

            </tr>
            <tr>
                <td class="month">部員数</td>
                <td class="event">85名</td>
            </tr>
            <tr>
                <td class="month">部費</td>
                <td class="event">年間5000円</td>
            </tr>
            <tr>
                <td class="month">活動日時</td>
                <td class="event">毎週水曜日・金曜日</td>
            </tr>
            <tr>
                <td class="month">活動場所</td>
                <td class="event">富士見坂校舎・5F和室</td>
            </tr>
        </table>
    </div>

@endsection