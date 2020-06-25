<div class="card">
    <div class="card-body">
        <h4>Dibawah ini adalah Data Transaksi</h4>

        <table id="tabel_transaksi" class="table">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Customer</th>
                <th>ID Motor</th>
                <th>Waktu Pembelian</th>
                <th>Jangka Waktu</th>
                <th>Nominal Angsuran</th>
                <th>Total Pembelian</th>
            </tr>
        </thead>
        </table>
    </div>
</div>

<script type="text/javascript" src="<?= base_url('assets/datatable/datatables.min.js')?>"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $('#tabel_transaksi').DataTable({
                "processing": true,
                "serverSide": true,
                "lengthMenu": [[5, 10, 20, -1],[ 1, 10, 20, "ALL"]],
                "ajax": "http://localhost/BE_CicilanMotor/transaksi/get_all_transaksi"
            })
        })
</script>