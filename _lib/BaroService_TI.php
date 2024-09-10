<?php
/*
================================================================================================
바로빌 전자세금계산서 연동서비스
================================================================================================
*/
$BaroService_URL = 'https://testws.baroservice.com/TI.asmx?WSDL';    //테스트베드용
//$BaroService_URL = 'https://ws.baroservice.com/TI.asmx?WSDL';		//실서비스용

$BaroService_TI = new SoapClient($BaroService_URL, array(
    'trace' => 'true',
    'encoding' => 'UTF-8' //소스를 ANSI로 사용할 경우 euc-kr로 수정
));
