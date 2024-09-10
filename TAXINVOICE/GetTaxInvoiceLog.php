<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/세금계산서-API#GetTaxInvoiceLog
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $MgtKey = '';

    $Result = $BaroService_TI->GetTaxInvoiceLog([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'MgtKey' => $MgtKey,
    ])->GetTaxInvoiceLogResult;

    $Logs = !is_array($Result->InvoiceLog) ? [$Result->InvoiceLog] : $Result->InvoiceLog;

    if ($Logs[0]->Seq < 0) { // 호출 실패
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
