<?php
$year = $_POST['year'];
$month = $_POST['month'];
include 'config/dbconn.php';
$q = mysqli_query($conn,"select * from client inner join client_billing on client.id=client_billing.id_client inner join client_queue on client.id=client_queue.id_client where year(payment_done) = '$year' and month(payment_done) = '$month'");
$qsum = mysqli_query($conn,"select sum(price) as total from client inner join client_billing on client.id=client_billing.id_client inner join client_queue on client.id=client_queue.id_client where year(payment_done) = '$year' and month(payment_done) = '$month'");
$total = mysqli_fetch_array($qsum);
?>
<html>
    <body>     
        <table style="width:100%;">
            <tr>
            <td style="height:100px; width:70%;"><img align="left" src="assets/img/cosmic.jpg" style="width:35%;"></td>
            <td style="height:100px;"><h2 align="right" style="padding-top:20px;">Laporan Tagihan</h2></td>
            </tr>
        </table>
        <h4>Dicetak Pada : <i><?php echo date("Y/m/d");?></i></h4>
        <center>
            <table style="width: 95%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <th style="border: 1px solid black;">No</th>
                    <th style="border: 1px solid black;">Nama</th>
                    <th style="border: 1px solid black;">Alamat</th>
                    <th style="border: 1px solid black;">Tanggal Pemasangan</th>
                    <th style="border: 1px solid black;">Total Tagihan</th>
                    <th style="border: 1px solid black;">Dibayar</th>
                </tr>
                <?php
                    while($r = mysqli_fetch_array($q)){
                        echo '
                <tr>
                    <td style="border: 1px solid black; text-align: center; width: fit-content;">'.$r['id'].'</td>
                    <td style="border: 1px solid black;">'.$r['name'].'</td>
                    <td style="border: 1px solid black;">'.$r['address'].'</td>
                    <td style="border: 1px solid black; text-align: center;">'.$r['payment_due'].'</td>
                    <td style="border: 1px solid black; text-align: center;">Rp. '.number_format($r['price'],2,',','.').'</td>
                    <td style="border: 1px solid black; text-align: center;">'.$r['payment_done'].'</td>
                </tr>';}?>
                <tr>
                    <td colspan="5" style="border: 1px solid black; text-align: center; width: fit-content;"><b>Total</b></td>
                    <td style="border: 1px solid black; text-align: center; width: fit-content;"><?php echo 'Rp. '.number_format($total['total'],2,',','.');?></td>
                </tr>
            </table>
            <a href="#" onclick="window.print()">cetak</a>
        </center>
    </body>
</html>
