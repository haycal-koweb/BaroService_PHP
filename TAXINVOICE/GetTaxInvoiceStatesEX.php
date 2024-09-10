<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/세금계산서-API#GetTaxInvoiceStatesEX
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $MgtKeyList = ['', '', ''];

    $Result = $BaroService_TI->GetTaxInvoiceStatesEX([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'MgtKeyList' => $MgtKeyList,
    ])->GetTaxInvoiceStatesEXResult;

    $States = !is_array($Result->TaxInvoiceStateEX) ? [$Result->TaxInvoiceStateEX] : $Result->TaxInvoiceStateEX;

    if (count($States) == 1 && $States[0]->MgtKey == '' && $States[0]->BarobillState < 0) { // 호출 실패
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
