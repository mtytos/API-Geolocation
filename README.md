## API-Geolocation<br>

### Разработано для проекта MACTHA - социальная сеть знакомств, аналог Tinder, Badoo<br>

<b>API позволяет определить расстояние между пользователями социальной сети</b><br>
- используемый язык - PHP

### Usage: <br>

#### метод calcDistVarJSON(<em>широта юзера, долгота юзера, данные, format возвращаемых данных</em>)<br>
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
