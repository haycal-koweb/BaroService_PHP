<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_CASHBILL.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/현금영수증-API#CancelCashBillPartial
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $UserID = '';
    $MgtKey = '';
    $CancelType = '';
    $CancelAmount = '';
    $CancelTax = '';
    $CancelServiceCharge = '';
    $SMSSendYN = false;
    $MailTitle = '';

    $Result = $BaroService_CASHBILL->CancelCashBillPartial([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'UserID' => $UserID,
        'MgtKey' => $MgtKey,
        'CancelType' => $CancelType,
        'CancelAmount' => $CancelAmount,
        'CancelTax' => $CancelTax,
        'CancelServiceCharge' => $CancelServiceCharge,
        'SMSSendYN' => $SMSSendYN,
        'MailTitle' => $MailTitle,
    ])->CancelCashBillPartialResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
