@extends('layouts.master')
@section('title','Data Bahan Baku')
@section('content')
<main id="content" role="main" class="main">
    <div class="content container-fluid">
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col">
            <h1 class="page-header-title">@yield('title')</h1>
          </div>
          <div class="col-auto">
            <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#inviteUserModal">
              <i class="bi-person-plus-fill me-1"></i> Tambah Data
            </a>
          </div>
        </div>
      </div>
      <div class="card mb-3 mb-lg-5">
        <div class="card-header">
          <div class="row justify-content-between align-items-center flex-grow-1">
            <div class="col-md">
              <div class="d-flex justify-content-between align-items-center">
                
              </div>
            </div>
            <div class="col-auto">
              <!-- Filter -->
              <div class="row align-items-sm-center">
                <div class="col-sm-auto">
                  <div class="row align-items-center gx-0">
                    <div class="col">
                      <span class="text-secondary me-2">Status:</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-end">
                        <select class="js-select js-datatable-filter form-select form-select-sm form-select-borderless" data-target-column-index="2" data-target-table="datatable" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "10rem"
                                }'>
                          <option value="null" selected>All</option>
                          <option value="successful">Successful</option>
                          <option value="overdue">Overdue</option>
                          <option value="pending">Pending</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Col -->

                <div class="col-sm-auto">
                  <div class="row align-items-center gx-0">
                    <div class="col">
                      <span class="text-secondary me-2">Signed up:</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-end">
                        <select class="js-select js-datatable-filter form-select form-select-sm form-select-borderless" data-target-column-index="5" data-target-table="datatable" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "10rem"
                                }'>
                          <option value="null" selected>All</option>
                          <option value="1 year ago">1 year ago</option>
                          <option value="6 months ago">6 months ago</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Col -->

                <div class="col-md">
                  <form>
                    <!-- Search -->
                    <div class="input-group input-group-merge input-group-flush">
                      <div class="input-group-prepend input-group-text">
                        <i class="bi-search"></i>
                      </div>
                      <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
                    </div>
                    <!-- End Search -->
                  </form>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Filter -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Header -->

        <!-- Table -->
        <div class="table-responsive datatable-custom">
          <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0, 1, 4],
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 8,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>
            <thead class="thead-light">
              <tr>
                <th scope="col" class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                    <label class="form-check-label" for="datatableCheckAll"></label>
                  </div>
                </th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Satuan</th>
                <th>Harga</th>
                <th>QTY Min</th>
                <th>Stok</th>
                <th>Merk</th>
                <th>Tempat Belanja</th>
                <th>Rumus Bagi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
        <div class="card-footer">
          <!-- Pagination -->
          <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
            <div class="col-sm mb-2 mb-sm-0">
              <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                <span class="me-2">Showing:</span>

                <!-- Select -->
                <div class="tom-select-custom">
                  <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true
                          }'>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8" selected>8</option>
                    <option value="12">12</option>
                  </select>
                </div>
                <!-- End Select -->

                <span class="text-secondary me-2">of</span>

                <!-- Pagination Quantity -->
                <span id="datatableWithPaginationInfoTotalQty"></span>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm-auto">
              <div class="d-flex justify-content-center justify-content-sm-end">
                <!-- Pagination -->
                <nav id="datatablePagination" aria-label="Activity pagination"></nav>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Pagination -->
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <p class="fs-6 mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2022 Htmlstream.</span></p>
        </div>
      </div>
    </div>

  </main>

  <div class="modal fade" id="inviteUserModal" tabindex="-1" aria-labelledby="inviteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="inviteUserModalLabel">Tambah Bahan Baku</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form id="bahanbaku_form" method="post" action="{{url('bahanbaku/simpan')}}" novalidate enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
              <div class="row mb-4">
                <label for="emailLabel" class="col-sm-3 col-form-label form-label">Nama</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Bahan Baku">
                </div>
              </div>

              <div class="row mb-4">
                <label for="emailLabel" class="col-sm-3 col-form-label form-label">Kategori</label>

                <div class="col-sm-9">
                  {{ Form::select('pekerjaan_pasangan', kategori(), null, ['class' => 'js-select form-select', 'id' => 'pekerjaan_pasangan', 'title' => '-- Silahkan Pilih --', 'data-dropup-auto' => 'false', 'data-display' => 'static', 'onchange' => 'cekPekerjaan();']) }}
                </div>
              </div>

              <div class="row mb-4">
                <label for="emailLabel" class="col-sm-3 col-form-label form-label">Satuan</label>

                <div class="col-sm-9">
                  {{ Form::select('pekerjaan_pasangan', satuan(), null, ['class' => 'js-select form-select', 'id' => 'pekerjaan_pasangan', 'title' => '-- Silahkan Pilih --', 'data-dropup-auto' => 'false', 'data-display' => 'static', 'onchange' => 'cekPekerjaan();']) }}
                </div>
              </div>

              <div class="row mb-4">
                <label for="emailLabel" class="col-sm-3 col-form-label form-label">Harga</label>

                <div class="col-sm-9">
                  <input type="number" class="form-control" name="nama" id="nama" placeholder="Harga Bahan Baku">
                </div>
              </div>

              <div class="row mb-4">
                <label for="emailLabel" class="col-sm-3 col-form-label form-label">QTY Min</label>

                <div class="col-sm-9">
                  <input type="number" class="form-control" name="nama" id="nama" placeholder="QTY Min Bahan Baku">
                </div>
              </div>

              <div class="row mb-4">
                <label for="emailLabel" class="col-sm-3 col-form-label form-label">Stok</label>

                <div class="col-sm-9">
                  <input type="number" class="form-control" name="nama" id="nama" placeholder="Stok Bahan Baku">
                </div>
              </div>

              <div class="row mb-4">
                <label for="emailLabel" class="col-sm-3 col-form-label form-label">Merk</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Merk Bahan Baku">
                </div>
              </div>

              <div class="row mb-4">
                <label for="emailLabel" class="col-sm-3 col-form-label form-label">Tempat</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Tempat Belanja Bahan Baku">
                </div>
              </div>

              <div class="row mb-4">
                <label for="emailLabel" class="col-sm-3 col-form-label form-label">Rumus Bagi</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Rumus Bagi Bahan Baku">
                </div>
              </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-sm saveButton">Simpan</button>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
