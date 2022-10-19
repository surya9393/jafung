    <table class="text-center table-bordered m-5">
        <div>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Upload</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </div>
        <input id="ktp" type="hidden" name="uid" value=" {{ auth()->user()->id }} ">
        <div class="form-group">
            @foreach ($uploaded as $getdata)
            <tr>
                <td>1</td>
                <td>
                 <div class="d-grid justify-content-center">
                    <b>KTP:</b>
                </div>
                </td>
                <td>
                    @if (empty($getdata->ktp))
                    <input id="ktp" type="file" name="ktp">
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->ktp))
                    <button type="button" class="btn btn-sm btn-danger">X</button>
                    @else
                    <button type="button" class="btn btn-sm btn-success">X</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->ktp))
                        <p>Data Tidak Ada</p>
                    @else
                    <div class="d-grid">
                        <a class="btn btn-success" href="/dashboard/upload/lihat/{{ $getdata->id }}">Lihat</a><br/>
                        <a class="btn btn-warning" href="/dashboard/upload/edit/{{ $getdata->id }}">Edit</a><br/>
                        <a class="btn btn-danger" href="/dashboard/upload/hapus/{{ $getdata->id }}">Hapus</a>
                    </div>
                    @endif
                </td>
            </tr>
        </div>
        <div class="form-group">
            <tr>
                <td>2</td>
                <td>
                    <b>NPWP:</b>
                </td>
                <td>
                    @if (empty($getdata->npwp))
                    <input id="ktp" type="file" name="npwp">
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->npwp))
                        <p>Data Tidak Ditemukan</p>
                    @else
                    <button type="button" class="btn btn-sm btn-success">X</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->npwp))
                    <p>Data Tidak Ada</p>
                    @else
                    <div class="d-grid">
                        <a class="btn btn-success" href="/dashboard/upload/lihat/{{ $getdata->id }}">Lihat</a><br/>
                        <a class="btn btn-warning" href="/dashboard/upload/edit/{{ $getdata->id }}">Edit</a><br/>
                        <a class="btn btn-danger" href="/dashboard/upload/hapus/{{ $getdata->id }}">Hapus</a>
                    </div>
                    @endif
                </td>
            </tr>
        </div>
        <div class="form-group">
            <tr>
                <td>3</td>
                <td>
                    <b>SK Pengangkatan PNS:</b>
                </td>
                <td>
                    @if (empty($getdata->skpns))
                    <input id="skpns" type="file" name="skpns">
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->skpns))
                        <p>Data Tidak Ditemukan</p>
                    @else
                    <button type="button" class="btn btn-sm btn-success">X</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->skpns))
                    <p>Data Tidak Ada</p>
                    @else
                    <div class="d-grid">
                        <a class="btn btn-success" href="/dashboard/upload/lihat/{{ $getdata->id }}">Lihat</a><br/>
                        <a class="btn btn-warning" href="/dashboard/upload/edit/{{ $getdata->id }}">Edit</a><br/>
                        <a class="btn btn-danger" href="/dashboard/upload/hapus/{{ $getdata->id }}">Hapus</a>
                    </div>
                    @endif
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>4</td>
                <td>
                    <b>SK Pengkat Terakhir:</b>
                </td>
                <td>
                    @if (empty($getdata->skpangkat))
                    <input id="skpangkat" type="file" name="skpangkat" >
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->skpangkat))
                        <p>Data Tidak Ditemukan</p>
                    @else
                    <button type="button" class="btn btn-sm btn-success">X</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->id))
                    <p>Data Tidak Ada</p>
                    @else
                    <div class="d-grid">
                        <a class="btn btn-success" href="/dashboard/upload/lihat/{{ $getdata->id }}">Lihat</a><br/>
                        <a class="btn btn-warning" href="/dashboard/upload/edit/{{ $getdata->id }}">Edit</a><br/>
                        <a class="btn btn-danger" href="/dashboard/upload/hapus/{{ $getdata->id }}">Hapus</a>
                    </div>
                    @endif
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>5</td>
                <td>
                    <b>SK Ijazah Terakhir:</b>
                </td>
                <td>
                    @if (empty($getdata->skijazah))
                    <input id="skijazah" type="file" name="skijazah" >
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->skijazah))
                        <p>Data Tidak Ditemukan</p>
                    @else
                    <button type="button" class="btn btn-sm btn-success">X</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->id))
                    <p>Data Tidak Ada</p>
                    @else
                    <div class="d-grid">
                        <a class="btn btn-success" href="/dashboard/upload/lihat/{{ $getdata->id }}">Lihat</a><br/>
                        <a class="btn btn-warning" href="/dashboard/upload/edit/{{ $getdata->id }}">Edit</a><br/>
                        <a class="btn btn-danger" href="/dashboard/upload/hapus/{{ $getdata->id }}">Hapus</a>
                    </div>
                    @endif
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>6</td>
                <td>
                    <b>SK Penempatan/Jabatan Terakhir:</b>
                </td>
                <td>
                    @if (empty($getdata->skjabatan))
                    <input id="skjabatan" type="file" name="skjabatan" >
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->skjabatan))
                        <p>Data Tidak Ditemukan</p>
                    @else
                    <button type="button" class="btn btn-sm btn-success">X</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->id))
                    <p>Data Tidak Ada</p>
                    @else
                    <div class="d-grid">
                        <a class="btn btn-success" href="/dashboard/upload/lihat/{{ $getdata->id }}">Lihat</a><br/>
                        <a class="btn btn-warning" href="/dashboard/upload/edit/{{ $getdata->id }}">Edit</a><br/>
                        <a class="btn btn-danger" href="/dashboard/upload/hapus/{{ $getdata->id }}">Hapus</a>
                    </div>
                    @endif
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>7</td>
                <td>
                    <b>SK Sehat Dokter:</b>
                </td>
                <td>
                    @if (empty($getdata->sksehat))
                    <input id="sksehat" type="file" name="sksehat" >
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->sksehat))
                        <p>Data Tidak Ditemukan</p>
                    @else
                    <button type="button" class="btn btn-sm btn-success">X</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->id))
                    <p>Data Tidak Ada</p>
                    @else
                    <div class="d-grid">
                        <a class="btn btn-success" href="/dashboard/upload/lihat/{{ $getdata->id }}">Lihat</a><br/>
                        <a class="btn btn-warning" href="/dashboard/upload/edit/{{ $getdata->id }}">Edit</a><br/>
                        <a class="btn btn-danger" href="/dashboard/upload/hapus/{{ $getdata->id }}">Hapus</a>
                    </div>
                    @endif
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>8</td>
                <td>
                    <b>Surat Pernyataan Bersedia menjadi Jabatan Fungsional:</b>
                </td>
                <td>
                    @if (empty($getdata->suratpernyataan))
                    <input id="surat_pernyataan" type="file" name="suratpernyataan" >
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->suratpernyataan))
                        <p>Data Tidak Ditemukan</p>
                    @else
                    <button type="button" class="btn btn-sm btn-success">X</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->id))
                    <p>Data Tidak Ada</p>
                    @else
                    <div class="d-grid">
                        <a class="btn btn-success" href="/dashboard/upload/lihat/{{ $getdata->id }}">Lihat</a><br/>
                        <a class="btn btn-warning" href="/dashboard/upload/edit/{{ $getdata->id }}">Edit</a><br/>
                        <a class="btn btn-danger" href="/dashboard/upload/hapus/{{ $getdata->id }}">Hapus</a>
                    </div>
                    @endif
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>9</td>
                <td>
                    <b>SK Keterangan dari Pimpinan Tinggi Madya/Pratama:</b>
                </td>
                <td></td>
                <td>
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>9.A</td>
                <td>
                    <b>Tidak Pernah Dijatuhi Hukuman Disiplin Berat:</b>
                </td>
                <td>
                    @if (empty($getdata->k))
                    <input id="disiplin" type="file" name="disiplin" >
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->ktp))
                        <p>Data Tidak Ditemukan</p>
                    @else
                    <button type="button" class="btn btn-sm btn-success">X</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->id))
                    <p>Data Tidak Ada</p>
                    @else
                    <div class="d-grid">
                        <a class="btn btn-success" href="/dashboard/upload/lihat/{{ $getdata->id }}">Lihat</a><br/>
                        <a class="btn btn-warning" href="/dashboard/upload/edit/{{ $getdata->id }}">Edit</a><br/>
                        <a class="btn btn-danger" href="/dashboard/upload/hapus/{{ $getdata->id }}">Hapus</a>
                    </div>
                    @endif
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>9.B</td>
                <td>
                    <b>Tidak sedang dalam tugas belajar:</b>
                </td>
                <td>
                    @if (empty($getdata->ktp))
                    <input id="belajar" type="file" name="belajar" >
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->ktp))
                        <p>Data Tidak Ditemukan</p>
                    @else
                    <button type="button" class="btn btn-sm btn-success">X</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->id))
                    <p>Data Tidak Ada</p>
                    @else
                    <div class="d-grid">
                        <a class="btn btn-success" href="/dashboard/upload/lihat/{{ $getdata->id }}">Lihat</a><br/>
                        <a class="btn btn-warning" href="/dashboard/upload/edit/{{ $getdata->id }}">Edit</a><br/>
                        <a class="btn btn-danger" href="/dashboard/upload/hapus/{{ $getdata->id }}">Hapus</a>
                    </div>
                    @endif
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>9.C</td>
                <td>
                    <b>Tidak sedang dalam cuti diluar tanggungan Negara:</b>
                </td>
                <td>
                    @if (empty($getdata->ktp))
                    <input id="cuti" type="file" name="cuti" >
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->ktp))
                        <p>Data Tidak Ditemukan</p>
                    @else
                    <button type="button" class="btn btn-sm btn-success">X</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->id))
                    <p>Data Tidak Ada</p>
                    @else
                    <div class="d-grid">
                        <a class="btn btn-success" href="/dashboard/upload/lihat/{{ $getdata->id }}">Lihat</a><br/>
                        <a class="btn btn-warning" href="/dashboard/upload/edit/{{ $getdata->id }}">Edit</a><br/>
                        <a class="btn btn-danger" href="/dashboard/upload/hapus/{{ $getdata->id }}">Hapus</a>
                    </div>
                    @endif
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>9.D</td>
                <td>
                    <b>Pernah melaksanakan tugas bidang kewirausahaan:</b>
                </td>
                <td>
                    @if (empty($getdata->ktp))
                    <input id="wirausaha" type="file" name="wirausaha" >
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->ktp))
                        <p>Data Tidak Ditemukan</p>
                    @else
                    <button type="button" class="btn btn-sm btn-success">X</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->id))
                    <p>Data Tidak Ada</p>
                    @else
                    <div class="d-grid">
                        <a class="btn btn-success" href="/dashboard/upload/lihat/{{ $getdata->id }}">Lihat</a><br/>
                        <a class="btn btn-warning" href="/dashboard/upload/edit/{{ $getdata->id }}">Edit</a><br/>
                        <a class="btn btn-danger" href="/dashboard/upload/hapus/{{ $getdata->id }}">Hapus</a>
                    </div>
                    @endif
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>10</td>
                <td>
                    <b>Salinan Nilai Prestasi (2 Tahun Terakhir):</b>
                </td>
                <td>
                    @if (empty($getdata->ktp))
                    <input id="nilai" type="file" name="nilai" >
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->ktp))
                        <p>Data Tidak Ditemukan</p>
                    @else
                    <button type="button" class="btn btn-sm btn-success">X</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->id))
                    <p>Data Tidak Ada</p>
                    @else
                    <div class="d-grid">
                        <a class="btn btn-success" href="/dashboard/upload/lihat/{{ $getdata->id }}">Lihat</a><br/>
                        <a class="btn btn-warning" href="/dashboard/upload/edit/{{ $getdata->id }}">Edit</a><br/>
                        <a class="btn btn-danger" href="/dashboard/upload/hapus/{{ $getdata->id }}">Hapus</a>
                    </div>
                    @endif
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>11</td>
                <td>
                    <b>Daftar Riwayat Hidup:</b>
                </td>
                <td>
                    @if (empty($getdata->ktp))
                    <input id="niografi" type="file" name="biografi" >
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->ktp))
                        <p>Data Tidak Ditemukan</p>
                    @else
                    <button type="button" class="btn btn-sm btn-success">X</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->id))
                    <p>Data Tidak Ada</p>
                    @else
                    <div class="d-grid">
                        <a class="btn btn-success" href="/dashboard/upload/lihat/{{ $getdata->id }}">Lihat</a><br/>
                        <a class="btn btn-warning" href="/dashboard/upload/edit/{{ $getdata->id }}">Edit</a><br/>
                        <a class="btn btn-danger" href="/dashboard/upload/hapus/{{ $getdata->id }}">Hapus</a>
                    </div>
                    @endif
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>12</td>
                <td>
                    <b>Peta Jabatan Instansi terkait kebutuhan JAFUNG Pengembang Kewirausahaan:</b>
                </td>
                <td>
                    @if (empty($getdata->ktp))
                    <input id="peta" type="file" name="peta" >
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->ktp))
                        <p>Data Tidak Ditemukan</p>
                    @else
                    <button type="button" class="btn btn-sm btn-success">X</button>
                    @endif
                </td>
                <td>
                    @if (empty($getdata->id))
                    <p>Data Tidak Ada</p>
                    @else
                    <div class="d-grid">
                        <a class="btn btn-success" href="/dashboard/upload/lihat/{{ $getdata->id }}">Lihat</a><br/>
                        <a class="btn btn-warning" href="/dashboard/upload/edit/{{ $getdata->id }}">Edit</a><br/>
                        <a class="btn btn-danger" href="/dashboard/upload/hapus/{{ $getdata->id }}">Hapus</a>
                    </div>
                    @endif
                </td>
            </tr>
            @endforeach
        </div>
    </table>
