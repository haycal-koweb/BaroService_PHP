<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_CARD.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/카드조회-API#RegistCard
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $CardCompany = '';
    $CardType = '';
    $CardNum = '';
    $WebId = '';
    $WebPwd = '';
    $Alias = '';
    $Usage = '';

    $Result = $BaroService_CARD->RegistCard([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'CardCompany' => $CardCompany,
        'CardType' => $CardType,
        'CardNum' => $CardNum,
        'WebId' => $WebId,
        'WebPwd' => $WebPwd,
        'Alias' => $Alias,
        'Usage' => $Usage,
    ])->RegistCardResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
