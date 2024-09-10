<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_FAX.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // https://dev.barobill.co.kr/docs/guides/바로빌-API-개발준비#FTP 를 참고하여 FTP에 파일을 업로드하신 후 API를 실행해주세요.
    // ---------------------------------------------------------------------------------------------------

    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/팩스전송-API#SendFaxFromFTP
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = 'D77611FE-BA30-4B04-970F-53C4964C73E7';
    $CorpNum = '4838701146';
    $SenderID = 'koweb2018';
    $FileName = "INVOICE_202401053879.pdf";
    $FromNumber = '01035851130';
    $ToNumber = '8447054356';
    $ToCorpName = 'BungaPora';
    $ToName = 'Test Ms. Shin';
    $SendDT = date('YmdHis');
    $RefKey = '';

    $Result = $BaroService_FAX->SendFaxFromFTP([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'SenderID' => $SenderID,
        'FileName' => $FileName,
        'FromNumber' => $FromNumber,
        'ToNumber' => $ToNumber,
        'ToCorpName' => $ToCorpName,
        'ToName' => $ToName,
        'SendDT' => $SendDT,
        'RefKey' => $RefKey,
    ])->SendFaxFromFTPResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
