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
                        <h3> Update Data Penduduk</h3>
                        
                      </div>

                      <div class="card-body" >

                        <!-- star form -->
                      
                        <div class="card-body">

                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form action="{{ url('penduduks/'.$penduduk->id)}}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label>No Kartu Keluarga</label>
                                        <input type="text" name="kartu_keluarga_id" value="{{old('kartu_keluarga_id', $penduduk->kartu_keluarga_id) }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" value="{{old('nama', $penduduk->nama) }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input type="text" name="nik" value="{{old('nik', $penduduk->nik) }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat lahir</label>
                                        <input type="text" name="tempat_lahir" value="{{old('tempat_lahir', $penduduk->tempat_lahir) }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" value="{{old('tanggal_lahir', $penduduk->tanggal_lahir) }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <input type="text" name="agama" value="{{old('agama', $penduduk->agama) }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" name="jenis_kelamin" value="{{old('jenis_kelamin', $penduduk->jenis_kelamin) }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Level Pendidikan</label>
                                        <input type="text" name="level_pendidikan_id" value="{{old('level_pendidikan_id', $penduduk->level_pendidikan_id) }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" name="pekerjaan_id" value="{{old('pekerjaan_id', $penduduk->pekerjaan_id) }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Status Pernikahan</label>
                                        <input type="text" name="status_pernikahan" value="{{old('status_pernikahan', $penduduk->status_pernikahan) }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Status Keluarga</label>
                                        <input type="text" name="status_keluarga" value="{{old('status_keluarga', $penduduk->status_keluarga) }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Kewarganegaraan</label>
                                        <input type="text" name="kewarganegaraan_id" value="{{old('kewarganegaraan_id', $penduduk->kewarganegaraan_id) }}" class="form-control" autofocus required>
                                    </div>
                                        <div class="form-group">
                                        <label>Ayah</label>
                                        <input type="text" name="ayah" value="{{old('ayah', $penduduk->ayah) }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Ibu</label>
                                        <input type="text" name="ibu" value="{{old('ibu', $penduduk->ibu) }}" class="form-control" autofocus required>
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="{{ route('penduduks.index') }}" class="btn btn-default  float-right">Cancel</a>
                 
                                </form>
                            </div>
                        </div>
         
                      
                      
                        
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