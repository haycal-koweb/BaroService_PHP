<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_CARD.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/카드조회-API#GetMonthlyCardLogEx2
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $ID = '';
    $CardNum = '';
    $BaseMonth = '';
    $CountPerPage = 10;
    $CurrentPage = 1;
    $OrderDirection = 2;

    $Result = $BaroService_CARD->GetMonthlyCardLogEx2([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'ID' => $ID,
        'CardNum' => $CardNum,
        'BaseMonth' => $BaseMonth,
        'CountPerPage' => $CountPerPage,
        'CurrentPage' => $CurrentPage,
        'OrderDirection' => $OrderDirection,
    ])->GetMonthlyCardLogEx2Result;

    if ($Result->CurrentPage < 0) { // 실패
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

        if (!array_key_exists('CardLogEx2', $Result->CardLogList)) {
            $CardLogs = [];
        } else if (!is_array($Result->CardLogList->CardLogEx2)) {
            $CardLogs = [$Result->CardLogList->CardLogEx2];
        } else {
            $CardLogs = $Result->CardLogList->CardLogEx2;
        }

        foreach ($CardLogs as $CardLog) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($CardLog);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
