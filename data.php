<link rel="stylesheet" href="./assets/css/style.css">

<?php 
    // Koneksi database
    $connect = mysqli_connect("localhost", "root", "", "iot");

    // Membaca data dari tabel sensor
    // Baca informasi untuk semua data
    $tanggal = mysqli_query($connect, "SELECT tanggal FROM sensor ORDER BY id ASC");
    // Baca informasi suhu untuk semua data
    $suhu = mysqli_query($connect, "SELECT suhu FROM sensor ORDER BY id ASC");
    // Baca tanggal untuk 5 data terakhir
?>

<!-- tampilan grafik -->
<div class="panel">
    <div class="panel__heading">
        Grafik Sensor Suhu
    </div>

    <div class="panel-body">
        <canvas id="myChart"></canvas>
        <script type="text/javascript">
            const canvas = document.getElementById('myChart');
            const data = {
                labels : [
                    <?php
                        while($data_tanggal = mysqli_fetch_array($tanggal)) {
                            echo '"'.$data_tanggal['tanggal'].'",';
                        }
                    ?>
                ],
                datasets: [{
                    label: "Suhu",
                    data: [
                        <?php
                            while($data_suhu = mysqli_fetch_array($suhu)) {
                                echo '"'.$data_suhu['suhu'].'",';
                            }
                        ?>
                    ]
                }]
            };

            // option grafik
            const option = {
                
            }
        </script>
    </div>
</div>