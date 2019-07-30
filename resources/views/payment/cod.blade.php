@extends('frontEnd.layouts.master')
@section('title','Review Order Page')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <h3 class="text-center">PESANAN ANDA SUDAH DITERIMA</h3>
        <p class="text-center">Terima Kasih Telah Menggunakan Fitur COD</p>
        <p class="text-center">Kami Akan Mengkontak Anda Melalui Email (<b>{{$user_order->users_email}}</b>) Atau Ke No Telpon Anda (<b>{{$user_order->mobile}}</b>)</p>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection