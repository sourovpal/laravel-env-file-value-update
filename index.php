$key = "APP_LOCALE";
$value = $request->lang;
file_put_contents(app()->environmentFilePath(), str_replace($key . '=' . env($key), $key . '=' . $value, file_get_contents(app()->environmentFilePath())));
