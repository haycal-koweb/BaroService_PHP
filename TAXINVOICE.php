<?php include './_include/top.php'; ?>
<fieldset class="fieldset1">
    <legend>전자세금계산서 API</legend>
    <fieldset class="fieldset2">
        <legend>저장+발급</legend>
        <ul>
            <li><a href="TAXINVOICE/RegistAndIssueTaxInvoice.php">RegistAndIssueTaxInvoice</a> - 저장 + 발급</li>
            <li><a href="TAXINVOICE/RegistAndPreIssueTaxInvoice.php">RegistAndPreIssueTaxInvoice</a> - 저장 + 발급예정</li>
            <li><a href="TAXINVOICE/RegistAndIssueBrokerTaxInvoice.php">RegistAndIssueBrokerTaxInvoice</a> - 저장 + 발급 (위수탁)</li>
            <li><a href="TAXINVOICE/RegistAndPreIssueBrokerTaxInvoice.php">RegistAndPreIssueBrokerTaxInvoice</a> - 저장 + 발급예정 (위수탁)</li>
            <li><a href="TAXINVOICE/RegistAndReverseIssueTaxInvoice.php">RegistAndReverseIssueTaxInvoice</a> - 저장 + 역발행</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>저장</legend>
        <ul>
            <li><a href="TAXINVOICE/RegistTaxInvoiceEX.php">RegistTaxInvoiceEX</a> - 저장</li>
            <li><a href="TAXINVOICE/RegistBrokerTaxInvoiceEX.php">RegistBrokerTaxInvoiceEX</a> - 저장 (위수탁)</li>
            <li><a href="TAXINVOICE/RegistTaxInvoiceReverseEX.php">RegistTaxInvoiceReverseEX</a> - 저장 (역발행)</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>수정</legend>
        <ul>
            <li><a href="TAXINVOICE/UpdateTaxInvoiceEX.php">UpdateTaxInvoiceEX</a> - 수정</li>
            <li><a href="TAXINVOICE/UpdateBrokerTaxInvoiceEX.php">UpdateBrokerTaxInvoiceEX</a> - 수정 (위수탁)</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>발급/발급예정/역발행</legend>
        <ul>
            <li><a href="TAXINVOICE/IssueTaxInvoiceEx.php">IssueTaxInvoiceEx</a> - 발급</li>
            <li><a href="TAXINVOICE/PreIssueTaxInvoiceEx.php">PreIssueTaxInvoiceEx</a> - 발급예정</li>
            <li><a href="TAXINVOICE/ReverseIssueTaxInvoiceEx.php">ReverseIssueTaxInvoiceEx</a> - 역발행</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>취소/삭제</legend>
        <ul>
            <li><a href="TAXINVOICE/ProcTaxInvoice.php">ProcTaxInvoice</a> - 승인/거부/취소</li>
            <li><a href="TAXINVOICE/DeleteTaxInvoice.php">DeleteTaxInvoice</a> - 삭제</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>상태 조회</legend>
        <ul>
            <li><a href="TAXINVOICE/GetTaxInvoiceStateEX.php">GetTaxInvoiceStateEX</a> - 상태 조회</li>
            <li><a href="TAXINVOICE/GetTaxInvoiceStatesEX.php">GetTaxInvoiceStatesEX</a> - 상태 조회 (여러건)</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>이력 조회</legend>
        <ul>
            <li><a href="TAXINVOICE/GetTaxInvoiceLog.php">GetTaxInvoiceLog</a> - 처리 이력 조회</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>내용 조회</legend>
        <ul>
            <li><a href="TAXINVOICE/GetTaxInvoice.php">GetTaxInvoice</a> - 내용 조회</li>
            <li><a href="TAXINVOICE/GetTaxInvoiceNK.php">GetTaxInvoiceNK</a> - 내용 조회 (국세청 승인번호로 조회)</li>
            <li><a href="TAXINVOICE/GetTaxInvoicePopUpURL.php">GetTaxInvoicePopUpURL</a> - 내용보기 URL</li>
            <li><a href="TAXINVOICE/GetTaxInvoicePopUpURLNK.php">GetTaxInvoicePopUpURLNK</a> - 내용보기 URL (국세청 승인번호로 조회)</li>
            <li><a href="TAXINVOICE/GetTaxInvoiceMailURL.php">GetTaxInvoiceMailURL</a> - 내용보기 URL (거래처 관점)</li>
            <li><a href="TAXINVOICE/GetTaxInvoiceMailURLNK.php">GetTaxInvoiceMailURLNK</a> - 내용보기 URL (거래처 관점) (국세청 승인번호로 조회)</li>
            <li><a href="TAXINVOICE/GetTaxInvoicePrintURL.php">GetTaxInvoicePrintURL</a> - 인쇄 URL</li>
            <li><a href="TAXINVOICE/GetTaxInvoicesPrintURL.php">GetTaxInvoicesPrintURL</a> - 인쇄 URL (여러건)</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>목록 조회</legend>
        <ul>
            <li><a href="TAXINVOICE/GetPeriodTaxInvoiceSalesList.php">GetPeriodTaxInvoiceSalesList</a> - 매출내역 조회</li>
            <li><a href="TAXINVOICE/GetPeriodTaxInvoicePurchaseList.php">GetPeriodTaxInvoicePurchaseList</a> - 매입내역 조회</li>
            <li><a href="TAXINVOICE/GetDailyTaxInvoiceSalesList.php">GetDailyTaxInvoiceSalesList</a> - 일별 매출내역 조회</li>
            <li><a href="TAXINVOICE/GetDailyTaxInvoicePurchaseList.php">GetDailyTaxInvoicePurchaseList</a> - 일별 매입내역 조회</li>
            <li><a href="TAXINVOICE/GetMonthlyTaxInvoiceSalesList.php">GetMonthlyTaxInvoiceSalesList</a> - 월별 매출내역 조회</li>
            <li><a href="TAXINVOICE/GetMonthlyTaxInvoicePurchaseList.php">GetMonthlyTaxInvoicePurchaseList</a> - 월별 매입내역 조회</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>국세청 전송</legend>
        <ul>
            <li><a href="TAXINVOICE/SendToNTS.php">SendToNTS</a> - 국세청 즉시 전송</li>
            <li><a href="TAXINVOICE/GetNTSSendOption.php">GetNTSSendOption</a> - 국세청 전송설정 확인</li>
            <li><a href="TAXINVOICE/ChangeNTSSendOption.php">ChangeNTSSendOption</a> - 국세청 전송설정 변경</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>파일 첨부</legend>
        <ul>
            <li><a href="TAXINVOICE/AttachFileByFTP.php">AttachFileByFTP</a> - 파일 첨부</li>
            <li><a href="TAXINVOICE/AttachFilesByFTP.php">AttachFilesByFTP</a> - 파일 여러개 첨부</li>
            <li><a href="TAXINVOICE/DeleteAttachFileWithFileIndex.php">DeleteAttachFileWithFileIndex</a> - 첨부파일 삭제</li>
            <li><a href="TAXINVOICE/DeleteAttachFile.php">DeleteAttachFile</a> - 첨부파일 전체삭제</li>
            <li><a href="TAXINVOICE/GetAttachedFileListEx.php">GetAttachedFileListEx</a> - 첨부파일 목록</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>이메일/문자/팩스 전송</legend>
        <ul>
            <li><a href="TAXINVOICE/ReSendEmail.php">ReSendEmail</a> - 이메일 재전송</li>
            <li><a href="TAXINVOICE/ReSendSMS.php">ReSendSMS</a> - 문자 재전송 (처리 이력에 기록되지 않음)</li>
            <li><a href="TAXINVOICE/SendInvoiceSMS.php">SendInvoiceSMS</a> - 문자 전송</li>
            <li><a href="TAXINVOICE/SendInvoiceFax.php">SendInvoiceFax</a> - 팩스 전송</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>다른 문서와 연결</legend>
        <ul>
            <li><a href="TAXINVOICE/MakeDocLinkage.php">MakeDocLinkage</a> - 연결</li>
            <li><a href="TAXINVOICE/RemoveDocLinkage.php">RemoveDocLinkage</a> - 연결 해제</li>
            <li><a href="TAXINVOICE/GetLinkedDocs.php">GetLinkedDocs</a> - 연결된 문서 목록 조회</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend class="red">홈택스 연동 신청</legend>
        <ul>
            <li><a href="TAXINVOICE/RegistTaxInvoiceScrap.php">RegistTaxInvoiceScrap</a> - 홈택스 연동 신청</li>
            <li><a href="TAXINVOICE/UpdateTaxInvoiceScrap.php">UpdateTaxInvoiceScrap</a> - 홈택스 연동 신청정보 수정</li>
            <li><a href="TAXINVOICE/StopTaxInvoiceScrap.php">StopTaxInvoiceScrap</a> - 홈택스 연동 해지</li>
            <li><a href="TAXINVOICE/CancelStopTaxInvoiceScrap.php">CancelStopTaxInvoiceScrap</a> - 홈택스 연동 해지취소 (해지 당월에만 가능)</li>
            <li><a href="TAXINVOICE/ReRegistTaxInvoiceScrap.php">ReRegistTaxInvoiceScrap</a> - 홈택스 연동 재신청 (해지 월이 지난 후)</li>
            <li><a href="TAXINVOICE/GetTaxInvoiceScrapRequestURL.php">GetTaxInvoiceScrapRequestURL</a> - 홈택스 연동 신청 URL</li>
        </ul>
    </fieldset>
</fieldset>
<?php include './_include/bottom.php'; ?>
