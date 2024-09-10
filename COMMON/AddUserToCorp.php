<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/바로빌-공통-API#AddUserToCorp
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $MemberName = '';
    $JuminNum = '';
    $ID = '';
    $PWD = '';
    $Grade = '';
    $TEL = '';
    $HP = '';
    $Email = '';

    $Result = $BaroService_TI->AddUserToCorp([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'MemberName' => $MemberName,
        'JuminNum' => $JuminNum,
        'ID' => $ID,
        'PWD' => $PWD,
        'Grade' => $Grade,
        'TEL' => $TEL,
        'HP' => $HP,
        'Email' => $Email,
    ])->AddUserToCorpResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
