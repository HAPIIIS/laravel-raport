<!DOCTYPE html>
<html lang="en">

<head>
  @include('template.head')
  <title>{{ $sub_page }}</title>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-success position-absolute w-100"></div>
  @include('template.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('template.navbar.navbarpkn')
    <!-- End Navbar -->

    {{-- Modal Tambah --}}
    @include('template.modal.pkn.tambahdata')
    {{-- End Modal Tambah --}}

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Nilai Harian</h6>
              <div class="div-button d-flex justify-content-end mt-2 me-3">
                <a href="{{ url('/nilai/pkn/tambah') }}" data-bs-toggle="modal" data-bs-target="#tambahModal">
                  <button type="button" class="btn btn-success">
                    <i class="bi bi-plus-lg color-white"></i>
                    Tambah Data
                  </button>
                </a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#importExcel">
                  <button type="button" class="btn btn-outline-success ms-2">
                    <i class="bi bi-database-add"></i>
                    Import Excel
                  </button>
                </a>
              </div>
              <div class="color-success mt-1 ms-1 me-1">
                {{ $nilai_pkn->links() }}
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              @if($nilai_pkn->count())
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NISN</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Siswa</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PH 1</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PH 2</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PH 3</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PH 4</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PH 5</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PH 6</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PH 7</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PH 8</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PH 9</th>                      
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($nilai_pkn as $pkn)
                    <tr>
                      <td>
                        <div class="d-flex px-1 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-s text-center ms-3">{{ $nilai_pkn->firstItem()+ $loop->index }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-s font-weight-bold mb-0 me-2">{{ $pkn->nisn }}</p>
                      </td>
                      <td class="align-middle text-sm">
                        <p class="text-s font-weight-bold mb-0 me-2">{{ $pkn->nama_siswa }}</p>
                      </td>
                      <td class="align-middle">
                        <p class="text-s font-weight-bold mb-0 me-2">{{ $pkn->kelas }}</p>
                      </td>
                      <td class="align-middle text-center">
                        @if ($pkn->ph1 < 75)
                          <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $pkn->ph1 }}</p>
                        @else
                          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $pkn->ph1 }}</p>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if ($pkn->ph2 < 75)
                          <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $pkn->ph2 }}</p>
                        @else
                          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $pkn->ph2 }}</p>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if ($pkn->ph3 < 75)
                          <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $pkn->ph3 }}</p>
                        @else
                          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $pkn->ph3 }}</p>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if ($pkn->ph4 < 75)
                          <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $pkn->ph4 }}</p>
                        @else
                          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $pkn->ph4 }}</p>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if ($pkn->ph5 < 75)
                          <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $pkn->ph5 }}</p>
                        @else
                          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $pkn->ph5 }}</p>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if ($pkn->ph6 < 75)
                          <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $pkn->ph6 }}</p>
                        @else
                          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $pkn->ph6 }}</p>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if ($pkn->ph7 < 75)
                          <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $pkn->ph7 }}</p>
                        @else
                          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $pkn->ph7 }}</p>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if ($pkn->ph8 < 75)
                          <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $pkn->ph8 }}</p>
                        @else
                          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $pkn->ph8 }}</p>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        @if ($pkn->ph9 < 75)
                          <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $pkn->ph9 }}</p>
                        @else
                          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $pkn->ph9 }}</p>
                        @endif
                      </td>
                      <td class="align-middle">
                        <a href="{{ url('/nilai/pkn/' . $pkn->id . '/edit') }}" data-bs-toggle="modal" data-bs-target="#editNilaiModal{{ $pkn->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                      <td class="align-middle">
                        <a href="{{ url('/nilai/pkn/' . $pkn->id . '/hapus') }}" data-bs-toggle="modal" data-bs-target="#deleteNilaiModal{{ $pkn->id }}" class="text-secondary font-weight-bold text-xs">
                          Hapus
                        </a>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </div>
                @include('template.modal.pkn.editdata')
                </table>
              @else
                <p class="text-center fs-4">Data tidak ditemukan!</p>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  </div>
  @include('template.script')
</body>

</html>