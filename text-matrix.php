<table>
    <tr>
        <th>Komponen</th>
        <th>Nilai</th>
    </tr>

    <tr>
        <td>Biaya per peserta</td>
        <td>Rp <?= number_format($fee, 0, ',', '.') ?></td>
    </tr>

    <tr>
        <td>Jumlah peserta</td>
        <td><?= $participantCount ?></td>
    </tr>

    <tr>
        <td>Subtotal</td>
        <td>Rp <?= number_format($subtotal, 0, ',', '.') ?></td>
    </tr>

    <tr>
        <td>Diskon (<?= $discountPercent ?>%)</td>
        <td>- Rp <?= number_format($discount, 0, ',', '.') ?></td>
    </tr>

    <tr>
        <td>Biaya admin</td>
        <td>Rp <?= number_format($adminFee, 0, ',', '.') ?></td>
    </tr>

    <tr>
        <td><strong>Total akhir</strong></td>
        <td><strong>Rp <?= number_format($total, 0, ',', '.') ?></strong></td>
    </tr>
</table>