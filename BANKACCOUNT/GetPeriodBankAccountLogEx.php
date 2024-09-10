<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_BANKACCOUNT.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/계좌조회-API#GetPeriodBankAccountLogEx
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $ID = '';
    $BankAccountNum = '';
    $StartDate = '';
    $EndDate = '';
    $CountPerPage = 10;
    $CurrentPage = 1;
    $OrderDirection = 2;

    $Result = $BaroService_BANKACCOUNT->GetPeriodBankAccountLogEx([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'ID' => $ID,
        'BankAccountNum' => $BankAccountNum,
        'StartDate' => $StartDate,
        'EndDate' => $EndDate,
        'CountPerPage' => $CountPerPage,
        'CurrentPage' => $CurrentPage,
        'OrderDirection' => $OrderDirection,
    ])->GetPeriodBankAccountLogExResult;

    if ($Result->CurrentPage < 0) { // 실패
        echo $Result->CurrentPage;
    } else { // 호출 성공
        echo $Result->CurrentPage;
        echo '<br/>';
        echo $Result->CountPerPage;
        echo '<br/>';
        echo $Result->MaxPageNum;
        echo '<br/>';
        echo $Result->MaxIndex;
        echo '<br/>';

        if (!array_key_exists('BankAccountLogEx', $Result->BankAccountLogList)) {
            $BankAccountLogs = [];
        } else if (!is_array($Result->BankAccountLogList->BankAccountLogEx)) {
            $BankAccountLogs = [$Result->BankAccountLogList->BankAccountLogEx];
        } else {
            $BankAccountLogs = $Result->BankAccountLogList->BankAccountLogEx;
        }

        foreach ($BankAccountLogs as $BankAccountLog) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($BankAccountLog);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
