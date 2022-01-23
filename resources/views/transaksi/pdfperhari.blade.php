<!DOCTYPE html>
<html>

<head>
    <title>Laporan transaksi per hari</title>
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
        <center><h2>Laporan Transaksi Barbershop Per Hari</h2></center>
       
        <table class="table table-bordered border-dark">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">ID Transaksi</th>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">Nama Barberman</th>
                <th scope="col">Total</th>
            </tr>
            </thead>
            <tbody>
            <?php $no=1; ?>
            @foreach($tanggal as $tgl)                       
                    <tr>
                        <td>{{ $no++ }}</td>                            
                        <td>{{ $tgl->{'tanggal_order'}; }}</td>          
                        <td>{{ $tgl->{'id'}; }}</td>          
                        <td>{{ $tgl->{'pelanggan'}; }}</td>          
                        <td>{{ $tgl->{'barberman'}; }}</td>                             
                        <td>Rp {{ $tgl->{'total'}; }}</td>
                    </tr>
            @endforeach
            </tbody>
        </table>
               
    </body>

</html>