<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_BANKACCOUNT.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/계좌조회-API#GetBankAccountEx
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $AvailOnly = 1;

    $Result = $BaroService_BANKACCOUNT->GetBankAccountEx([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'AvailOnly' => $AvailOnly,
    ])->GetBankAccountExResult;

    if (!array_key_exists('BankAccount', $Result)) {
        $BankAccounts = [];
    } else if (!is_array($Result->BankAccount)) {
        $BankAccounts = [$Result->BankAccount];
    } else {
        $BankAccounts = $Result->BankAccount;
    }

    if (count($BankAccounts) == 1 && $BankAccounts[0]->BankAccountNum < 0) { // 실패
        echo $BankAccounts[0]->BankAccountNum;
    } else { // 호출 성공
        foreach ($BankAccounts as $BankAccount) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($BankAccount);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
