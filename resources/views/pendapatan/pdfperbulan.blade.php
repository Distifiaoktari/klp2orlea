<!DOCTYPE html>
<html>

    <head>
        <title>laporan perbulan</title>
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table">
                        <br>
                        <center><h2>Laporan Pendapatan Barbershop Per Bulan</h2></center>
                        <br>
                        <table class="table table-bordered border-dark">
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
                                <td>{{$bln->new_date}}</td>
                                <td>{{$bln->{'count(id)'};}}</td>
                                <td>tes wei</td>
                                <td>-</td>
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