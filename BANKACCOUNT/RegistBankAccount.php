<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_BANKACCOUNT.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/계좌조회-API#RegistBankAccount
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $CollectCycle = '';
    $Bank = '';
    $BankAccountType = '';
    $BankAccountNum = '';
    $BankAccountPwd = '';
    $WebId = '';
    $WebPwd = '';
    $IdentityNum = '';
    $Alias = '';
    $Usage = '';

    $Result = $BaroService_BANKACCOUNT->RegistBankAccount([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'CollectCycle' => $CollectCycle,
        'Bank' => $Bank,
        'BankAccountType' => $BankAccountType,
        'BankAccountNum' => $BankAccountNum,
        'BankAccountPwd' => $BankAccountPwd,
        'WebId' => $WebId,
        'WebPwd' => $WebPwd,
        'IdentityNum' => $IdentityNum,
        'Alias' => $Alias,
        'Usage' => $Usage,
    ])->RegistBankAccountResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
