<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_CASHBILL.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/현금영수증-API#RegistCashBillEx
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CashBill = [
        'MgtKey' => '',
        'FranchiseCorpNum' => '',
        'FranchiseMemberID' => '',
        'FranchiseCorpName' => '',
        'FranchiseCEOName' => '',
        'FranchiseAddr' => '',
        'FranchiseTel' => '',
        'IdentityNum' => '',
        'HP' => '',
        'Fax' => '',
        'Email' => '',
        'TradeDate' => '',
        'TradeType' => 'N',
        'TradeUsage' => '1',
        'TradeDeductionType' => '1',
        'TradeMethod' => '1',
        'ItemName' => '',
        'Amount' => '',
        'Tax' => '',
        'ServiceCharge' => '',
        'CancelType' => '',
        'CancelNTSConfirmNum' => '',
        'CancelNTSConfirmDate' => '',
    ];

    $Result = $BaroService_CASHBILL->RegistCashBillEx([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CashBill['FranchiseCorpNum'],
        'UserID' => $CashBill['FranchiseMemberID'],
        'Invoice' => $CashBill,
    ])->RegistCashBillExResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
