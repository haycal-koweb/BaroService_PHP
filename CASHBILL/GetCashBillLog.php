<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_CASHBILL.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/현금영수증-API#GetCashBillLog
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $UserID = '';
    $MgtKey = '';

    $Result = $BaroService_CASHBILL->GetCashBillLog([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'UserID' => $UserID,
        'MgtKey' => $MgtKey,
    ])->GetCashBillLogResult;

    $Logs = !is_array($Result->CashBillLog) ? [$Result->CashBillLog] : $Result->CashBillLog;

    if ($Logs[0]->Seq < 0) { // 실패
        echo $Logs[0]->Seq;
    } else { // 호출 성공
        foreach ($Logs as $Log) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($Log);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
