<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_FAX.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/팩스전송-API#ReSendFax
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $SenderID = '';
    $SendKey = '';
    $RefKey = '';

    $Result = $BaroService_FAX->ReSendFax([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'SenderID' => $SenderID,
        'SendKey' => $SendKey,
        'RefKey' => $RefKey,
    ])->ReSendFaxResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
