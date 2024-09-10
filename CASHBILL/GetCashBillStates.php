<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_CASHBILL.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/현금영수증-API#GetCashBillStates
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $UserID = '';
    $MgtKeyList = ['', '', ''];

    $Result = $BaroService_CASHBILL->GetCashBillStates([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'UserID' => $UserID,
        'MgtKeyList' => $MgtKeyList,
    ])->GetCashBillStatesResult;

    $States = !is_array($Result->CashBillState) ? [$Result->CashBillState] : $Result->CashBillState;

    if (count($States) == 1 && $States[0]->MgtKey == '' && $States[0]->BarobillState < 0) { // 실패
        echo $States[0]->BarobillState;
    } else { // 호출 성공
        foreach ($States as $State) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($State);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
