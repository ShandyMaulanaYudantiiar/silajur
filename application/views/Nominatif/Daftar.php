<div class="col-lg-12 grid-margin stretch-card">
    <div class="card mb-5">
        <div class="card-body">
            <h4 class="card-title">Daftar Proposal</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-hover data">
                    <thead>
                        <tr>
                            <th class="font-weight-bold text-center"> Tahun Pajak </th>
                            <th class="font-weight-bold"> Nomor </th>
                            <th class="font-weight-bold"> Jenis </th>
                            <th class="font-weight-bold text-center"> Jumlah </th>
                            <th class="font-weight-bold text-center"> Nama Perusahaan </th>
                            <th class="font-weight-bold text-center"> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($Proposal as $Proposal) { ?>
                            <tr>
                                <td align="center">2021</td>
                                <td><?php echo $Proposal->nomor ?></td>
                                <td><?php echo $Proposal->jenis ?></td>
                                <td align="center"><?php echo $Proposal->jumlah ?></td>
                                <td align="center"><?php echo $Proposal->nm_perusahaan ?></td>
                                <td align="center">
                                    <a href="<?= base_url('Nominatif/edit/' . $Proposal->nomor); ?>" class="btn btn-info btn-sm" role="button">
                                    Edit
                                </a>
                                <a href="<?= base_url('Nominatif/delete/' . $Proposal->nomor); ?>" class="btn btn-danger btn-sm" role="button">
                                    Delete
                                </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>