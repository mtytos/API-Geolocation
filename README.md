## API-Geolocation<br>

### Разработано для проекта MACTHA - социальная сеть знакомств, аналог Tinder, Badoo<br>

API позволяет определить расстояние между пользователями социальной сети<br>
- используемый язык - PHP<br>

### Usage: <br><br>

<b>1. calcDistVarJSON(</b><em>  широта юзера, долгота юзера, данные БД, format возвращаемых данных </em><b>)</b><br>
- широта / долгота юзера = значения / переменные<br>
- данные БД в формате JSON / Associative array<br>
- format = 1, данные в JSON<br>
- format = 0, данные в Associative array<br>

<em>пример принимаемых данных БД JSON:</em><br>
<pre>
[{"idUser":"1","latitude":"54.320396","longitude":"39.1917651"}, {"idUser":"2","latitude":"53.320396","longitude":"33.1917651"}]</pre>

<em>пример принимаемых данных БД Associative array:</em><br>
<pre>
Array
(
    [0] => Array
        (
            [idUser] => 1
            [latitude] => 54.320396
            [longitude] => 39.1917651
        )

    [1] => Array
        (
            [idUser] => 2
            [latitude] => 53.320396
            [longitude] => 33.1917651
        )
    [2] => ...
    ...
)
</pre>
#### ATTENTION! Ключи: idUser, latitude, longitude - обязательно должны быть использованы<br>

<em>Возвращаемые значения JSON:</em><br>
<pre>
[{"idUser":"1","km":128},{"idUser":"2","km":393}]</pre>

<em>Возвращаемые значения Associative array:</em><br>
<pre>
Array
(
    [0] => Array
        (
            [idUser] => 1
            [km] => 128
        )

    [1] => Array
        (
            [idUser] => 2
            [km] => 393
        )
)
</pre><br><br>

<b>2. calcDistJSON (</b><em>  данные юзера, данные БД, format возвращаемых данных </em><b>)</b><br>
- данные юзера в формате JSON / Associative array<br>
- данные БД в формате JSON / Associative array<br>
- format = 1, данные в JSON<br>
- format = 0, данные в Associative array<br>

<em>пример принимаемых данных юзера JSON:</em><br>
<pre>
{"latitude":55.320396,"longitude":38.1917651}</pre>

<em>пример принимаемых данных БД Associative array:</em><br>
<pre>
Array
(
    [latitude] => 55.320396
    [longitude] => 38.1917651
)
</pre>
#### ATTENTION! Ключи: latitude, longitude - обязательно должны быть использованы<br>
Принимаемые значения данных БД и возвращаемые значения аналогичны методу 1.<br><br>

<b>3. calcDistVar (</b><em>  широта1, долгота1, широта2, долгота2, format  </em><b>)</b><br>
- широта / долгота  = значения / переменные<br>
- format = 1, данные в JSON<br>
- format = 0, данные в Associative array<br>
Возвращаемое значение - расстояние между объектами
