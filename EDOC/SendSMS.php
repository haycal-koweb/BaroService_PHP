<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_EDOC.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/전자문서-API#SendSMS
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $UserID = '';
    $MgtKey = '';
    $FromNumber = '';
    $ToNumber = '';
    $Contents = '';

    $Result = $BaroService_EDOC->SendSMS([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'UserID' => $UserID,
        'MgtKey' => $MgtKey,
        'FromNumber' => $FromNumber,
        'ToNumber' => $ToNumber,
        'Contents' => $Contents,
    ])->SendSMSResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
