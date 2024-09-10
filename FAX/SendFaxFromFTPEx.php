<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_FAX.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // https://dev.barobill.co.kr/docs/guides/바로빌-API-개발준비#FTP 를 참고하여 FTP에 파일을 업로드하신 후 API를 실행해주세요.
    // ---------------------------------------------------------------------------------------------------

    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/팩스전송-API#SendFaxFromFTPEx
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $SenderID = '';
    $FileCount = 2;
    $FileNames = ['', ''];
    $FromNumber = '';
    $ToNumber = '';
    $ToCorpName = '';
    $ToName = '';
    $SendDT = '';
    $RefKey = '';

    $Result = $BaroService_FAX->SendFaxFromFTPEx([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'SenderID' => $SenderID,
        'FileCount' => $FileCount,
        'FileNames' => $FileNames,
        'FromNumber' => $FromNumber,
        'ToNumber' => $ToNumber,
        'ToCorpName' => $ToCorpName,
        'ToName' => $ToName,
        'SendDT' => $SendDT,
        'RefKey' => $RefKey,
    ])->SendFaxFromFTPExResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
