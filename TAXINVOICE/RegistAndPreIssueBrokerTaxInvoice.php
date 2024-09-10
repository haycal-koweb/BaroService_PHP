<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/세금계산서-API#RegistAndPreIssueBrokerTaxInvoice
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $TaxInvoice = array(
        'IssueDirection' => 1,
        'TaxInvoiceType' => 4,
        'ModifyCode' => '',
        'TaxType' => 1,
        'TaxCalcType' => 1,
        'PurposeType' => 2,
        'WriteDate' => '',
        'AmountTotal' => '',
        'TaxTotal' => '',
        'TotalAmount' => '',
        'Cash' => '',
        'ChkBill' => '',
        'Note' => '',
        'Credit' => '',
        'Remark1' => '',
        'Remark2' => '',
        'Remark3' => '',
        'Kwon' => '',
        'Ho' => '',
        'SerialNum' => '',
        'InvoicerParty' => [
            'MgtNum' => '',
            'CorpNum' => '',
            'TaxRegID' => '',
            'CorpName' => '',
            'CEOName' => '',
            'Addr' => '',
            'BizType' => '',
            'BizClass' => '',
            'ContactID' => '',
            'ContactName' => '',
            'TEL' => '',
            'HP' => '',
            'Email' => '',
        ],
        'InvoiceeParty' => [
            'MgtNum' => '',
            'CorpNum' => '',
            'TaxRegID' => '',
            'CorpName' => '',
            'CEOName' => '',
            'Addr' => '',
            'BizType' => '',
            'BizClass' => '',
            'ContactID' => '',
            'ContactName' => '',
            'TEL' => '',
            'HP' => '',
            'Email' => '',
        ],
        'BrokerParty' => [
            'MgtNum' => '',
            'CorpNum' => '',
            'TaxRegID' => '',
            'CorpName' => '',
            'CEOName' => '',
            'Addr' => '',
            'BizType' => '',
            'BizClass' => '',
            'ContactID' => '',
            'ContactName' => '',
            'TEL' => '',
            'HP' => '',
            'Email' => '',
        ],
        'TaxInvoiceTradeLineItems' => [
            'TaxInvoiceTradeLineItem' => [
                [
                    'PurchaseExpiry' => '',
                    'Name' => '',
                    'Information' => '',
                    'ChargeableUnit' => '',
                    'UnitPrice' => '',
                    'Amount' => '',
                    'Tax' => '',
                    'Description' => '',
                ],
                [
                    'PurchaseExpiry' => '',
                    'Name' => '',
                    'Information' => '',
                    'ChargeableUnit' => '',
                    'UnitPrice' => '',
                    'Amount' => '',
                    'Tax' => '',
                    'Description' => '',
                ]
            ]
        ]
    );
    $SendSMS = false;
    $IssueTiming = 1;
    $MailTitle = '';

    $Result = $BaroService_TI->RegistAndPreIssueBrokerTaxInvoice([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $TaxInvoice['BrokerParty']['CorpNum'],
        'Invoice' => $TaxInvoice,
        'SendSMS' => $SendSMS,
        'IssueTiming' => $IssueTiming,
        'MailTitle' => $MailTitle,
    ])->RegistAndPreIssueBrokerTaxInvoiceResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
