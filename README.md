## API-Geolocation<br>

### Разработано для проекта MACTHA - социальная сеть знакомств, аналог Tinder, Badoo<br>

API позволяет определить расстояние между пользователями социальной сети<br>
- используемый язык - PHP

### Usage: <br>

<b>1. calcDistVarJSON(</b><em>  широта юзера, долгота юзера, данные, format возвращаемых данных </em><b>)</b><br>
- широта / долгота юзера = значения / переменные<br>
- format = 1, данные в JSON<br>
- format = 0, данные в Associative array<br>
- данные в формате JSON / Associative array<br>

<b><em>пример принимаемых данных JSON:</b></em><br>
<pre>
[{"idUser":"1","latitude":"54.320396","longitude":"39.1917651"}, {"idUser":"2","latitude":"53.320396","longitude":"33.1917651"}]</pre>

<b><em>пример принимаемых данных Associative array:</b></em><br>
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
##### ATTENTION! Ключи: idUser, latitude, longitude - обязательно должны быть использованы<br>

<b><em>Возвращаемые значения JSON:</b></em><br>
<pre>
[{"idUser":"1","km":128},{"idUser":"2","km":393}]</pre>

<b><em>Возвращаемые значения Associative array:</b></em><br>
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
</pre>

<b>2. 

