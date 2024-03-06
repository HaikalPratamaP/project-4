<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data</title>
</head>
<body onload="window.print()">
    <center>
        <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>No ticket</th>
                    <th>Kendala</th>
                    <th>Detail Kendala</th>
                    <th>Assets</th>
                    <th>User</th>
                    <th>Client</th>
                    <th>Status</th>
                    <th>Priority</th>
                    <th>Penilaian</th>
                    <th>Jam Kerja</th>
                    <th>Estimasi</th>
                    <th>Updated By</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ticket as $t)
                    
               
                <tr class="">
                    <td scope="row">{{$t->id}}</td>
                    <td>{{$t->no_tiket}}</td>
                    <td>{{$t->kendala}}</td>
                    <td>{{$t->detail_kendala}}</td>
                    <td>{{$t->Assets->no_asset}}</td>
                    <td>{{$t->User->nama}}</td>
                    <td>{{$t->Client->nama}}</td>
                    <td>{{$t->status}}</td>
                    <td>{{$t->priority}}</td>
                    <td>{{$t->penilaian}}</td>
                    <td>{{$t->jam_kerja}}</td>
                    <td>{{$t->estimated}}</td>
                    <td>{{$t->updated_by}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </center>
    <div class="kotak" style="margin-left:800px">
        <p>Bandung.......................!</p>
        <br>
        <br>
        <p>Ticket</p>
    </div>
</body>
</html>