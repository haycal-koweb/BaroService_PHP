<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_CARD.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/카드조회-API#UpdateCard
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $CardNum = '';
    $WebId = '';
    $WebPwd = '';
    $Alias = '';
    $Usage = '';

    $Result = $BaroService_CARD->UpdateCard([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'CardNum' => $CardNum,
        'WebId' => $WebId,
        'WebPwd' => $WebPwd,
        'Alias' => $Alias,
        'Usage' => $Usage,
    ])->UpdateCardResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
