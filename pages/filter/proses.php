<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data.xls");
?>
<h3 class="box-title">Data Tabel Berdasarkan Status</h3>
<table id="example1" class="table table-bordered table-striped table-paginate">
  <thead>
    <tr><th>No</th><th>Waktu Tekan Tombol Order</th><th>Category</th><th>Sub Category</th><th>Catatan</th><th>Tanggal Pemesanan</th><th>Waktu Pemesanan Pekerjaan</th>
      <th>Address</th><th>Biaya Service</th><th>ID Customer</th><th>Customer Full Name</t><th>Nomer Customer</th><th>Email Customer</th><th>Voucher Code</th><th>Normal Amount</th><th>Provinsi Order</th><th>Kota Order</th>
      <th>Kecamatan Order</th><th>Status</th><th>Total Diskon</th><th>Working Duration</th><th>ID Vendor</th><th>Vendor Full Name</th><th>Vendor Phone Number</th><th>Vendor Skill</th><th>Vendor Rate</th><th>Rate</th><th>Review</th><th>Type Review</th><th>Additional Items/0/Name</th>
      <th>Additional Items/0/Price</th><th>Additional Items/0/Status</th><th>Additional Items/0/Denomination</th><th>Additional Items/0/Quantity</th><th>Additional Items/1/Name</th><th>Additional Items/1/Price</th><th>Additional Items/1/Status</th><th>Additional Items/1/Denomination</th><th>Additional Items/1/Quantity</th></tr>
    </thead>

    <tbody>
      <?php
      $from=@$_POST["from"];
      $to=@$_POST["to"];
      $status=@$_POST['status'];
      $no=1;
      $koneksi = mysqli_connect('localhost','root','','yoofix');
      $sql = mysqli_query($koneksi, "SELECT * from are");
      while ($row = mysqli_fetch_array($sql)) {
        ?>
        <tr >
          <td><?php echo $row['No']; ?></td>
          <td><?php echo $row['Waktu_Tekan_Tombol_Order']; ?></td>          
          <td><?php echo $row['category']; ?></td>
          <td><?php echo $row['sub_category']; ?></td>
          <td><?php echo $row['Catatan']; ?></td>
          <td><?php echo $row['Tanggal_Pemesanan']; ?></td>          
          <td><?php echo $row['Waktu_Pemesanan_Pekerjaan']; ?></td>
          <td><?php echo $row['address']; ?></td>
          <td><?php echo $row['Biaya_Service']; ?></td>
          <td><?php echo $row['ID_Customer']; ?></td>          
          <td><?php echo $row['customer_full_name']; ?></td>
          <td><?php echo $row['Nomor_Customer']; ?></td> 
          <td><?php echo $row['Email_Customer']; ?></td>
          <td><?php echo $row['voucher_code']; ?></td>          
          <td><?php echo $row['normal_amount']; ?></td>
          <td><?php echo $row['Provinsi_Order']; ?></td>
          <td><?php echo $row['Kota_Order']; ?></td>
          <td><?php echo $row['Kecamatan_Order']; ?></td>          
          <td><?php echo $row['status']; ?></td>
          <td><?php echo $row['Total_diskon']; ?></td>
          <td><?php echo $row['working_duration']; ?></td>
          <td><?php echo $row['ID_Vendor']; ?></td>          
          <td><?php echo $row['vendor_full_name']; ?></td>
          <td><?php echo $row['vendor_phone_number']; ?></td>
          <td><?php echo $row['vendor_skill']; ?></td>
          <td><?php echo $row['vendor_rate']; ?></td>          
          <td><?php echo $row['rate']; ?></td>
          <td><?php echo $row['review']; ?></td>
          <td><?php echo $row['Type_Review']; ?></td>
          <td><?php echo $row['additional_items_0_name']; ?></td>
          <td><?php echo $row['additional_items_0_price']; ?></td>
          <td><?php echo $row['additional_items_0_status']; ?></td>          
          <td><?php echo $row['additional_items_0_denomination']; ?></td>
          <td><?php echo $row['additional_items_0_quantity']; ?></td>
          <td><?php echo $row['additional_items_1_name']; ?></td>
          <td><?php echo $row['additional_items_1_price']; ?></td>
          <td><?php echo $row['additional_items_1_status']; ?></td>
          <td><?php echo $row['additional_items_1_denomination']; ?></td>          
          <td><?php echo $row['additional_items_1_quantity']; ?></td>
        </tr>

        <?php 
        $no++;
      } ?>
    </tbody>
  </table>