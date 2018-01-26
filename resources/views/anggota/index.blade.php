@extends('layouts.coba')
@section('content')
	<center><h1> Data anggota </h1></center>
	 <div class="col-xs-20">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">kontak vendor</h3>
            </div>
	<br>

	<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Tambah Data</button>




<a href="deleteAll" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus semuanya?');">Delete All</a>
<br>

	

	
		<div class="panel-heading"><!--  Data Gudang -->
		</div>
		<div class="panel-body">
			<table class="table" id="karyawan">
				<thead>
					<tr>
						<th>No</th>
						<th>id anggota</th>
						<th>nama</th>
						<th>alamat</th>
						<th>tanggal lahir</th>
						<th>no telepon</th>
						<th>jenis kelamin</th>
						<th>status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@php $no=1; @endphp
				@foreach($anggota as $data)
				<tr>
				<td>{{$no++}}</td>
				<td>{{$data->id}}</td>
				<td>{{$data->nama_anggota}}</td>
				<td>{{$data->alamat}}</td>
				<td>{{$data->tanggal_lahir}}</td>
				<td>{{$data->telepon}}</td>
				<td>{{$data->jenis_kelamin}}</td>
				<td>{{$data->status}}</td>
				
				
														
				<td>
				<div class="navbar-collapse collapse">
            	<ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-wrench"></i>  <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                    <center><a class="btn btn-warning" data-toggle="modal" data-target="#myEdit{{$data->id}}"><i class="glyphicon glyphicon-edit"> Edit </i></a>
                   	<form action="{{route('anggota.destroy',$data->id)}}" method="post" class="delete">
                <input name="_method" type="hidden" value="DELETE">
        	<input name="_token" type="hidden" >
        	{{csrf_field()}}
			<button type="submit" class="btn btn-danger" value="Delete" id="delete-btn"><i class="glyphicon glyphicon-trash"> Delete </i></button></form></center>
                   
                    </ul>
                </li>
				
				</form>
				</td>
			</td>

			<!-- Modal EDIT-->
<div id="myEdit{{$data->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit</h4>
      </div>
      <div class="modal-body">
        <form action="{{ route('anggota.update',$data->id) }}" method="post">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
				

				<div class="form-group">
					<label class="control-label">nama anggota  </label>
					<input type="text" name="nama_anggota" value="{{$data->nama_anggota}}" class="form-control" required="">

				<div class="form-group">
					<label class="control-label">alamat</label>
					<input type="text" name="alamat" files="true" value="{{$data->alamat}}" class="form-control">

				<div class="form-group">
					<label class="control-label">tanggal_lahir</label>
					<input type="date" name="tanggal_lahir" files="true" value="{{$data->tanggal_lahir}}" class="form-control">

				<div class="form-group">
					<label class="control-label">telepon</label>
					<input type="text" name="telepon" files="true" value="{{$data->telepon}}" class="form-control">

			<div class="form-group">
				<label class="control-label"> jenis_kelamin</label>
				<div>
				<input type="radio" value="laki-laki" name="jenis_kelamin">laki-laki
					<input type="radio" value="perempuan" name="jenis_kelamin"> perempuan

			
			<div class="form-group">
					<label class="control-label">pekerjaan</label>
					<input type="text" name="pekerjaan" files="true" value="{{$data->pekerjaan}}" class="form-control">


				<div class="form-group">
					<label class="control-label">status</label>
					<input type="text" name="status" files="true" value="{{$data->status}}" class="form-control">

				</div>
				</div>
				</div>
				</div>
				</div>
			</div>
	
	

				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
			</form>
      		</div>

      		 </div>
@endforeach
	</tbody>
	</table>      
			
			<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data</h4>
      </div>
      <div class="modal-body">
      <form action="{{ route('anggota.store') }}" method="post">
			{{csrf_field()}}

			
		

        <div class="form-group">
				<label class="control-label">nama anggota</label>
				<input type="text" name="nama_anggota" class="form-control" required="">


			<div class="form-group">
				<label class="control-label"> alamat</label>
				<div>
				<textarea name="alamat" rows="5" cols="30"></textarea></div>
			<div class="form-group">
				<label class="control-label"> tanggal_lahir</label>
				<input type="date" name="tanggal_lahir" class="form-control" required="">

			<div class="form-group">
				<label class="control-label"> telepon</label>
				<input type="text" name="telepon" class="form-control" required="">

			<div class="form-group">
				<label class="control-label"> jenis_kelamin</label>
				<div>
				<input type="radio" value="laki-laki" name="jenis_kelamin">laki-laki
					<input type="radio" value="perempuan" name="jenis_kelamin">perempuan

			<div class="form-group">
				<label class="control-label"> pekerjaan</label>
				<input type="text" name="pekerjaan" class="form-control" required="">

			<div class="form-group">
				<label class="control-label"> status</label>
				<input type="text" name="status" class="form-control" required="">
			</div>
			</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
			<div class="form-group">
				<button type="submit" class="btn btn-danger">Submit</button>

				<button type="submit" class="btn btn-warning">Reset</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
    </div>

		</div>
	</div>
</div> 
</div>


@endsection