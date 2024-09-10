<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_EDOC.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/전자문서-API#RegistEDoc
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $EDoc = array(
        'MgtKey' => '',
        'UserID' => '',
        'FormKey' => '',
        'EDocInvoiceType' => 1,
        'CertYN' => false,
        'AutoAcceptYN' => false,
        'BusinessLicenseYN' => false,
        'BankBookYN' => false,
        'WriteDate' => '',
        'TaxType' => 1,
        'PurposeType' => 2,
        'AmountTotal' => '',
        'TaxTotal' => '',
        'TotalAmount' => '',
        'Remark1' => '',
        'Remark2' => '',
        'Remark3' => '',
        'SerialNum' => '',
        'InvoicerParty' => [
            'CorpNum' => '',
            'TaxRegID' => '',
            'CorpName' => '',
            'CEOName' => '',
            'Addr' => '',
            'BizType' => '',
            'BizClass' => '',
            'ContactName' => '',
            'DeptName' => '',
            'TEL' => '',
            'HP' => '',
            'FAX' => '',
            'Email' => '',
        ],
        'InvoiceeParty' => [
            'CorpNum' => '',
            'TaxRegID' => '',
            'CorpName' => '',
            'CEOName' => '',
            'Addr' => '',
            'BizType' => '',
            'BizClass' => '',
            'ContactName' => '',
            'DeptName' => '',
            'TEL' => '',
            'HP' => '',
            'FAX' => '',
            'Email' => '',
        ],
        'EDocProperties' => [
            'EDocProperty' => [
                [
                    'Name' => '',
                    'Value' => '',
                ],
                [
                    'Name' => '',
                    'Value' => '',
                ],
                [
                    'Name' => '',
                    'Value' => '',
                ]
            ]
        ],
        'EDocTradeLineItems' => [
            'EDocTradeLineItem' => [
                [
                    'PurchaseExpiry' => '',
                    'Name' => '',
                    'Information' => '',
                    'ChargeableUnit' => '',
                    'UnitPrice' => '',
                    'Amount' => '',
                    'Tax' => '',
                    'Description' => '',
                    'Temp1' => '',
                    'Temp2' => '',
                    'Temp3' => '',
                    'Temp4' => '',
                    'Temp5' => ''
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
                    'Temp1' => '',
                    'Temp2' => '',
                    'Temp3' => '',
                    'Temp4' => '',
                    'Temp5' => ''
                ]
            ]
        ]
    );

    $Result = $BaroService_EDOC->RegistEDoc([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $EDoc['InvoicerParty']['CorpNum'],
        'UserID' => $EDoc['UserID'],
        'Invoice' => $EDoc,
    ])->RegistEDocResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
