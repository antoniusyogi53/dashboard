<section class="content-header">
	<h1>
		Dashboard
		<small>advanced tables</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Filter Data</a></li>
		<li class="active">Data Tabels</li>
	</ol>
</section>

<section class="content">

	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Status</h3>
					<br>
					<form action="" method="POST"> 
						<div>
							<select class="form" name="status">
								<option value="Success">Success</option>
								<option value="On Progress">On Progress</option>
								<option value="Cancel By System">Cancel By System</option>
								<option value="Cancel By Customer">Cancel By Customer</option>                          
								<option value="Cancel By Vendor">Cancel By Vendor</option>
							</select>
							<br><br>
							<form action="" method="POST"> 
								<div>
									<select class="form" name="Provinsi_Order">
										<option value="">Pilih Provinsi</option>
										<option value="Aceh">Aceh</option>
										<option value="Bali">Bali</option>
										<option value="Banten">Banten</option>    
										<option value="Bengkulu">Bengkulu</option>
										<option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
										<option value="Daerah Khusus Ibukota Jakarta">Daerah Khusus Ibukota Jakarta</option>
										<option value="Gorontalo">Gorontalo</option>
										<option value="Jambi">Jambi</option>
										<option value="Jawa Barat">Jawa Barat</option>
										<option value="Jawa Tengah">Jawa Tengah</option>
										<option value="Jawa Timur">Jawa Timur</option>
										<option value="Kalimantan Barat">Kalimantan Barat</option>
										<option value="Kalimantan Selatan">Kalimantan Selatan</option>
										<option value="Kalimantan Tengah">Kalimantan Tengah</option>
										<option value="Kalimantan Timur">Kalimantan Timur</option>
										<option value="Kalimantan Utara">Kalimantan Utara</option>
										<option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
										<option value="Kepulauan Riau">Kepulauan Riau</option>
										<option value="Lampung">Lampung</option>
										<option value="Maluku">Maluku</option>
										<option value="Maluku Utara">Maluku Utara</option>
										<option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
										<option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
										<option value="Papua">Papua</option>
										<option value="Papua Barat">Papua Barat</option>
										<option value="Riau">Riau</option>                            
										<option value="Sulawesi Barat">Sulawesi Barat</option>
										<option value="Sulawesi Selatan">Sulawesi Selatan</option>
										<option value="Sulawesi Tengah">Sulawesi Tengah</option>
										<option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
										<option value="Sulawesi Utara">Sulawesi Utara</option>
										<option value="Sumatera Barat">Sumatera Barat</option>
										<option value="Sumatera Selatan">Sumatera Selatan</option>
										<option value="Sumatera Utara">Sumatera Utara</option>
									</select>
									<input type="Date" name="from" id="from"   placeholder="To Date">
									<input type="Date" name="to" id="to"  placeholder="To Date">
									<button>Cari</button>   
								</div>
							</form>
						</div>
					</form>
				</br>
			</div>

			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Data Tabel Berdasarkan Status</h3>
				</div>

				<div class="box-body">
					<a href="proses.php">Export ke Excell</a><br><br>
					<div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped table-paginate">
							<thead>
								<tr><th>#</th><th>Waktu Tekan Tombol Order</th><th>Category</th><th>Sub Category</th><th>Catatan</th><th>Tanggal Order</th><th>Jam Order</th>
									<th>Alamat</th><th>Biaya Service</th><th>ID Customer</th><th>Customer</t><th>Nomer Customer</th><th>Email Customer</th><th>Voucher Code</th><th>Normal Amount</th><th>Provinsi Order</th><th>Kota Order</th>
									<th>Kecamatan Order</th><th>Status</th><th>Total Diskon</th><th>Working Duration</th><th>ID Vendor</th><th>Vendor Full Name</th><th>Vendor Phone Number</th><th>Vendor Skill</th><th>Vendor Rate</th><th>Rate</th><th>Review</th><th>Type Review</th><th>Additional Items/0/Name</th>
									<th>Additional Items/0/Price</th><th>Additional Items/0/Status</th><th>Additional Items/0/Denomination</th><th>Additional Items/0/Quantity</th><th>Additional Items/1/Name</th><th>Additional Items/1/Price</th><th>Additional Items/1/Status</th><th>Additional Items/1/Denomination</th><th>Additional Items/1/Quantity</th></tr>
								</thead>

								<tfoot>
									<tr><th>#</th><th>Waktu Tekan Tombol Order</th><th>Category</th><th>Sub Category</th><th>Catatan</th><th>Tanggal Order</th><th>Jam Order</th>
										<th>Alamat</th><th>Biaya Service</th><th>ID Customer</th><th>Customer</t><th>Nomer Customer</th><th>Email Customer</th><th>Voucher Code</th><th>Normal Amount</th><th>Provinsi Order</th><th>Kota Order</th>
										<th>Kecamatan Order</th><th>Status</th><th>Total Diskon</th><th>Working Duration</th><th>ID Vendor</th><th>Vendor Full Name</th><th>Vendor Phone Number</th><th>Vendor Skill</th><th>Vendor Rate</th><th>Rate</th><th>Review</th><th>Type Review</th><th>Additional Items/0/Name</th>
										<th>Additional Items/0/Price</th><th>Additional Items/0/Status</th><th>Additional Items/0/Denomination</th><th>Additional Items/0/Quantity</th><th>Additional Items/1/Name</th><th>Additional Items/1/Price</th><th>Additional Items/1/Status</th><th>Additional Items/1/Denomination</th><th>Additional Items/1/Quantity</th></tr>
									</tfoot>

									<tbody>
										<?php
										$from=@$_POST["from"];
										$to=@$_POST["to"];
										$status=@$_POST['status'];
										$no=1;
										$koneksi = mysqli_connect('localhost','root','','yoofix');

										$sql = mysqli_query($koneksi, "SELECT * from are GROUP BY Email_Customer, status having Tanggal_Pemesanan BETWEEN '$from' AND '$to' and status='$status' ORDER BY Tanggal_Pemesanan desc");
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
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
