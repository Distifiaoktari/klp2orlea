<!DOCTYPE html>
<html>

<head>
    <title>laporan pendapatan per hari</title>
    <style>
            table, th, td {
                    border: 1px solid black;
                    border-collapse: collapse;
                    padding: 10px;
                    margin-left:auto;margin-right:auto;
                    }
        </style>
</head>

<body>
        <center><h2>Laporan Pendapatan Barbershop Per Hari</h2></center>
       
        <table class="table table-bordered border-dark">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Banyak Transaksi</th>
                <th scope="col">Total Pendapatan</th>
                <th scope="col">Keterangan</th>
            </tr>
            </thead>
            <tbody>
            <?php $no=1; ?>
            @foreach($tanggal as $tgl)
            
            <tr>
                <td>{{ $no++ }}</td>
                
                <td>{{$tgl->{'tanggal_order'};}}</td>
                <td>{{$tgl->{'id'};}}</td>
                
                <td>Rp {{$tgl->{'total'};}}</td>
                <td>-</td>
            </tr>
            @endforeach
            </tbody>
        </table>
               
    </body>

</html>