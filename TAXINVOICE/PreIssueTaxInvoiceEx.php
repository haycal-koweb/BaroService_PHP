<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/세금계산서-API#PreIssueTaxInvoiceEx
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $MgtKey = '';
    $SendSMS = false;
    $SMSMessage = '';
    $MailTitle = '';
    $BusinessLicenseYN = false;
    $BankBookYN = false;

    $Result = $BaroService_TI->PreIssueTaxInvoiceEx([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'MgtKey' => $MgtKey,
        'SendSMS' => $SendSMS,
        'SMSMessage' => $SMSMessage,
        'MailTitle' => $MailTitle,
        'BusinessLicenseYN' => $BusinessLicenseYN,
        'BankBookYN' => $BankBookYN,
    ])->PreIssueTaxInvoiceExResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
