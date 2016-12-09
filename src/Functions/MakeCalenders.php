<?php 

namespace Ken\Calender\Functions;

trait MakeCalenders 
{
	protected function _RpIndo($money)
	{
		return 'Rp'.number_format($money, '2',',','.');
	}

	protected function _Terbilang($money) 
	{
        $money = (float)$money;

        $bilangan = [
        	'','satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan','sepuluh','sebelas'
        ];

        if ($money < 12) {

            return $bilangan[$money];

        } else if ($money < 20) {

            return $bilangan[$money - 10] . ' belas';

        } else if ($money < 100) {

            $hasil_bagi = (int)($money / 10);

            $hasil_mod = $money % 10;

            return trim(sprintf('%s puluh %s', $bilangan[$hasil_bagi], $bilangan[$hasil_mod]));

        } else if ($money < 200) { 
        	return sprintf('seratus %s', $this->_Terbilang($money - 100));

        } else if ($money < 1000) { 
        	$hasil_bagi = (int)($money / 100); $hasil_mod = $money % 100; 

        	return trim(sprintf('%s ratus %s', $bilangan[$hasil_bagi], $this->_Terbilang($hasil_mod)));

        } else if ($money < 2000) { 
        	return trim(sprintf('seribu %s', $this->_Terbilang($money - 1000)));

        } else if ($money < 1000000) { 
        	$hasil_bagi = (int)($money / 1000); $hasil_mod = $money % 1000; 

        	return sprintf('%s ribu %s', $this->_Terbilang($hasil_bagi), $this->_Terbilang($hasil_mod));

        } else if ($money < 1000000000) { 
        	$hasil_bagi = (int)($money / 1000000); $hasil_mod = $money % 1000000; 

        	return trim(sprintf('%s juta %s', $this->_Terbilang($hasil_bagi), $this->_Terbilang($hasil_mod)));

        } else if ($money < 1000000000000) { 
        	$hasil_bagi = (int)($money / 1000000000); $hasil_mod = fmod($money, 1000000000); 

        	return trim(sprintf('%s milyar %s', $this->_Terbilang($hasil_bagi), $this->_Terbilang($hasil_mod)));

        } else if ($money < 1000000000000000) { 
        	$hasil_bagi = $money / 1000000000000; $hasil_mod = fmod($money, 1000000000000); 

        	return trim(sprintf('%s triliun %s', $this->_Terbilang($hasil_bagi), $this->_Terbilang($hasil_mod)));

        } else {

            return 'lebih dari seribu triliun rupiah';

        }
    }

	protected function _Months($month)
	{
		switch ($month){
			case 1:
			return "januari";
			break;
			case 2:
			return "februari";
			break;
			case 3:
			return "maret";
			break;
			case 4:
			return "april";
			break;
			case 5:
			return "mei";
			break;
			case 6:
			return "juni";
			break;
			case 7:
			return "juli";
			break;
			case 8:
			return "agustus";
			break;
			case 9:
			return "september";
			break;
			case 10:
			return "oktober";
			break;
			case 11:
			return "november";
			break;
			case 12:
			return "desember";
			break;
		}
	}

	protected function _Date($date)
	{
		date_default_timezone_set('Asia/Jakarta');

		return substr($date,8,2);
	}

	protected function _Month($month)
	{
		date_default_timezone_set('Asia/Jakarta');

		return $this->_Months(substr($month,5,2));
	}

	protected function _Years($years)
	{
		date_default_timezone_set('Asia/Jakarta');

		return substr($years,0,4);
	}

	protected function _DateMonthYears($date)
	{
		date_default_timezone_set('Asia/Jakarta');
		
		return $this->_Date($date).' '.$this->_Month($date).' '.$this->_Years($date);
	}

	protected function _GetDay($day)
	{
		date_default_timezone_set('Asia/Jakarta');

		$day = date('D', strtotime($day));

		$dayList = [
			'Sun' => "minggu",
			'Mon' => "senin",
			'Tue' => "selasa",
			'Wed' => "rabu",
			'Thu' => "kamis",
			'Fri' => "jum'at",
			'Sat' => "sabtu"
		];

		return $dayList[$day];
	}
}