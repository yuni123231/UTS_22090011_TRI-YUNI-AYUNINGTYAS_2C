<?php
$curl = curl_init();
curl_setopt_array($curl,array(
    CURLOP_URL => 'https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM',
    CURLOP_RETURNTRANSFER => true,
    CURLOP_ENCODING => '',
    CURLOP_MAXREDIRS => 10,
    CURLOP_TIMEOUT => 0,
    CURLOP_FOLLOWLOCATION => true,
    CURLOP_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOP_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
curl_close($curl);
$response_array = json_decode($response,true);

$onscreen = '<table class="table" width="100%">
                <thead>
                    <th>KODE BARANG</th>
                    <th>NAMA BARANG</th>
                    <th>GROUP BARANG</th>
                    <th>HARGA JUAL</th>
                    <th>KUANTITAS</th>
                </thead>
                ';
 foreach ($response_array as $resp) {
    if(substr($resp['i_name'], 0, 1) === "L"){
     $onscreen.='<tr>
                    <td>'.$resp['i_code'].'</td>
                    <td>'.$resp['i_name'].'</td>
                    <td>'.$resp['g_code'].'</td>
                    <td>'.$resp['i_sell'].'</td>
                    <td>'.$resp['i_qty'].'</td>
                </tr>';
 }}
 $onscreen.='</table>';
 echo $onscreen;