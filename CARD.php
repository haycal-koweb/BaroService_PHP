<?php include './_include/top.php'; ?>
<fieldset class="fieldset1">
    <legend>카드조회 API</legend>
    <fieldset class="fieldset2">
        <legend>서비스 신청 및 해지</legend>
        <ul>
            <li><a href="CARD/RegistCard.php">RegistCard</a> - 카드 등록</li>
            <li><a href="CARD/UpdateCard.php">UpdateCard</a> - 카드 수정</li>
            <li><a href="CARD/StopCard.php">StopCard</a> - 카드 해지</li>
            <li><a href="CARD/CancelStopCard.php">CancelStopCard</a> - 카드 해지취소 (해지 당월에만 가능)</li>
            <li><a href="CARD/ReRegistCard.php">ReRegistCard</a> - 카드 재신청 (해지 월이 지난 후)</li>
            <li><a href="CARD/GetCardManagementURL.php">GetCardManagementURL</a> - 카드 관리 URL</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>카드 목록 조회</legend>
        <ul>
            <li><a href="CARD/GetCardEx.php">GetCardEx</a> - 등록된 카드 목록 조회</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>사용내역 조회</legend>
        <ul>
            <li><a href="CARD/GetPeriodCardLogEx.php">GetPeriodCardLogEx</a> - 사용내역 조회</li>
            <li><a href="CARD/GetPeriodCardLogEx2.php">GetPeriodCardLogEx2</a> - 사용내역 조회 (할부정보, 통화코드 추가)</li>
            <li><a href="CARD/GetDailyCardLogEx.php">GetDailyCardLogEx</a> - 일별 사용내역 조회</li>
            <li><a href="CARD/GetDailyCardLogEx2.php">GetDailyCardLogEx2</a> - 일별 사용내역 조회 (할부정보, 통화코드 추가)</li>
            <li><a href="CARD/GetMonthlyCardLogEx.php">GetMonthlyCardLogEx</a> - 월별 사용내역 조회</li>
            <li><a href="CARD/GetMonthlyCardLogEx2.php">GetMonthlyCardLogEx2</a> - 월별 사용내역 조회 (할부정보, 통화코드 추가)</li>
            <li><a href="CARD/GetCardLogURL.php">GetCardLogURL</a> - 사용내역 URL</li>
        </ul>
    </fieldset>
</fieldset>
<?php include './_include/bottom.php'; ?>
