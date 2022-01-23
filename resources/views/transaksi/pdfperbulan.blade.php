<!DOCTYPE html>
<html>

<head>
    <title>Laporan trasaksi per bulan</title>
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
        <center><h2>Laporan Transaksi Barbershop Per Bulan</h2></center>
       
        <table class="table table-bordered border-dark">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Bulan</th>                               
                <th scope="col">Jumlah Transaksi</th>                               
                <th scope="col">Total Transaksi</th>
            </tr>
            </thead>
            <tbody>
            <?php $no=1; ?>            
            @foreach($tanggal as $bln)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $bln->new_date }}</td>
                        <td>{{ $bln->{'id'}; }}</td>                                
                        <td>Rp {{ $bln->{'total'}; }}</td>
                    </tr>
            @endforeach
            </tbody>
        </table>
               
    </body>

</html>