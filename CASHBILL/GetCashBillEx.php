<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_CASHBILL.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/현금영수증-API#GetCashBillEx
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $UserID = '';
    $MgtKey = '';

    $Result = $BaroService_CASHBILL->GetCashBillEx([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'UserID' => $UserID,
        'MgtKey' => $MgtKey,
    ])->GetCashBillExResult;

    if ($Result->TradeType < 0) { // 실패
        echo $Result->TradeType;
    } else { // 호출 성공
        // 필드정보는 레퍼런스를 참고해주세요.
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
