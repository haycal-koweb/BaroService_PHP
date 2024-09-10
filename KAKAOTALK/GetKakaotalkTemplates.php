<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_KAKAOTALK.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/카카오톡전송-API#GetKakaotalkTemplates
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $ChannelId = '';

    $Result = $BaroService_KAKAOTALK->GetKakaotalkTemplates([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'ChannelId' => $ChannelId,
    ])->GetKakaotalkTemplatesResult;

    if (!array_key_exists('KakaotalkTemplate', $Result)) {
        $Templates = [];
    } else if (!is_array($Result->KakaotalkTemplate)) {
        $Templates = [$Result->KakaotalkTemplate];
    } else {
        $Templates = $Result->KakaotalkTemplate;
    }

    if (count($Templates) == 1 && $Templates[0]->Status < 0) { // 실패
        echo $Templates[0]->Status;
    } else { // 호출 성공
        foreach ($Templates as $Template) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($Template);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
