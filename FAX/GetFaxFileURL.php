<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_FAX.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/팩스전송-API#GetFaxFileURL
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $SendKey = '';
    $FileType = 1;

    $Result = $BaroService_FAX->GetFaxFileURL([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'SendKey' => $SendKey,
        'FileType' => $FileType,
    ])->GetFaxFileURLResult;

    $Urls = !is_array($Result->string) ? [$Result->string] : $Result->string;

    if ($Urls[0] < 0) { // 실패
        echo $Urls[0];
    } else { // 호출 성공
        foreach ($Urls as $Url) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($Url);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
