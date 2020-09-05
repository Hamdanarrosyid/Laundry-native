@extends('layouts.main')
@section('content')
    <div class="outlet">
        <div class="form-input">
            <h1 class="head-title">Form Input Data Outlet</h1>
            <form action="{{BASEURL}}outlet/store" method="POST">
                <div class="wrap">
                    <div class="row">
                        <label for="no_pakaian">No pakaian</label>
                        <input type="number" name="no_pakaian" id="no_pakaian">
                    </div>
                    <div class="row">
                        <label for="pemilik_id">Pemilik</label>
                        <input type="text" name="pemilik_id" id="pemilik_id">
                    </div>
                    <div class="row">
                        <label for="kasir_id">Kasir</label>
                        <input type="text" name="kasir_id" id="kasir_id">
                    </div>
                    <div>
                        <button class="button-submit" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="data-outlet">
            <h1 class="head-title">Data Outlet</h1>
            <table class="content-table">
                <thead>
                <tr>
                    <th><h1>No</h1></th>
                    <th><h1>No pakaian</h1></th>
                    <th><h1>Pemilik</h1></th>
                    <th><h1>Kasir</h1></th>
                </tr>
                </thead>
                <tbody>
                <p style="display: none">{{$no = 1}}</p>
                @foreach($data['outlet'] as $outlet)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$outlet['no_pakaian']}}</td>
                        <td>{{$outlet['pemilik_id']}}</td>
                        <td>{{$outlet['kasir_id']}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
