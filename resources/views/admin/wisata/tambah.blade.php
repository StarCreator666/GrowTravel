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
            <div class="col-md-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">
                            Tambah Wisata
                        </h3>
                    </div>
                    <!--begin::Form-->
                    <form action="{{ route('add.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                                <div class="clone-inclusion hide">
                                    <div class="control-group control-group-inclusion input-group" style="margin-top:10px">
                                   <textarea name="inclusion[]" id="" class="form-control"></textarea>
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
                                <div class="clone-exclusion hide">
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
                                <div class="clone-addons hide">
                                    <div class="control-group control-group-addons input-group" style="margin-top:10px">
                                    <textarea name="add_ons[]" id="" class="form-control"></textarea>
                                    <div class="input-group-btn"> 
                                        <button class="btn btn-danger addons" type="button"><i class="glyphicon glyphicon-remove"></i></button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
            </div>
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
    // Class definition
    var KTAutosize = function () {

    // Private functions
    var demos = function () {
        // basic demo
        var demo1 = $('#kt_autosize_1');
        var demo2 = $('#kt_autosize_2');

        autosize(demo1);

        autosize(demo2);
        autosize.update(demo2);
    }

    return {
        // public functions
        init: function() {
            demos();
        }
    };
    }();

    jQuery(document).ready(function() {
    KTAutosize.init();
    });
</script>
@endpush