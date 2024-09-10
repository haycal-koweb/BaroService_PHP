<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_BANKACCOUNT.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/계좌조회-API#UpdateBankAccount
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $BankAccountNum = '';
    $BankAccountPwd = '';
    $WebId = '';
    $WebPwd = '';
    $IdentityNum = '';
    $Alias = '';
    $Usage = '';

    $Result = $BaroService_BANKACCOUNT->UpdateBankAccount([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'BankAccountNum' => $BankAccountNum,
        'BankAccountPwd' => $BankAccountPwd,
        'WebId' => $WebId,
        'WebPwd' => $WebPwd,
        'IdentityNum' => $IdentityNum,
        'Alias' => $Alias,
        'Usage' => $Usage,
    ])->UpdateBankAccountResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