<script>
  $(document).ready(function() {
      getBahanData();
      
      $('#bahanbaku_form').validate({
          highlight: function(input) {
              $(input).parents('.form-line').addClass('is-invalid');
          },
          unhighlight: function(input) {
              $(input).parents('.form-line').removeClass('is-invalid');
          },
          submitHandler: function(form) {
              $('.saveButton').prop('disabled', true);
              $.ajax({
                  url: form.action,
                  type: form.method,
                  data: new FormData(form),
                  processData: false,
                  contentType: false,
                  dataType: "json",
                  success: function(data) {
                      $('.saveButton').prop('disabled', false);
                      if (data.success) {
                          Swal.fire('Selamat!', 'Data Pengajuan Berhasil disimpan!', 'success');
                          $('#inviteUserModal').modal('hide');
                          getBahanData();
                      } else {
                          Swal.fire('Maaf!', 'Data Pengajuan Gagal disimpan, silahkan coba beberapa saat lagi!<br>'+data.pesan, 'error');
                          $('#inviteUserModal').modal('hide');
                          getBahanData();
                      }
                  },
                  error: function(err) {
                      $('.saveButton').prop('disabled', false);
                  }
              });
          }
      });  
  });
  
  var pengajuan_table = $('#datatable').DataTable({
      responsive: true,
      processing: true,
      ajax: "",
      columns: [{
              searchable: false,
              orderable: false,
              data: null,
              defaultContent: ''
          },
          {
              data: "nama"
          },
          {
              data: "kategori"
          },
          {
              data: "satuan"
          },
          {
              data: "harga"
          },
          {
              data: "qty_min"
          },
          {
              data: "stok"
          },
          {
              data: "merk"
          },
          {
              data: "tempat_belanja"
          },
          {
              data: "rumus_bagi"
          },
          {
              data: "aksi",
              class: "text-center"
          },
      ]
  });
  
  pengajuan_table.on('order.dt search.dt', function() {
      pengajuan_table.column(0, {
          search: 'applied',
          order: 'applied'
      }).nodes().each(function(cell, i) {
          cell.innerHTML = i + 1;
      });
  }).draw();
  
  function getBahanData() {
      pengajuan_table.ajax.url("{{url('bahanbaku/getdata')}}").load(null, false);
  }

  function clearForm() {
      $('#bahanbaku_form').trigger('reset');
      $('.selectpicker').selectpicker('refresh');
  }

  function edit(id) {
      $.ajax({
          url: "{{url('perceraian/getDetail')}}",
          type: "get",
          data: {
              id: id
          },
          dataType: "json",
          success: function(data) {
              clearForm();
              $('.lampiran').hide();
              $('#peg_nip_input').hide();
              $('#peg_nip_edit').show();
              $('#perceraian_id').val(id);
              $('#peg_nip_edit_form').val('['+data.peg_nip+'] '+data.peg_nama+' - '+data.jabatan_nama);
              $('#jenis').selectpicker('val', data.jenis);
              $('#nik_pasangan').val(data.nik_pasangan);
              $('#nama_pasangan').val(data.nama_pasangan);
              $('#pekerjaan_pasangan').val(data.pekerjaan_pasangan);
              $('#tempat_lahir_pasangan').val(data.tempat_lahir_pasangan);
              $('#tanggal_lahir_pasangan').val(data.tanggal_lahir_pasangan);
              $('#alamat_pasangan').val(data.alamat_pasangan);
              $('#file_lampiran_kartu_keluarga').html(data.kartu_keluarga);
              $("#nomor_surat_pengantar_opd").val(data.nomor_surat_pengantar_opd);
              $("#tanggal_surat_pengantar_opd").val(data.tanggal_surat_pengantar_opd);
              $("#file_lampiran_surat_pengantar_opd").html(data.surat_pengantar_opd);
              $("#nomor_surat_pengantar_kcd").val(data.nomor_surat_pengantar_kcd);
              $("#tanggal_surat_pengantar_kcd").val(data.tanggal_surat_pengantar_kcd);
              $("#file_lampiran_surat_pengantar_kcd").html(data.surat_pengantar_kcd);
              $("#lampiran_surat_pengantar_opd").prop('required', false);
              if (data.jenis == 'Menggugat') {
                  $("#file_lampiran_surat_permohonan").html(data.surat_permohonan);
                  $("#file_lampiran_sk_pangkat").html(data.sk_pangkat);
                  $("#file_lampiran_akta_nikah").html(data.akta_nikah);
                  $("#file_lampiran_bap_bp4_kua").html(data.bap_bp4_kua);
                  $("#file_lampiran_bap_pd").html(data.bap_pd);
                  $("#file_lampiran_bap_pd2").html(data.bap_pd2);
                  $("#file_lampiran_bap_pd3").html(data.bap_pd3);
                  $("#file_lampiran_surat_keterangan_desa").html(data.surat_keterangan_desa);
                  $("#file_lampiran_surat_pernyataan").html(data.surat_pernyataan);
                  $("#lampiran_surat_permohonan").prop('required', false);
                  $("#lampiran_sk_pangkat").prop('required', false);
                  $("#lampiran_akta_nikah").prop('required', false);
                  $("#lampiran_bap_bp4_kua").prop('required', false);
                  $("#lampiran_bap_pd").prop('required', false);
                  $("#lampiran_surat_keterangan_desa").prop('required', false);
                  $("#lampiran_surat_pernyataan").prop('required', false);
                  $('#kab_kota_bap_bp4_kua').val(data.kab_kota_bap_bp4_kua);
                  $('#nomor_surat_bap_bp4_kua').val(data.nomor_surat_bap_bp4_kua);
                  $('#tanggal_surat_bap_bp4_kua').val(data.tanggal_surat_bap_bp4_kua);
                  $('#tanggal_bap_pd').val(data.tanggal_bap_pd);
                  $('#desa_surat_keterangan_desa').val(data.desa_surat_keterangan_desa);
                  $('#kecamatan_surat_keterangan_desa').val(data.kecamatan_surat_keterangan_desa);
                  $('#kab_kota_surat_keterangan_desa').val(data.kab_kota_surat_keterangan_desa);
                  $('#nomor_surat_keterangan_desa').val(data.nomor_surat_keterangan_desa);
                  $('#tanggal_surat_keterangan_desa').val(data.tanggal_surat_keterangan_desa);
                  $('#province_id').selectpicker('val', data.province_id);
                  $('#regency_id').html(data.regency_list);
                  $('#district_id').html(data.district_list);
                  $('#village_id').html(data.village_list);
                  $('.selectpicker').selectpicker('refresh');
                  $('#menggugat').show();
                  $('#digugat').hide();
              } else {
                  $("#file_lampiran_surat_pemberitahuan_gugatan").html(data.surat_pemberitahuan_gugatan);
                  $("#file_lampiran_surat_panggilan_relaas").html(data.surat_panggilan_relaas);
                  $("#lampiran_surat_pemberitahuan_gugatan").prop('required', false);
                  $("#lampiran_surat_panggilan_relaas").prop('required', false);
                  $('#kab_kota_relaas').val(data.kab_kota_relaas);
                  $('#nomor_surat_panggilan_relaas').val(data.nomor_surat_panggilan_relaas);
                  $('#tanggal_surat_panggilan_relaas').val(data.tanggal_surat_panggilan_relaas);
                  $('#menggugat').hide();
                  $('#digugat').show();
              }
              $('#jenis').val(data.jenis);
              $('#keterangan').val(data.keterangan);
              $('.selectpicker').selectpicker('refresh');
              $("#modal_pengajuan_input").modal("show");
          },
          error: function(err) {}
      });
  }

  function hapus(id) {
      Swal.fire({
          title: 'Yakin?',
          text: "Mau menghapus Pengajuan Perceraian ini!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#FF2C2C',
          confirmButtonText: 'Ya, Hapus aja!'
      }).then((result) => {
          if (result.isConfirmed) {
              $.ajax({
                  url: "{{url('perceraian/pengajuan/hapus')}}",
                  type: "post",
                  data: {
                      _token: '{{csrf_token()}}',
                      id: id
                  },
                  dataType: "json",
                  success: function(data) {
                      console.log(data);
                      if (data) {
                          Swal.fire('Berhasil!', 'Pengajuan Perceraian berhasil dihapus.', 'success');
                          getPengajuanData();
                      } else {
                          Swal.fire('Gagal!', 'Pengajuan Perceraian gagal dihapus, silahkan refresh halaman ini kemudian coba lagi.', 'error');
                      }
                  },
                  error: function(err) {
                      Swal.fire('Error!', 'Lihat errornya di console.', 'error');
                  }
              });
          }
      })
  }
</script>
@endsection