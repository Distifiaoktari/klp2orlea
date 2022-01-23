@extends('layout.v_template')

@section('title','Laporan Pendapatan')

@section('content')
    
    <table class="border border-2">
        <tbody>
            <tr>
                <td><h4>Per Bulan ==></h4></td>
                <td>   </td>
                <td>
                    <a href="{{Route('laporanpendapatan.perbulan')}}" target="_blank" class="btn btn-primary" mb-5>Cetak</a>
                </td> 
            </tr>
            
            <tr>
                <td><h4>Per Hari  ==>  </h4></td>
                <td>   </td>
                <td>
                    <a href="{{Route('laporanpendapatan.perhari')}}" target="_blank" class="btn btn-primary" mb-5>Cetak</a>
                </td>
            </tr>
               
        </tbody>  
    </table>
    
    <table >
        
    </table>
    
    
           
@endsection