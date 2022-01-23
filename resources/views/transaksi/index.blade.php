@extends('layout.v_template')

@section('title','Cetak Laporan Transaksi')

@section('content')
    <h3>Per Bulan</h3>
    <table class="table">
        <tbody>
            <tr>
                <td>
                <a href="{{Route('laporantransaksi.perbulan')}}" target="_blank" class="btn btn-primary" mb-5>Cetak</a>
                </td>
            </tr>
        </tbody>  
    </table>
    
    <h3>Per Hari</h3>
    <table class="table">
        <tbody>
            <tr>
                <td><a href="{{Route('laporantransaksi.perhari')}}" target="_blank" class="btn btn-primary" mb-5>Cetak</a></td>
            </tr>
        </tbody>
    </table>

@endsection