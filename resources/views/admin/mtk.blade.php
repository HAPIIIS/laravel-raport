<!DOCTYPE html>
<html lang="en">

<head>
  @include('template.head')
  <title>{{ $sub_page }}</title>
  <style>
    ::-webkit-scrollbar{
        height: 7px;
        width: 24px;
        scroll-padding: 2rem;
    }
    ::-webkit-scrollbar-thumb:horizontal{
        border: 4px solid #2ecd89;
        background-clip: padding-box;
        background-color: white;
        border-radius: 10px;
    }
  </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-success position-absolute w-100"></div>
  @include('template.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('template.navbar.navbarmtk')
    <!-- End Navbar -->

    {{-- Modal Tambah --}}
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Nilai Harian</h6>
              <div class="div-button d-flex justify-content-end mt-2 me-3">
                <a href="{{ url('/nilai/matematika/tambah') }}" data-bs-toggle="modal" data-bs-target="#tambahModal">
                  <button type="button" class="btn btn-success">
                    <i class="bi bi-plus-lg color-white"></i>
                    Tambah Data
                  </button>
                </a>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              @if($nilai_mtk->count())
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                  @foreach ($nilai_mtk as $mtk)
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
                    <tr>
                      <td>
                        <div class="d-flex px-1 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-s text-center ms-3">{{ $nilai_mtk->firstItem()+ $loop->index }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->nisn }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->nama_siswa }}</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->kelas }}</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->ph1 }}</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->ph2 }}</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->ph3 }}</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->ph4 }}</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->ph5 }}</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->ph6 }}</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->ph7 }}</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->ph8 }}</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->ph9 }}</p>
                      </td>
                      <td class="align-middle">
                        <a href="{{ url('/nilai/matematika/' . $mtk->id . '/edit') }}" data-bs-toggle="modal" data-bs-target="#editNilaiModal{{ $mtk->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                      <td class="align-middle">
                        <a href="{{ url('/nilai/matematika/' . $mtk->id . '/hapus') }}" data-bs-toggle="modal" data-bs-target="#deleteNilaiModal{{ $mtk->id }}" class="text-secondary font-weight-bold text-xs">
                          Hapus
                        </a>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </div>
                @include('template.modal.matematika.editdata')
                  <div class="color-success mt-2 ms-2 me-2">
                    {{ $nilai_mtk->links() }}
                  </div>
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