<!DOCTYPE html>
<html>

    <head>
        <title>laporan pendapatan per bulan</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
        <center>
          <h2>Laporan Pendapatan Barbershop Per Bulan</h2>
        
        <table>
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Bulan</th>
                <th scope="col">Banyak Transaksi</th>
                <th scope="col">Pendapatan</th>
                <th scope="col">Keterangan</th>
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
                <td>-</td>
            </tr>
            @endforeach
            </tbody>
        </table>  
        </center>
        
                    
    </body>

</html>