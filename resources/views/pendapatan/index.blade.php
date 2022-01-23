@extends('layout.v_template')

@section('title','Laporan Pendapatan')

@section('content')
    <h3>Per Bulan</h3>
    <table class="table">
        <tbody>
            <tr>
                <!-- <th>Pilih Bulan</th> -->
                <!-- <th>Pilih Tahunnya</th>
                <th>Aksi</th> -->
            </tr>
            <tr>
                <!-- <td>
                    <select name="bln" class="form-control">
                        <option selected>Pilih Bulan</option>
                        <option value="01"> Januari </option>
                        <option value="02"> Februari </option>
                        <option value="03"> Maret </option>
                        <option value="04"> April </option>
                        <option value="05"> Mei </option>
                        <option value="06"> Juni </option>
                        <option value="07"> Juli </option>
                        <option value="08"> Agustus </option>
                        <option value="09"> September </option>
                        <option value="10"> Oktober </option>
                        <option value="11"> November </option>
                        <option value="12"> Desember </option>	
                    </select>
                </td> -->
                <!-- <td>
                    <select name="thn" class="form-control">
                        <option selected="selected">Tahun</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </td> -->
                <td>
                <a href="{{Route('laporanpendapatan.perbulan')}}" target="_blank" class="btn btn-primary" mb-5>Cetak</a>
                </td>
            </tr>
        </tbody>  
    </table>
    
    <h3>Per Hari</h3>
    <table class="table">
        <tbody>
            <tr>
                <!-- <th>Pilih Bulan</th>
                <th>Pilih Tahunnya</th> -->
                <!-- <th>Aksi</th> -->
            </tr>
            <tr>
                <!-- <td>
                    <select name="bln" class="form-control">
                        <option selected>Pilih Bulan</option>
                        <option value="01"> Januari </option>
                        <option value="02"> Februari </option>
                        <option value="03"> Maret </option>
                        <option value="04"> April </option>
                        <option value="05"> Mei </option>
                        <option value="06"> Juni </option>
                        <option value="07"> Juli </option>
                        <option value="08"> Agustus </option>
                        <option value="09"> September </option>
                        <option value="10"> Oktober </option>
                        <option value="11"> November </option>
                        <option value="12"> Desember </option>	
                    </select>
                </td>
                <td>
                    <select name="thn" class="form-control">
                        <option selected="selected">Tahun</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </td> -->
                <td><a href="{{Route('laporanpendapatan.perhari')}}" target="_blank" class="btn btn-primary" mb-5>Cetak</a></td>
            </tr>
        </tbody>
    </table>

@endsection