<!-- TEST MATRIX -->

<section id="test-matrix">

    <h2>Test Matrix Kalkulator Biaya</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Input</th>
                <th>Expected</th>
                <th>Actual</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>1</td>
                <td>
                    Fee: Rp 350.000<br>
                    Peserta: 1<br>
                    Diskon: 0%<br>
                    Admin: Rp 25.000
                </td>
                <td>Rp 375.000</td>
                <td>Rp 375.000</td>
                <td>PASS</td>
            </tr>

            <tr>
                <td>2</td>
                <td>
                    Fee: Rp 350.000<br>
                    Peserta: 1<br>
                    Diskon: 10%<br>
                    Admin: Rp 25.000
                </td>
                <td>Rp 340.000</td>
                <td>Rp 340.000</td>
                <td>PASS</td>
            </tr>

            <tr>
                <td>3</td>
                <td>
                    Fee: Rp 350.000<br>
                    Peserta: 2<br>
                    Diskon: 25%<br>
                    Admin: Rp 25.000
                </td>
                <td>Rp 550.000</td>
                <td>Rp 550.000</td>
                <td>PASS</td>
            </tr>

            <tr>
                <td>4</td>
                <td>
                    Fee: Rp 0<br>
                    Peserta: 1<br>
                    Diskon: 10%<br>
                    Admin: Rp 0
                </td>
                <td>Rp 0</td>
                <td>Rp 0</td>
                <td>PASS</td>
            </tr>

            <tr>
                <td>5</td>
                <td>
                    Fee: Rp 2.500.000<br>
                    Peserta: 3<br>
                    Diskon: 10%<br>
                    Admin: Rp 50.000
                </td>
                <td>Rp 6.800.000</td>
                <td>Rp 6.800.000</td>
                <td>PASS</td>
            </tr>

        </tbody>
    </table>

</section>