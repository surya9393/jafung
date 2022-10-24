@extends('dashboard.admin.layouts.main')
@section('content')
    <div class="row mt-5">
        <div class="container">
            <h1 class="text-center">Daftar Persyaratan</h1>
            <div class="d-flex justify-content-md-end">
                <a href="{{ url('/admin') }}" class="btn btn-primary m-2">Kembali</a>
                <a href="{{ url('/cetak/pendaftar') }}" class="btn btn-success m-2">Cetak</a>
            </div>
            @foreach ($upload as $data)
            <table class="table mt-4">
                <thead class="text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Upload</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody class="text-center">

                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $data->author->name }}</td>
                        <td>
                            KTP
                        </td>
                        <td>
                                @if ($verif->s_ktp == '0')
                                <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                                @elseif ($verif->s_ktp == '1')
                                <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                                @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-search"></i>
                            </button>
                            <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">KTP</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="/ktp/{{ $data->ktp }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>{{ $data->author->name }}</td>
                        <td>NPWP</td>
                        <td>
                                @if ($verif->s_npwp == '0')
                                <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                                @elseif ($verif->s_npwp == '1')
                                <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                                @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-search"></i>
                            </button>
                            <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">KTP</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="/ktp/{{ $data->ktp }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>{{ $data->author->name }}</td>
                        <td>SK PNS</td>
                        <td>
                            @if ($verif->s_skpns == '0')
                                <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                                @elseif ($verif->s_skpns == '1')
                                <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                                @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-search"></i>
                            </button>
                            <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">KTP</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="/ktp/{{ $data->ktp }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>{{ $data->author->name }}</td>
                        <td>SK Pangkat</td>
                        <td>
                                @if ($verif->s_skpangkat == '0')
                                <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                                @elseif ($verif->s_skpangkat == '1')
                                <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                                @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-search"></i>
                            </button>
                            <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">KTP</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="/ktp/{{ $data->ktp }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>{{ $data->author->name }}</td>
                        <td>SK Ijazah</td>
                        <td>
                            @if ($verif->s_skpangkat == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_skpangkat == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-search"></i>
                            </button>
                            <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">KTP</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="/ktp/{{ $data->ktp }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>{{ $data->author->name }}</td>
                        <td>SK Jabatan</td>
                        <td>
                            @if ($verif->s_skpangkat == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_skpangkat == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-search"></i>
                            </button>
                            <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">KTP</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="/ktp/{{ $data->ktp }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>{{ $data->author->name }}</td>
                        <td>SK Sehat</td>
                        <td>
                            @if ($verif->s_skpangkat == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_skpangkat == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-search"></i>
                            </button>
                            <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">KTP</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="/ktp/{{ $data->ktp }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>{{ $data->author->name }}</td>
                        <td>Surat Pernyataan</td>
                        <td>
                            @if ($verif->s_skpangkat == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_skpangkat == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-search"></i>
                            </button>
                            <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">KTP</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="/ktp/{{ $data->ktp }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9A</th>
                        <td>{{ $data->author->name }}</td>
                        <td>Disiplin</td>
                        <td>
                            @if ($verif->s_skpangkat == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_skpangkat == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-search"></i>
                            </button>
                            <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">KTP</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="/ktp/{{ $data->ktp }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9B</th>
                        <td>{{ $data->author->name }}</td>
                        <td>Belajar</td>
                        <td>
                            @if ($verif->s_skpangkat == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_skpangkat == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-search"></i>
                            </button>
                            <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">KTP</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="/ktp/{{ $data->ktp }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9C</th>
                        <td>{{ $data->author->name }}</td>
                        <td>Cuti</td>
                        <td>
                            @if ($verif->s_skpangkat == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_skpangkat == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-search"></i>
                            </button>
                            <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">KTP</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="/ktp/{{ $data->ktp }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9D</th>
                        <td>{{ $data->author->name }}</td>
                        <td>Wirausaha</td>
                        <td>
                            @if ($verif->s_skpangkat == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_skpangkat == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-search"></i>
                            </button>
                            <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">KTP</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="/ktp/{{ $data->ktp }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>{{ $data->author->name }}</td>
                        <td>Nilai</td>
                        <td>
                            @if ($verif->s_skpangkat == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_skpangkat == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-search"></i>
                            </button>
                            <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">KTP</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="/ktp/{{ $data->ktp }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>{{ $data->author->name }}</td>
                        <td>Biografi</td>
                        <td>
                            @if ($verif->s_skpangkat == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_skpangkat == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-search"></i>
                            </button>
                            <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">KTP</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="/ktp/{{ $data->ktp }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td>{{ $data->author->name }}</td>
                        <td>Pemetaan</td>
                        <td>
                            @if ($verif->s_skpangkat == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_skpangkat == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-search"></i>
                            </button>
                            <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">KTP</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="/ktp/{{ $data->ktp }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>


                </tbody>
            </table>
            @endforeach
        </div>
    </div>
    <script>const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))</script>
@endsection
