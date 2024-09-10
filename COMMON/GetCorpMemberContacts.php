<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/바로빌-공통-API#GetCorpMemberContacts
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $CheckCorpNum = '';

    $Result = $BaroService_TI->GetCorpMemberContacts([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'CheckCorpNum' => $CheckCorpNum,
    ])->GetCorpMemberContactsResult;

    $Contacts = !is_array($Result->Contact) ? [$Result->Contact] : $Result->Contact;

    if ($Contacts[0]->ContactName < 0) { // 실패
        echo $Contacts[0]->ContactName;
    } else { // 호출 성공
        foreach ($Contacts as $Contact) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($Contact);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
