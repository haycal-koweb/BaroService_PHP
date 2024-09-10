<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_SMS.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/문자전송-API#GetSMSFromNumbers
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';

    $Result = $BaroService_SMS->GetSMSFromNumbers([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
    ])->GetSMSFromNumbersResult;

    $FromNumbers = !is_array($Result->FromNumber) ? [$Result->FromNumber] : $Result->FromNumber;

    if (count($FromNumbers) == 1 && $FromNumbers[0]->Number < 0) { // 실패
        echo $FromNumbers[0]->Number;
    } else { // 호출 성공
        foreach ($FromNumbers as $FromNumber) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($FromNumber);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
