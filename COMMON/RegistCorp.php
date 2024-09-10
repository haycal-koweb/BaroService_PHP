<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/바로빌-공통-API#RegistCorp
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $CorpName = '';
    $CEOName = '';
    $BizType = '';
    $BizClass = '';
    $PostNum = '';
    $Addr1 = '';
    $Addr2 = '';
    $MemberName = '';
    $JuminNum = '';
    $ID = '';
    $PWD = '';
    $Grade = '';
    $TEL = '';
    $HP = '';
    $Email = '';

    $Result = $BaroService_TI->RegistCorp([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'CorpName' => $CorpName,
        'CEOName' => $CEOName,
        'BizType' => $BizType,
        'BizClass' => $BizClass,
        'PostNum' => $PostNum,
        'Addr1' => $Addr1,
        'Addr2' => $Addr2,
        'MemberName' => $MemberName,
        'JuminNum' => $JuminNum,
        'ID' => $ID,
        'PWD' => $PWD,
        'Grade' => $Grade,
        'TEL' => $TEL,
        'HP' => $HP,
        'Email' => $Email,
    ])->RegistCorpResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
