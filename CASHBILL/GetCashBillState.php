<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_CASHBILL.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/현금영수증-API#GetCashBillState
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $UserID = '';
    $MgtKey = '';

    $Result = $BaroService_CASHBILL->GetCashBillState([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'UserID' => $UserID,
        'MgtKey' => $MgtKey,
    ])->GetCashBillStateResult;

    if ($Result->BarobillState < 0) { // 실패
        echo $Result->BarobillState;
    } else { // 호출 성공
        // 필드정보는 레퍼런스를 참고해주세요.
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
