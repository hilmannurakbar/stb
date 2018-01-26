<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Cetak Laporan </title>
    <style>
      table{
      border-collapse: collapse;
      width: 100%;
      margin: 0 auto;
  }
  table th{
      border:1px solid #000;
      padding: 3px;
      font-weight: bold;
      text-align: center;
  }
  table td{
      border:1px solid #000;
      padding: 3px;
      vertical-align: top;
  }

    </style>
</head>
<body>

    <img src="img/kop 514.jpg" style="float:right" weight="75px" height="75px"> <br><br><br><br><br><br></div>
    <b> invoice </b><br>
    <b> <img src="img/logo hi res.jpg" style="float:left;" weight="215px" height="215px"> <br><br><br><br><br><br></div></b>
    <br>
     <div style="text-align: right;"> Customer      :  PT Bureau Veritas Consumer Products                                                         
                           Services Indonesia  
<br></div>
          <div style="text-align: right;"> Address         :  Gedung KKM, 2nd Fl. Jalan Cideng Timur 
                           38, Jakarta 10130, Indonesia                          
<br></div>
          <div style="text-align: right;"> Attention      :  Bpk Johanes
<br></div>
          <div style="text-align: right;">No PO/SPK   :  PO-2015/090/SL
<br><br><br>

            
    <table>
        <div class="panel-heading"><!--  Data Gudang -->
    </div>
    <div class="panel-body">
      <table class="table" id="karyawan">
        <thead>
          <tr>
            <th>No</th>
            <th>id project item</th>
            <th>id project </th>
            <th>urut</th>
            <th>deskripsi</th>
            <th> harga</th>
            <th>satuan</th>
            <th>kuantitas</th>
            <th>jumlah</th>
          </tr>
        </thead>
        <tbody>
        @php $no=1; @endphp
        @foreach($projectitem as $data)
        <tr>
        <td>{{$no++}}</td>
        <td>{{$data->id}}</td>
        <td>{{$data->project->id}}</td>
        <td>{{$data->urut}}</td>
        <td>{{$data->deskripsi}}</td>
        <td>Rp.{{ number_format ($data->harga, 2)}}</td>
        <td>{{$data->satuan}}</td>
        <td>{{$data->kuantiti}}</td>
        <td>Rp.{{ number_format ($data->jumlah, 2)}}</td>
        @endforeach
    </table>
</body>
</html>