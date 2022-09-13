@extends('admin.layout.main')

@section('title','dashboard')

@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6  subheader-transparent " id="kt_subheader">
        <div
            class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">

                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h2 class="text-dark font-weight-bold my-1 mr-5">
                        Tambah Wisata </h2>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <form action="{{ route('add.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Tambah Wisata
                                </h3>
                            </div>
                            <!--begin::Form-->
                                <div class="card-body">
                                    <div class="form-group mb-1">
                                        <label for="image">Foto Wisata</label>
                                        <input class="form-control" id="image" type="file" name="gambar" accept="image/*">
                                        @error('gambar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-1">
                                        <label>Lokasi Wisata</label>
                                        <textarea name="lokasi" id="lokasi" class="form-control"></textarea>
                                        @error('lokasi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-1">
                                        <label>Destinasi Wisata</label>
                                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Wisata.."/>
                                        @error('judul')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-1">
                                        <label>Deskripsi Wisata</label>
                                        <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                                            @error('deskripsi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="form-group mb-1">
                                        <label for="exampleSelect1">Jadwal</label>
                                        <select class="form-control" id="exampleSelect1" onchange="showresult(this.value)">
                                            <option value="1" id="hari1">1 hari</option>
                                            <option value="2" id="hari2">2 hari</option>
                                            <option value="3" id="hari3">3 hari</option>
                                            <option value="4" id="hari4">4 hari</option>
                                            <option value="5" id="hari5">5 hari</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-1">
                                        <label for="harga awal">Mulai Harga</label>
                                        <input type="number" class="form-control" name="harga_awal" id="harga_awal" placeholder="Rp."/>
                                            @error('harga_awal')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="form-group mb-1">
                                        <label for="harga awal">Sampai Harga</label>
                                        <input type="number" class="form-control" name="harga_akhir" id="harga_akhir" placeholder="Rp."/>
                                        @error('harga_akhir')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-1">
                                        <label for="harga awal">Inclusion</label>
                                        <div class="input-group control-group increment-inclusion" >
                                        <textarea name="inclusion[]" id="" class="form-control"></textarea>
                                            <div class="input-group-btn"> 
                                            <button class="btn btn-success btn-inclusion" type="button"><i class="glyphicon glyphicon-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="clone-inclusion hide" style="display: none">
                                            <div class="control-group control-group-inclusion input-group" style="margin-top:10px">
                                        <textarea name="inclusion[]" id="" class="form-control" placeholder="jj"></textarea>
                                            <div class="input-group-btn"> 
                                                <button class="btn btn-danger danger-inclusion" type="button"><i class="glyphicon glyphicon-remove"></i></button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-1">
                                        <label for="harga awal">Exclusion</label>
                                        <div class="input-group control-group increment-exclusion" >
                                            <textarea name="exclusion[]" id="" class="form-control"></textarea>
                                            <div class="input-group-btn"> 
                                            <button class="btn btn-success btn-exclusion" type="button"><i class="glyphicon glyphicon-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="clone-exclusion hide" style="display: none">
                                            <div class="control-group control-group-exclusion input-group" style="margin-top:10px">
                                            <textarea name="exclusion[]" id="" class="form-control"></textarea>
                                            <div class="input-group-btn"> 
                                                <button class="btn btn-danger exclusion" type="button"><i class="glyphicon glyphicon-remove"></i></button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-1">
                                        <label for="harga awal">Add Ons</label>
                                        <div class="input-group control-group increment-addons" >
                                            <textarea name="add_ons[]" id="" class="form-control"></textarea>
                                            <div class="input-group-btn"> 
                                            <button class="btn btn-success btn-addons" type="button"><i class="glyphicon glyphicon-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="clone-addons hide" style="display: none">
                                            <div class="control-group control-group-addons input-group" style="margin-top:10px">
                                            <textarea name="add_ons[]" id="" class="form-control"></textarea>
                                            <div class="input-group-btn"> 
                                                <button class="btn btn-danger addons" type="button"><i class="glyphicon glyphicon-remove"></i></button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <div class="col-md-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Jadwal Wisata
                                </h3>
                            </div>
                            <!--begin::Form-->
                                <div class="card-body">
                                    <div id="days1">
                                        <div class="form-group mb-1">
                                            <label>Day 1</label>
                                            <input type="text" class="form-control" name="day[]" id="day1" placeholder="Wisata.." required/>
                                            @error('day')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-1">
                                            <label>jadwal</label>
                                            <textarea name="keterangan[]" id="keterangan1" class="form-control" required></textarea>
                                            @error('keterangan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div id="days2" style="display: none">
                                        <div class="form-group mb-1">
                                            <label>Day 2</label>
                                            <input type="text" class="form-control" name="day[]" id="day2" placeholder="Wisata.."/>
                                            @error('day')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-1">
                                            <label>jadwal</label>
                                            <textarea name="keterangan2" id="keterangan[]" class="form-control"></textarea>
                                            @error('keterangan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div id="days3" style="display: none">
                                        <div class="form-group mb-1">
                                            <label>Day 3</label>
                                            <input type="text" class="form-control" name="day[]" id="day3" placeholder="Wisata.."/>
                                            @error('day')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-1">
                                            <label>jadwal</label>
                                            <textarea name="keterangan3" id="keterangan[]" class="form-control"></textarea>
                                            @error('keterangan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div id="days4" style="display: none">
                                        <div class="form-group mb-1">
                                            <label>Day 4</label>
                                            <input type="text" class="form-control" name="day[]" id="day4" placeholder="Wisata.."/>
                                            @error('day')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-1">
                                            <label>jadwal</label>
                                            <textarea name="keterangan4" id="keterangan[]" class="form-control"></textarea>
                                            @error('keterangan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div id="days5" style="display: none">
                                        <div class="form-group mb-1">
                                            <label>Day 5</label>
                                            <input type="text" class="form-control" name="day[]" id="day5" placeholder="Wisata.."/>
                                            @error('day')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-1">
                                            <label>jadwal</label>
                                            <textarea class="form-control" name="keterangan[]" id="keterangan5"></textarea>
                                            @error('keterangan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                
                                </div>

                            <!--end::Form-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="card-footer col-md-6">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

</div>


 
<!--end::Content-->
@endsection

@push('script')
<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-inclusion").click(function(){ 
          var html = $(".clone-inclusion").html();
          $(".increment-inclusion").after(html);
      });
      $("body").on("click",".danger-inclusion",function(){ 
          $(this).parents(".control-group-inclusion").remove();
      });
    });

    $(document).ready(function() {
      $(".btn-exclusion").click(function(){ 
          var html = $(".clone-exclusion").html();
          $(".increment-exclusion").after(html);
      });
      $("body").on("click",".exclusion",function(){ 
          $(this).parents(".control-group-exclusion").remove();
      });
    });

    $(document).ready(function() {
      $(".btn-addons").click(function(){ 
          var html = $(".clone-addons").html();
          $(".increment-addons").after(html);
      });
      $("body").on("click",".addons",function(){ 
          $(this).parents(".control-group-addons").remove();
      });
    });
</script>
<script>
   const day1 = document.getElementById('days1');
   const day2 = document.getElementById('days2');
   const day3 = document.getElementById('days3');
   const day4 = document.getElementById('days4');
   const day5 = document.getElementById('days5');
   const title2 = document.getElementById('day2');
   const title3 = document.getElementById('day3');
   const title4 = document.getElementById('day4');
   const title5 = document.getElementById('day5');
   const ket2 = document.getElementById('keterangan2');
   const ket3 = document.getElementById('keterangan3');
   const ket4 = document.getElementById('keterangan4');
   const ket5 = document.getElementById('keterangan5');
    function showresult(str){
        if(str == "1"){
            day1.style.display = 'block';
            day2.style.display = 'none';
            day3.style.display = 'none';
            day4.style.display = 'none';
            day5.style.display = 'none';
            title2.required = false;
            title3.required = false;
            title4.required = false;
            title5.required = false;
            ket2.required = false;
            ket3.required = false;
            ket4.required = false;
            ket5.required = false;

        }else if(str == "2"){
            day1.style.display = 'block';
            day2.style.display = 'block';
            day3.style.display = 'none';
            day4.style.display = 'none';
            day5.style.display = 'none';
            title2.required = true;
            title3.required = false;
            title4.required = false;
            title5.required = false;
            ket2.required = true;
            ket3.required = false;
            ket4.required = false;
            ket5.required = false;
        }else if(str == "3"){
            day1.style.display = 'block';
            day2.style.display = 'block';
            day3.style.display = 'block';
            day4.style.display = 'none';
            day5.style.display = 'none';
            title2.required = true;
            title3.required = true;
            title4.required = false;
            title5.required = false;
            ket2.required = true;
            ket3.required = true;
            ket4.required = false;
            ket5.required = false;
        }else if(str == "4"){
            day1.style.display = 'block';
            day2.style.display = 'block';
            day3.style.display = 'block';
            day4.style.display = 'block';
            day5.style.display = 'none';
            title2.required = true;
            title3.required = true;
            title4.required = true;
            title5.required = false;
            ket2.required = true;
            ket3.required = true;
            ket4.required = true;
            ket5.required = false;
        }else if(str == "5"){
            day1.style.display = 'block';
            day2.style.display = 'block';
            day3.style.display = 'block';
            day4.style.display = 'block';
            day5.style.display = 'block';
            title2.required = true;
            title3.required = true;
            title4.required = true;
            title5.required = true;
            ket2.required = true;
            ket3.required = true;
            ket4.required = true;
            ket5.required = true;
        }
    }

    const radioButtons = document.querySelectorAll('select[name="hari"]');
    radioButtons.forEach(radio=>{
        radio.addEventListener('click',handleRadioClick);
    });
</script>
@endpush