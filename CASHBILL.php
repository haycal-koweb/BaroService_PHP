<?php include './_include/top.php'; ?>
<fieldset class="fieldset1">
    <legend>현금영수증 API</legend>
    <fieldset class="fieldset2">
        <legend>저장</legend>
        <ul>
            <li><a href="CASHBILL/RegistCashBillEx.php">RegistCashBillEx</a> - 저장</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>수정</legend>
        <ul>
            <li><a href="CASHBILL/UpdateCashBillEx.php">UpdateCashBillEx</a> - 수정</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>발급</legend>
        <ul>
            <li><a href="CASHBILL/IssueCashBill.php">IssueCashBill</a> - 발급</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>취소/삭제</legend>
        <ul>
            <li><a href="CASHBILL/CancelCashBillBeforeNTSSend.php">CancelCashBillBeforeNTSSend</a> - 발급취소 (국세청전송 전)</li>
            <li><a href="CASHBILL/CancelCashBill.php">CancelCashBill</a> - 발급취소 (국세청전송 후)</li>
            <li><a href="CASHBILL/CancelCashBillPartial.php">CancelCashBillPartial</a> - 부분취소 (국세청전송 후)</li>
            <li><a href="CASHBILL/DeleteCashBill.php">DeleteCashBill</a> - 삭제</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>상태 조회</legend>
        <ul>
            <li><a href="CASHBILL/GetCashBillState.php">GetCashBillState</a> - 상태 조회</li>
            <li><a href="CASHBILL/GetCashBillStates.php">GetCashBillStates</a> - 상태 조회 (여러건)</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>이력 조회</legend>
        <ul>
            <li><a href="CASHBILL/GetCashBillLog.php">GetCashBillLog</a> - 처리 이력 조회</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>내용 조회</legend>
        <ul>
            <li><a href="CASHBILL/GetCashBillEx.php">GetCashBillEx</a> - 내용 조회</li>
            <li><a href="CASHBILL/GetCashBillPopUpURL.php">GetCashBillPopUpURL</a> - 내용보기 URL</li>
            <li><a href="CASHBILL/GetCashBillMailURL.php">GetCashBillMailURL</a> - 내용보기 URL (수신자 관점)</li>
            <li><a href="CASHBILL/GetCashBillPrintURL.php">GetCashBillPrintURL</a> - 인쇄 URL</li>
            <li><a href="CASHBILL/GetCashBillsPrintURL.php">GetCashBillsPrintURL</a> - 대량인쇄 URL</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>목록 조회</legend>
        <ul>
            <li><a href="CASHBILL/GetPeriodCashBillSalesList.php">GetPeriodCashBillSalesList</a> - 발급내역 조회</li>
            <li><a href="CASHBILL/GetPeriodCashBillPurchaseList.php">GetPeriodCashBillPurchaseList</a> - 수취내역 조회</li>
            <li><a href="CASHBILL/GetDailyCashBillSalesList.php">GetDailyCashBillSalesList</a> - 일별 발급내역 조회</li>
            <li><a href="CASHBILL/GetDailyCashBillPurchaseList.php">GetDailyCashBillPurchaseList</a> - 일별 수취내역 조회</li>
            <li><a href="CASHBILL/GetMonthlyCashBillSalesList.php">GetMonthlyCashBillSalesList</a> - 월별 발급내역 조회</li>
            <li><a href="CASHBILL/GetMonthlyCashBillPurchaseList.php">GetMonthlyCashBillPurchaseList</a> - 월별 수취내역 조회</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>이메일/문자/팩스 전송</legend>
        <ul>
            <li><a href="CASHBILL/SendEmail.php">SendEmail</a> - 이메일 전송</li>
            <li><a href="CASHBILL/SendSMS.php">SendSMS</a> - 문자 전송</li>
            <li><a href="CASHBILL/SendFax.php">SendFax</a> - 팩스 전송</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend class="red">홈택스 연동 신청</legend>
        <ul>
            <li><a href="CASHBILL/RegistCashBillScrap.php">RegistCashBillScrap</a> - 홈택스 연동 신청</li>
            <li><a href="CASHBILL/UpdateCashBillScrap.php">UpdateCashBillScrap</a> - 홈택스 연동 신청정보 수정</li>
            <li><a href="CASHBILL/StopCashBillScrap.php">StopCashBillScrap</a> - 홈택스 연동 해지</li>
            <li><a href="CASHBILL/CancelStopCashBillScrap.php">CancelStopCashBillScrap</a> - 홈택스 연동 해지취소 (해지 당월에만 가능)</li>
            <li><a href="CASHBILL/ReRegistCashBillScrap.php">ReRegistCashBillScrap</a> - 홈택스 연동 재신청 (해지 월이 지난 후)</li>
            <li><a href="CASHBILL/GetCashBillScrapRequestURL.php">GetCashBillScrapRequestURL</a> - 홈택스 연동 신청 URL</li>
        </ul>
    </fieldset>
</fieldset>
<?php include './_include/bottom.php'; ?>
