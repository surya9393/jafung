<form action="/dashboard/upload/proses" method="POST" enctype="multipart/form-data">
    @csrf
    <table class=" table table-bordered m-5">
        <div>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Upload</th>
            </tr>
        </div>
        <div class="form-group">
            <tr>
                <td>1</td>
                <td>
                    <b>KTP:</b>
                </td>
                    <input type="hidden" name="uid" value=" {{auth()->user()->id}} ">
                <td>
                    <input id="ktp" type="file" name="ktp">
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
                    <input id="ktp" type="file" name="npwp">
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
                    <input id="skpns" type="file" name="skpns">
                </td>
                <td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>4</td>
                <td>
                    <b>SK Pengkat Terakhir:</b>
                </td>
                <td>
                    <input id="skpangkat" type="file" name="skpangkat" >
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
                    <input id="skijazah" type="file" name="skijazah" >
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
                    <input id="skjabatan" type="file" name="skjabatan" >
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
                    <input id="sksehat" type="file" name="sksehat" >
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
                    <input id="surat_pernyataan" type="file" name="suratpernyataan" >
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
                    <input id="disiplin" type="file" name="disiplin" >
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>9.B</td>
                <td>
                    <b>Tidak sedang dalam tugas belajar:</b>
                </td>
                <td>
                    <input id="belajar" type="file" name="belajar" >
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>9.C</td>
                <td>
                    <b>Tidak sedang dalam cuti diluar tanggungan Negara:</b>
                </td>
                <td>
                    <input id="cuti" type="file" name="cuti" >
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>9.D</td>
                <td>
                    <b>Pernah melaksanakan tugas bidang kewirausahaan:</b>
                </td>
                <td>
                    <input id="wirausaha" type="file" name="wirausaha" >
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>10</td>
                <td>
                    <b>Salinan Nilai Prestasi (2 Tahun Terakhir):</b>
                </td>
                <td>
                    <input id="nilai" type="file" name="nilai" >
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>11</td>
                <td>
                    <b>Daftar Riwayat Hidup:</b>
                </td>
                <td>
                    <input id="niografi" type="file" name="biografi" >
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>12</td>
                <td>
                    <b>Peta Jabatan Instansi terkait kebutuhan JAFUNG Pengembang Kewirausahaan:</b>
                </td>
                <td>
                    <input id="peta" type="file" name="peta" >
            </tr>
        </div>


        <tr class="text-end">
            <td></td>
            <td></td>
            <td>
                <input type="submit" value="Upload" class="btn btn-primary">
            </td>
        </tr>
    </table>
</form>
