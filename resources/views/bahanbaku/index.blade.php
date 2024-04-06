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
                <th></th>
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
          <form id="pengajuan_form" method="post" action="{{url('perceraian/pengajuan/simpan')}}" novalidate enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
              <div class="row mb-4">
                <label for="emailLabel" class="col-sm-3 col-form-label form-label">Nama</label>

                <div class="col-sm-9">
                  <input type="email" class="form-control" name="nama" id="nama" placeholder="Nama Bahan Baku">
                </div>
              </div>

              <div class="row mb-4">
                <label for="emailLabel" class="col-sm-3 col-form-label form-label">Kategori</label>

                <div class="col-sm-9">
                  {{ Form::select('pekerjaan_pasangan', pekerjaan(), null, ['class' => 'js-select form-select', 'id' => 'pekerjaan_pasangan', 'title' => '-- Silahkan Pilih --', 'data-dropup-auto' => 'false', 'data-display' => 'static', 'onchange' => 'cekPekerjaan();']) }}
                </div>
              </div>

              <div class="row mb-4">
                <label for="emailLabel" class="col-sm-3 col-form-label form-label">Satuan</label>

                <div class="col-sm-9">
                  {{ Form::select('pekerjaan_pasangan', pekerjaan(), null, ['class' => 'js-select form-select', 'id' => 'pekerjaan_pasangan', 'title' => '-- Silahkan Pilih --', 'data-dropup-auto' => 'false', 'data-display' => 'static', 'onchange' => 'cekPekerjaan();']) }}
                </div>
              </div>

              <div class="row mb-4">
                <label for="emailLabel" class="col-sm-3 col-form-label form-label">Harga</label>

                <div class="col-sm-9">
                  <input type="email" class="form-control" name="nama" id="nama" placeholder="Harga Bahan Baku">
                </div>
              </div>

              <div class="row mb-4">
                <label for="emailLabel" class="col-sm-3 col-form-label form-label">QTY Min</label>

                <div class="col-sm-9">
                  <input type="email" class="form-control" name="nama" id="nama" placeholder="QTY Min Bahan Baku">
                </div>
              </div>

              <div class="row mb-4">
                <label for="emailLabel" class="col-sm-3 col-form-label form-label">Stok</label>

                <div class="col-sm-9">
                  <input type="email" class="form-control" name="nama" id="nama" placeholder="Stok Bahan Baku">
                </div>
              </div>

              <div class="row mb-4">
                <label for="emailLabel" class="col-sm-3 col-form-label form-label">Merk</label>

                <div class="col-sm-9">
                  <input type="email" class="form-control" name="nama" id="nama" placeholder="Merk Bahan Baku">
                </div>
              </div>

              <div class="row mb-4">
                <label for="emailLabel" class="col-sm-3 col-form-label form-label">Tempat</label>

                <div class="col-sm-9">
                  <input type="email" class="form-control" name="nama" id="nama" placeholder="Tempat Belanja Bahan Baku">
                </div>
              </div>

              <div class="row mb-4">
                <label for="emailLabel" class="col-sm-3 col-form-label form-label">Rumus Bagi</label>

                <div class="col-sm-9">
                  <input type="email" class="form-control" name="nama" id="nama" placeholder="Rumus Bagi Bahan Baku">
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
      getPengajuanData();
      
      $('#bahan_form').validate({
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
                          $('#modal_pengajuan_input').modal('hide');
                          getPengajuanData();
                      } else {
                          Swal.fire('Maaf!', 'Data Pengajuan Gagal disimpan, silahkan coba beberapa saat lagi!<br>'+data.pesan, 'error');
                          $('#modal_pengajuan_input').modal('hide');
                          getPengajuanData();
                      }
                  },
                  error: function(err) {
                      $('.saveButton').prop('disabled', false);
                  }
              });
          }
      });
      
      $('#tolak_pengajuan_form').validate({
          highlight: function (input) {
              $(input).parents('.form-line').addClass('is-invalid');
          },
          unhighlight: function (input) {
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
                  success: function(success) {
                      $('.saveButton').prop('disabled', false);
                      if (success) {
                          Swal.fire('Selamat!', 'Data Pengajuan Berhasil ditolak!', 'success');
                          $('#modal_tolak_pengajuan').modal('hide');
                          getPengajuanData();
                      } else {
                          Swal.fire('Maaf!', 'Data Pengajuan Gagal ditolak, silahkan coba beberapa saat lagi!', 'error');
                          $('#modal_tolak_pengajuan').modal('hide');
                          getPengajuanData();
                      }
                  },
                  error: function(err) {
                      $('.saveButton').prop('disabled', false);
                  }
              });
          }
      });

      $('#lapor_form').validate({
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
                          Swal.fire('Selamat!', 'Data Laporan Berhasil disimpan!', 'success');
                          $('#modal_lapor').modal('hide');
                          getPengajuanData();
                      } else {
                          Swal.fire('Maaf!', 'Data Laporan Gagal disimpan, silahkan coba beberapa saat lagi!<br>'+data.pesan, 'error');
                          $('#modal_lapor').modal('hide');
                          getPengajuanData();
                      }
                  },
                  error: function(err) {
                      $('.saveButton').prop('disabled', false);
                  }
              });
          }
      });
      
      
  });
  
  var pengajuan_table = $('#pengajuan_table').DataTable({
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
              data: "nama_pegawai"
          },
          {
              data: "jabatan_nama"
          },
          {
              data: "unit_kerja_nama"
          },
          {
              data: "satuan_kerja_nama"
          },
          {
              data: "jenis"
          },
          {
              data: "status"
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
  
  function getPengajuanData() {
      pengajuan_table.ajax.url("{{url('perceraian/pengajuan/getData')}}").load(null, false);
  }

  function cek_KK() {
      var nip = $('#peg_nip').val();
      if (nip) {
          $.get("{{ url('perceraian/pengajuan/cek_KK') }}/"+nip, function(data) {
              if (data == 'false') {
                  Swal.fire('Maaf!', 'Pegawai yang bersangkutan belum mengunggah file Kartu Keluarga di Siap Jabar. Harap unggah Kartu Keluarga terlebih dahulu di akun Siap Jabar Pegawai yang bersangkutan!', 'error');
                  $('#peg_nip').selectpicker('val', '');
                  $('#file_lampiran_kartu_keluarga').html('');
              } else {
                  $('#file_lampiran_kartu_keluarga').html(data);
              }
          });
      }
  }
  
  function getRegencies(province_id) {
      $.get('{{ url("ajax-regencies") }}?province_id=' + province_id, function(data) {
          $('#regency_id').html(data);
          regency_id = $('#regency_id').val();
          getDistricts(regency_id);
          $('#regency_id').selectpicker('refresh');
      });
  }

  function getDistricts(regency_id) {
      $.get('{{ url("ajax-districts") }}?regency_id=' + regency_id, function(data) {
          $('#district_id').html(data);
          district_id = $('#district_id').val();
          getVillages(district_id);
          $('#district_id').selectpicker('refresh');
      });
  }

  function getVillages(district_id) {
      $.get('{{ url("ajax-villages") }}?district_id=' + district_id, function(data) {
          $('#village_id').html(data);
          $('#village_id').selectpicker('refresh');
      });
  }

  function clearForm() {
      $('#pengajuan_form').trigger('reset');
      $('#pengajuan_form_pd').trigger('reset');
      $('#lapor_form').trigger('reset');
      $('#perceraian_id').val('');
      $('#perceraian_id_lapor').val('');
      $('#menggugat').hide();
      $('#digugat').hide();
      $('#peg_nip').html('');
      $('#regency_id').html('');
      $('#district_id').html('');
      $('#village_id').html('');
      $('.selectpicker').selectpicker('refresh');
  }

  function pengajuan() {
      clearForm();
      $('.lampiran').show();
      $('#peg_nip_input').show();
      $('#peg_nip_edit').hide();
      $("#modal_pengajuan_input").modal("show");
  }

  function lapor(id) {
      clearForm();
      $('#perceraian_id_lapor').val(id);
      $("#modal_lapor").modal("show");
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

  function cekJenis() {
      jenis = $('#jenis').val();
      if (jenis == 'Menggugat') {
          $('#menggugat').show();
          $('#digugat').hide();
      } else if (jenis == 'Digugat') {
          $('#menggugat').hide();
          $('#digugat').show();
      } else {
          $('#menggugat').hide();
          $('#digugat').hide();
      }
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

  function tolak(id) {
      clearForm();
      $('#perceraian_id_tolak').val(id);
      $('#modal_tolak_pengajuan').modal('show');
  }

  function editpd(id) {
      clearForm();
      $('#perceraian_id_lampiran').val(id);
      $('#modal_lampiran_pd').modal('show');
  }

  function ajukan(id) {
      Swal.fire({
          title: 'Yakin?',
          text: "Data yang diinput sudah benar semua?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#2CA961',
          confirmButtonText: 'Ya, Ajukan!'
      }).then((result) => {
          if (result.isConfirmed) {
              $.ajax({
                  url: "{{url('perceraian/pengajuan/ajukan')}}",
                  type: "post",
                  data: {
                      _token: '{{csrf_token()}}',
                      id: id
                  },
                  dataType: "json",
                  success: function(data) {
                      console.log(data);
                      if (data) {
                          Swal.fire('Berhasil!', 'Pengajuan Perceraian berhasil diajukan.', 'success');
                          getPengajuanData();
                      } else {
                          Swal.fire('Gagal!', 'Pengajuan Perceraian gagal diajukan, silahkan refresh halaman ini kemudian coba lagi.', 'error');
                      }
                  },
                  error: function(err) {
                      Swal.fire('Error!', 'Lihat errornya di console.', 'error');
                  }
              });
          }
      })
  }

  function isAllowed(ext) {
      switch (ext.toLowerCase()) {
          case 'pdf':
              return true;
      }
      return false;
  }

  function cekLampiran(that) {
      filename = $(that).val();
      var parts = filename.split('.');
      var ext = parts[parts.length - 1];
      if (!isAllowed(ext)) {
          Swal.fire('Maaf!', "File yang anda lampirkan tidak diizinkan!<br>Ekstensi yang diizinkan adalah: pdf", 'error');
          $(that).val('');
      }
      if ($(that).attr('id') != 'dokumen_tugas_akhir') {
          if (that.files[0].size > 2097152) {
              Swal.fire("Maaf!", "File yang di input tidak boleh lebih dari 2MB.", "error");
              $(that).val('');
          }
      }
  }

  function cekPekerjaan() {
      jenis = $('#pekerjaan_pasangan').val();
      console.log(jenis);
      if (jenis == 'Lain - Lain') {
          $('#jenispekerjaan').show();
      }else{
          $('#jenispekerjaan').hide();
      }
  }
  
</script>
@endsection