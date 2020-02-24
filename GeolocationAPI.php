<?php


class GeolocationAPI
{

    public function geometryMath($lat1, $long1, $lat2, $long2)
    {
        // Радиус земли
        $earthRadius = 6372795;

        // косинусы и синусы широт
        $cl1 = cos($lat1);
        $cl2 = cos($lat2);
        $sl1 = sin($lat1);
        $sl2 = sin($lat2);
        $delta = $long2 - $long1;
        $cdelta = cos($delta);
        $sdelta = sin($delta);

        // вычисления длины большого круга
        $y = sqrt(pow($cl2 * $sdelta, 2) + pow($cl1 * $sl2 - $sl1 * $cl2 * $cdelta, 2));
        $x = $sl1 * $sl2 + $cl1 * $cl2 * $cdelta;

        $ad = atan2($y, $x);
        $km = $ad * $earthRadius;
        $km = round($km / 1000);

        return $km;
    }

    public function checkType($data) {
        if (gettype($data) == 'string') {
            return $data = json_decode($data, $assoc=true);
        }
        else {
            return $data;
        }

    }

    public function calcDistVarJSON($objLatitude, $objLongitude, $data, $format)
    {

        // перевожу координаты в радианы
        $lat1 = $objLatitude * M_PI / 180;
        $long1 = $objLongitude * M_PI / 180;

        $distance = [];

        $data = $this->checkType($data);

        for ($i = 0; $i < count($data); $i++) {

            $lat2 = $data[$i]['latitude'] * M_PI / 180;
            $long2 = $data[$i]['longitude'] * M_PI / 180;

            $km = $this->geometryMath($lat1, $long1, $lat2, $long2);

            $distance[$i]['idUser'] = $data[$i]['idUser'];
            $distance[$i]['km'] = $km;
        }

        if ($format == 1) {
            return json_encode($distance);
        }
        else {
            return $distance;
        }
    }

    public function calcDistVar($objLatitude1, $objLongitude1, $objLatitude2, $objLongitude2, $format)
    {
        // перевожу координаты в радианы
        $lat1 = $objLatitude1 * M_PI / 180;
        $long1 = $objLongitude1 * M_PI / 180;
        $lat2 = $objLatitude2 * M_PI / 180;
        $long2 = $objLongitude2 * M_PI / 180;

        $km = $this->geometryMath($lat1, $long1, $lat2, $long2);

        if ($format == 1) {
            return json_encode($km);
        }
        else {
            return $km;
        }
    }

    public function calcDistJSON($objDataStart, $objDataEnd, $format)
    {

        $objDataStart = $this->checkType($objDataStart);
        $objDataEnd = $this->checkType($objDataEnd);

        // перевожу координаты в радианы
        $lat1 = $objDataStart['latitude'] * M_PI / 180;
        $long1 = $objDataStart['longitude'] * M_PI / 180;

        $distance = [];

        for ($i = 0; $i < count($objDataEnd); $i++) {

            $lat2 = $objDataEnd[$i]['latitude'] * M_PI / 180;
            $long2 = $objDataEnd[$i]['longitude'] * M_PI / 180;

            $km = $this->geometryMath($lat1, $long1, $lat2, $long2);

            $distance[$i]['idUser'] = $objDataEnd[$i]['idUser'];
            $distance[$i]['km'] = $km;
        }

        if ($format == 1) {
            return json_encode($distance);
        }
        else {
            return $distance;
        }
    }

}

// Created by student School 21 - mtytos