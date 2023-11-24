<!-- File: app/Views/pageskaryawan/laporan.php -->
<?= $this->extend('layout/templatekaryawan'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="teks">
        <h2><center>Laporan Keuangan</center></h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>Total Pendapatan</td>
                    <!-- Pastikan untuk memeriksa apakah $total_pendapatan sudah didefinisikan sebelum menggunakannya -->
                    <td><?php if (isset($total_pendapatan)): ?>
                    <p>Total Pendapatan: <?= $total_pendapatan; ?></p>
                    <?php else: ?>
                    <p>Variabel $total_pendapatan belum didefinisikan.</p>
                    <?php endif; ?> </td>

                    
                </tr>
            </tbody>
        </table>

    </div>
</div>
<?= $this->endSection(); ?>