<?php
function tgl_indo($tanggal){
    $bulan = array (
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember'
    );
    $pecahkan = explode('-', $tanggal);
     
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>

<page backtop="15mm" backbottom="15mm" backleft="12mm" backright="10mm"> 
    <page_header> 
    	<img src="../assets/images/logo_bumn.png" style="width: 120px; float: left;">
		<img src="../assets/images/logo_pal.png" style="width: 100px; float: right; margin-top: -10px;">
    </page_header> 

    <div>
    	<h4 style="text-align: center; text-transform: uppercase; margin: 10px 0px 0px !important;">daftar dokumen docking/floating repair</h4>
		<h4 style="text-align: center; text-transform: uppercase; text-decoration: underline; margin: 1px 0px 0px !important;">departemen penjualan harkan</h4>
	</div>

	<table border="0" cellpadding="10" cellspacing="10" style="margin-top: 10px;">
        <tr>
            <td>NAMA KAPAL</td>
            <td>:</td>
            <td width="480" style="border-bottom: 1px solid #000; padding:3px;"><?php echo $data_kapal['nama_proyek']; ?></td>
        </tr>
        <tr>
            <td>OWNER</td>
            <td>:</td>
            <td width="480" style="border-bottom: 1px solid #000; padding:3px;"><?php echo $data_kapal['owner']; ?></td>
        </tr>
        <tr>
            <td>KODE PROYEK</td>
            <td>:</td>
            <td width="480" style="border-bottom: 1px solid #000; padding:3px;"><?php echo $data_kapal['id_proyek']; ?></td>
        </tr>
		 <tr>
            <td>PEMASAR</td>
            <td>:</td>
            <td width="480" style="border-bottom: 1px solid #000; padding:3px;"><?php echo strtoupper($data_kapal['nama']); ?></td>
        </tr>
    </table>
    <table cellpadding="10" cellspacing="0" style="margin-top: 10px;">
    	<thead>
    		<tr style="font-size: 12px;">
    			<th width="10" style="border: 1px solid #000; padding:5px; text-align: center;">NO</th>
	    		<th width="210" style="border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 1px solid #000; padding:5px; text-align: center;">NAMA DOKUMEN</th>
	    		<th width="130" style="border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 1px solid #000; padding:5px; text-align: center;">NOMOR DOKUMEN</th>
	    		<th width="110" style="border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 1px solid #000; padding:5px; text-align: center;">TANGGAL</th>
	    		<th width="100" style="border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 1px solid #000; padding:5px; text-align: center;">KETERANGAN</th>
    		</tr>
	    		
    	</thead>
    	<tbody>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($sqla)) { ?>
                <tr style="font-size: 12px;">
                    <th width="10" style="border-left: 1px solid #000; border-bottom: 1px solid #000; border-right: 1px solid #000; padding:5px; text-align: center; font-weight: normal;"><?php echo $no++; ?></th>
                    <th width="210" style="border-bottom: 1px solid #000; border-right: 1px solid #000; padding:5px; text-align: left; font-weight: normal;"><?php echo $data['jenis']; ?></th>
                    <th width="130" style="border-bottom: 1px solid #000; border-right: 1px solid #000; padding:5px; text-align: center; font-weight: normal;"><?php echo $data['no_dokumen']; ?></th>
                    <th width="110" style="border-bottom: 1px solid #000; border-right: 1px solid #000; padding:5px; text-align: center; font-weight: normal;"><?php if($data['tanggal'] != null){ echo tgl_indo(date("Y-m-d", strtotime($data['tanggal']))); } ?></th>
                    <th width="100" style="border-bottom: 1px solid #000; border-right: 1px solid #000; padding:5px; text-align: left; font-weight: normal;"><?php echo $data['keterangan']; ?></th>
                </tr>
            <?php
            }
            ?>
        		
    	</tbody>
    </table>
</page> 