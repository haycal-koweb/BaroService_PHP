<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/세금계산서-API#GetPeriodTaxInvoiceSalesList
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $UserID = '';
    $TaxType = 1;
    $DateType = 1;
    $StartDate = '';
    $EndDate = '';
    $CountPerPage = 10;
    $CurrentPage = 1;

    $Result = $BaroService_TI->GetPeriodTaxInvoiceSalesList([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'UserID' => $UserID,
        'TaxType' => $TaxType,
        'DateType' => $DateType,
        'StartDate' => $StartDate,
        'EndDate' => $EndDate,
        'CountPerPage' => $CountPerPage,
        'CurrentPage' => $CurrentPage,
    ])->GetPeriodTaxInvoiceSalesListResult;

    if ($Result->CurrentPage < 0) { // 호출 실패
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

        if (!array_key_exists('SimpleTaxInvoiceEx', $Result->SimpleTaxInvoiceExList)) {
            $SimpleTaxInvoices = [];
        } else if (!is_array($Result->SimpleTaxInvoiceExList->SimpleTaxInvoiceEx)) {
            $SimpleTaxInvoices = [$Result->SimpleTaxInvoiceExList->SimpleTaxInvoiceEx];
        } else {
            $SimpleTaxInvoices = $Result->SimpleTaxInvoiceExList->SimpleTaxInvoiceEx;
        }

        foreach ($SimpleTaxInvoices as $SimpleTaxInvoice) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($SimpleTaxInvoice);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
