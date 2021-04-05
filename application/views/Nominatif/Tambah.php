<div class="col-12 grid-margin stretch-card">
    <div class="card mb-5">
        <div class="card-body">
            <h4 class="card-title">Form Pengajuan Nominatif</h4>
            <p class="card-description"> Isikan data berikut untuk mengajukan Proposal </p>
            <form class="forms-sample" action="<?= base_url('Nominatif/add'); ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group row mt-3">
                    <label class="col-sm-3 col-form-label">Nomor</label>
                    <div class="col-sm-7">
                        <input type="number" class="form-control" name="nomor">
                    </div>
                </div>
                <span><strong>Pemberian entertainment dan sejenisnya</strong></span>
                <div class="form-group row mt-2">
                    <label class="col-sm-3 col-form-label">Tanggal</label>
                    <div class="col-sm-7">
                        <input type="date" class="form-control" name="tgl" placeholder="Pilih Tanggal">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tempat</label>
                    <div class="col-sm-7">
                        <input type="text" rows="2" name="tmpt" class="form-control"></input>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-7">
                        <textarea type="text" rows="5" name="almt" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jenis</label>
                    <div class="col-sm-7">
                        <input type="text" name="jenis" class="form-control"></input>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jumlah</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="jumlah" placeholder="Masukkan Jumlah">
                    </div>
                </div>
                <span><strong>Relasi Usaha yang diberikan entertaiment dan sejenisnya</strong></span>
                <div class="form-group row mt-3">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-7">
                        <input type="text" name="nm_usaha" class="form-control"></input>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Posisi</label>
                    <div class="col-sm-7">
                        <input type="text" name="posisi" class="form-control"></input>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Perusahaan</label>
                    <div class="col-sm-7">
                        <input type="text" name="nm_perusahaan" class="form-control"></input>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jenis Usaha</label>
                    <div class="col-sm-7">
                        <input type="text" name="jn_usaha" class="form-control"></input>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Keterangan</label>
                    <div class="col-sm-7">
                        <textarea type="text" rows="5" name="ket" class="form-control"></textarea>
                    </div>
                </div>
                <button class="btn btn-success" type="submit">submit</button>
            </form>
        </div>
    </div>
</div>