<?php
if(!function_exists('bulan'))
{
    function bulan($bulan)
    {
    Switch ($bulan){
        case 1 : $bulan="Januari";
            Break;
        case 2 : $bulan="Februari";
            Break;
        case 3 : $bulan="Maret";
            Break;
        case 4 : $bulan="April";
            Break;
        case 5 : $bulan="Mei";
            Break;
        case 6 : $bulan="Juni";
            Break;
        case 7 : $bulan="Juli";
            Break;
        case 8 : $bulan="Agustus";
            Break;
        case 9 : $bulan="September";
            Break;
        case 10 : $bulan="Oktober";
            Break;
        case 11 : $bulan="November";
            Break;
        case 12 : $bulan="Desember";
            Break;
        }
    return $bulan;
    }
}

if(!function_exists('decimal'))
{
    function decimal($value)
    {
    return number_format($value,2,",",".");
    }
}

function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
    $hari = date("D", strtotime($tanggal));
    if ($hari=="Sun") {
        $hari="Minggu";
    } else if ($hari=="Mon") {
        $hari="Senin";
    } else if ($hari=="Tue") {
        $hari="Selasa";
    } else if ($hari=="Wed") {
        $hari="Rabu";
    } else if ($hari=="Thu") {
        $hari="Kamis";
    } else if ($hari=="Fri") {
        $hari="Jumat";
    } else if ($hari=="Sat") {
        $hari="Sabtu";
    }
 
	return $hari.', ' .$pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

function weekOfMonth($date) {
    //Get the first day of the month.
    $firstOfMonth = strtotime(date("Y-m-01", $date));
    //Apply above formula.
    return weekOfYear($date) - weekOfYear($firstOfMonth) + 1;
}

function weekOfYear($date) {
    $weekOfYear = intval(date("W", $date));
    if (date('n', $date) == "1" && $weekOfYear > 51) {
        // It's the last week of the previos year.
        $weekOfYear = 0;    
    }
    return $weekOfYear;
}

function rangedateofweek($month, $year) {
    $month = 2;
    $year = 2017;
    
    $week = date("W", strtotime($year . "-" . $month ."-01")); // weeknumber of first day of month
    
    Echo date("d/m/Y", strtotime($year . "-" . $month ."-01")) ." - "; // first day of month
    $unix = strtotime($year."W".$week ."+1 week");
    While(date("m", $unix) == $month){ // keep looping/output of while it's correct month
    
       Echo date("d/m/Y", $unix-86400) . "\n"; // Sunday of previous week
       Echo date("d/m/Y", $unix) ." - "; // this week's monday
       $unix = $unix + (86400*7);
    }
    Echo date("d/m/Y", strtotime("last day of ".$year . "-" . $month)); //echo last day of month
}

function getIsoWeeksInYear($year) {
    $date = new DateTime;
    $date->setISODate($year, 53);
    return ($date->format("W") === "53" ? 53 : 52);
}

function penyebut($nilai) {
    $nilai = abs($nilai);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($nilai < 12) {
        $temp = " ". $huruf[$nilai];
    } else if ($nilai <20) {
        $temp = penyebut($nilai - 10). " belas";
    } else if ($nilai < 100) {
        $temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
    } else if ($nilai < 200) {
        $temp = " seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
        $temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
    } else if ($nilai < 2000) {
        $temp = " seribu" . penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
        $temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
        $temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
        $temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
    } else if ($nilai < 1000000000000000) {
        $temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
    }     
    return $temp;
}

function terbilang($nilai) {
    if($nilai<0) {
        $hasil = "minus ". trim(penyebut($nilai));
    } else {
        $hasil = trim(penyebut($nilai));
    }     		
    return $hasil;
}

function timetostr($timestamp, $now = null) {
    $age = ($now ?: time()) - $timestamp;
    $future = ($age < 0);
    $age = abs($age);

    $age = (int)($age / 60);        // minutes ago
    if ($age == 0) return $future ? "momentarily" : "just now";

    $scales = [
        ["minute", "minutes", 60],
        ["hour", "hours", 24],
        ["day", "days", 7],
        ["week", "weeks", 4.348214286],     // average with leap year every 4 years
        ["month", "months", 12],
        ["year", "years", 10],
        ["decade", "decades", 10],
        ["century", "centuries", 1000],
        ["millenium", "millenia", PHP_INT_MAX]
    ];

    foreach ($scales as list($singular, $plural, $factor)) {
        if ($age == 0)
            return $future
                ? "in less than 1 $singular"
                : "less than 1 $singular ago";
        if ($age == 1)
            return $future
                ? "in 1 $singular"
                : "1 $singular ago";
        if ($age < $factor)
            return $future
                ? "in $age $plural"
                : "$age $plural ago";
        $age = (int)($age / $factor);
    }
}

?>