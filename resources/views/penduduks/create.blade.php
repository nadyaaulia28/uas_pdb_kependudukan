<!DOCTYPE html>
<html>
<head>
  <title>UAS_PDB_SI_Kependudukan</title>
  @include('template.head')
</head>
<body lass="hold-transition sidebar-mini">
  <div class="wrapper">
      <!-- Navbar -->
   @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
      @include('template.left-sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <!-- content  -->
            	<div class="container-fluid">
            		<div class="row justify-content-around">
            			<div class="col-md-12 " style="margin-left:30%;">
            				<div class="card card-primary card-outline">
            					<div class="card-header">
            						<h3> Tambah Data Penduduk</h3>
            						
            					</div>

            					<div class="card-body">

            					 @if ($errors->any())
              			 		<div class="alert alert-danger">
	              			 		<strong>Whoops!</strong>ere were some problems with your input.<br><br>
		              			 	<ul>
		              			 		@foreach ($errors->all() as $error)
		              			 		<li>{{ $error }}</li>
		              			 		@endforeach
		              			 	</ul>
              				    </div>
              					 @endif 
            					  <!-- star form -->
                        <div class="card-body">

                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form action="{{ url('penduduks')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>No Kartu Keluarga</label>
                                        <select name="kartu_keluarga" id="kartu_keluarga" class="form-control" autofocus required>
                                        @foreach ($kartukeluarga as $id => $no)
                                        <option  value="{{ $id }}">{{ $no }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input type="text" name="nik" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <input type="text" name="agama" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" name="jenis_kelamin" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Level Pendidikan</label>
                                        <select name="level_pendidikan" id="level_pendidikan" class="form-control" autofocus required>
                                        @foreach ($levelpendidikan as $id => $nama)
                                        <option  value="{{ $id }}">{{ $nama }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" name="pekerjaan_id" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Status Pernikahan</label>
                                        <input type="text" name="status_pernikahan" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Status Keluarga</label>
                                        <input type="text" name="status_keluarga" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Kewarganegaraan</label>
                                        <select name="kewarganegaraan" id="kewarganegaraan" class="form-control" autofocus required>
                                        @foreach ($kewarganegaraan as $id => $nama)
                                        <option  value="{{ $id }}">{{ $nama }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                        <div class="form-group">
                                        <label>Ayah</label>
                                        <input type="text" name="ayah" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Ibu</label>
                                        <input type="text" name="ibu" class="form-control" autofocus required>
                                    </div>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a class="btn btn-secondary  float-right" href="{{ route('penduduks.index') }}"> Cancel</a>
                                </form>
                            </div>
                        </div>

                        <!-- /finish  form-->

            						
            					</div>
            					
            				</div>
            				
            			</div>
            			
            		</div>
            		
            	</div>


          

          <!-- /content -->
            
          </div>
          
        </div>
        
      </div>
      
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <div class="content">
      <div  class="row justify-content-center">
        <div class="card card-info card-outline">
          
        </div>
        
      </div>
      
    </div>

    
  </div>
    
  </div>

  <!-- jQuery -->
  @include('template.script') 

</body>
</html>