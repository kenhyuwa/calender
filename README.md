#Calender

format uang dan tanggal indonesia

##Install

Using composer
```
composer require ken/calender
```

Add the service provider to `config/app.php`

```php

'providers' => [
    Ken\Calender\CalenderServiceProvider::class,
]

'aliases' => [
    'Calender' => Ken\Calender\Facades\Calender::class,
]
```

##Usage
example

```php

{{ Calender::_Rp(10000) }} // Rp10.000,00
{{ Calender::_RpTerbilang(10000) }} // sepuluh ribu rupiah
{{ Calender::_DateIndo('2016-12-09') }} // 09
{{ Calender::_MonthIndo('2016-12-09') }} // desember
{{ Calender::_YearsIndo('2016-12-09') }} // 2016
{{ Calender::_DMY('2016-12-09') }} // 09 desember 2016
{{ Calender::_Day('2016-12-09') }} // jum'at

```

>make `Controller.php`

```php

public function Price()
{
	$price = Calender::_Rp(10000);
	
	return view('view', compact('price'));
}

```

>make `view.blade.php`

```php

Price = {{ $price }}

```

## Issues and contribution

Just submit an issue or pull request through GitHub. Thanks!