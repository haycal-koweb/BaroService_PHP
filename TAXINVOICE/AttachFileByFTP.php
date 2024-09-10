<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // https://dev.barobill.co.kr/docs/guides/바로빌-API-개발준비#FTP 를 참고하여 FTP에 파일을 업로드하신 후 API를 실행해주세요.
    // ---------------------------------------------------------------------------------------------------

    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/세금계산서-API#AttachFileByFTP
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $MgtKey = '';
    $FileName = '';
    $DisplayFileName = '';

    $Result = $BaroService_TI->AttachFileByFTP([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'MgtKey' => $MgtKey,
        'FileName' => $FileName,
        'DisplayFileName' => $DisplayFileName,
    ])->AttachFileByFTPResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
