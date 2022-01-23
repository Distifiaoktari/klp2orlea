<!DOCTYPE html>
<html>

<head>
    <title>Laporan per hari</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <center><h2>Laporan Transaksi Barbershop Per Hari</h2></center>
        <div class="row">
            <div class="col-md-12">
                <div class="table">
                    <br>
                    <br>
                    <table class="table table-bordered border-dark">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">ID Transaksi</th>
                            <th scope="col">ID Pelanggan</th>
                            <th scope="col">ID Barberman</th>
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
                            <td>{{ $tgl->{'pelanggan_id'}; }}</td>          
                            <td>{{ $tgl->{'barberman_id'}; }}</td>                             
                            <td>Rp -</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <?php print_r($tanggal)?>
                </div>
            </div>
        </div>
    </div>
    </body>

</html>