<?php 

namespace Ken\Calender\Functions;

class Calender
{
	use MakeCalenders;

	public function _Rp($money)
	{
		return $this->_RpIndo($money);
	}

	public function _RpTerbilang($money)
	{
		if($money >= 1000000000000000) {
			return $this->_Terbilang($money);
		}
		return $this->_Terbilang($money).' rupiah';
	}

	public function _DateIndo($date)
	{
		return $this->_Date($date);
	}

	public function _MonthIndo($month)
	{
		return $this->_Month($month);
	}

	public function _YearsIndo($years)
	{
		return $this->_Years($years);
	}

	public function _DMY($date)
	{
		return $this->_DateMonthYears($date);
	}

	public function _Day($day)
	{
		return $this->_GetDay($day);
	}
}