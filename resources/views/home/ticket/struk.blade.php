<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struck </title>
    <style>
        .border-struck{
            height: auto;
            width: 390px;
            border: 3px solid #1d1d1d;
            border-radius: 10px;
            padding-bottom: 20px;
            padding-left: 7px;
            padding-right: 7px;
            padding-top: 20px;
            margin-top: 20px;
        }
        td{
           margin-top: 10px;
           padding-left: 10px;
           padding-right: 10px;
        }
        th{
           margin-top: 10px;
           padding-left: 10px;
           padding-right: 10px;
        }
    </style>
</head>
<body onload="window.print()">
    <center>
        <div class="border-struck">
        <table>
        <tr align="center">
            <th colspan="8">Ticket</th>
        </tr>
        
        <tr>
            <th colspan="8" >User : {{Auth()->User()->nama}}</th>
            
        </tr>
        <tr>
            <th colspan="8" align="center">Estimasi:<?php echo date("d-F-Y")?></th>
        </tr>
        <tr>
            <td colspan="8"><hr></td>
        </tr>

        <tr>
            <td colspan="3">No Tiket</td>
            <td align="right">:</td>
            <td>{{$ticket->no_tiket}}</td>
        </tr>
        <tr >
            <td colspan="3">Kendala</td>
            <td align="right" >:</td>
            <td>{{$ticket->kendala}}</td>
        </tr>
        <tr >
            <td colspan="3">Detail Kendala</td>
            <td align="right">:</td>
            <td>{{$ticket->detail_kendala}}</td>
        </tr>
        <tr >
            <td colspan="3">Assets</td>
            <td align="right">:</td>
            <td>{{$ticket->Assets->no_asset}}</td>
        </tr>
        <tr >
            <td colspan="3">User</td>
            <td align="right">:</td>
            <td>{{$ticket->User->nama}}</td>
        </tr>
        <tr >
            <td colspan="3">Client</td>
            <td align="right">:</td>
            <td>{{$ticket->Client->nama}}</td>
        </tr>
        <tr >
            <td colspan="3">Status</td>
            <td align="right">:</td>
            <td>{{$ticket->status}}</td>
        </tr>
        <tr >
            <td colspan="3">Priority</td>
            <td align="right">:</td>
            <td>{{$ticket->priority}}</td>
        </tr>
        <tr >
            <td colspan="3">Penilaian</td>
            <td align="right">:</td>
            <td>{{$ticket->penilaian}}</td>
        </tr>
        <tr >
            <td colspan="3">Jam Kerja</td>
            <td align="right">:</td>
            <td>{{$ticket->jam_kerja}}</td>
        </tr>
        <tr >
            <td colspan="3">Updated By</td>
            <td align="right">:</td>
            <td>{{$ticket->updated_by}}</td>
        </tr>
    </table>
</div>
    </center>
</body>
</html>