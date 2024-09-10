<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/세금계산서-API#SendInvoiceFax
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $MgtKey = '';
    $SenderID = '';
    $FromFaxNumber = '';
    $ToFaxNumber = '';

    $Result = $BaroService_TI->SendInvoiceFax([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'MgtKey' => $MgtKey,
        'SenderID' => $SenderID,
        'FromFaxNumber' => $FromFaxNumber,
        'ToFaxNumber' => $ToFaxNumber,
    ])->SendInvoiceFaxResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
