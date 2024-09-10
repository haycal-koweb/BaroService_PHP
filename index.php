<?php include './_include/top.php'; ?>
<fieldset class="fieldset1">
    <legend>연동서비스</legend>
    <ul>
        <li><a href="TAXINVOICE.php">세금계산서</a></li>
        <li><a href="EDOC.php">전자문서</a></li>
        <li><a href="CASHBILL.php">현금영수증</a></li>
        <li><a href="SMS.php">문자전송</a></li>
        <li><a href="FAX.php">팩스전송</a></li>
        <li><a href="KAKAOTALK.php">카카오톡전송</a></li>
        <li><a href="CARD.php">카드조회</a></li>
        <li><a href="BANKACCOUNT.php">계좌조회</a></li>
        <li><a href="CORPSTATE.php">사업자등록 상태조회</a></li>
    </ul>
</fieldset>
<br/>
<br/>
<fieldset class="fieldset1">
    <legend>바로빌 공통 API</legend>
    <br/>
    <p>
        바로빌 공통 API 는 모든 연동서비스에 포함되어 있습니다.
    </p>
    <fieldset class="fieldset2">
        <legend>회원가입</legend>
        <ul>
            <li><a href="COMMON/CheckCorpIsMember.php">CheckCorpIsMember</a> - 회원사 가입여부 확인</li>
            <li><a href="COMMON/RegistCorp.php">RegistCorp</a> - 회원사 가입</li>
            <li><a href="COMMON/AddUserToCorp.php">AddUserToCorp</a> - 회원사에 계정 추가</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>회원정보 수정</legend>
        <ul>
            <li><a href="COMMON/UpdateCorpInfo.php">UpdateCorpInfo</a> - 회원사의 회사정보 수정</li>
            <li><a href="COMMON/UpdateUserInfo.php">UpdateUserInfo</a> - 회원사의 계정정보 수정</li>
            <li><a href="COMMON/UpdateUserPWD.php">UpdateUserPWD</a> - 회원사의 계정 비밀번호 수정</li>
            <li><a href="COMMON/ChangeCorpManager.php">ChangeCorpManager</a> - 회원사의 관리자 계정 변경</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>계정목록 확인</legend>
        <ul>
            <li><a href="COMMON/GetCorpMemberContacts.php">GetCorpMemberContacts</a> - 회원사의 계정 목록 조회</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>요금관련</legend>
        <ul>
            <li><a href="COMMON/GetCashChargeURL.php">GetCashChargeURL</a> - 요금결제 URL</li>
            <li><a href="COMMON/GetBalanceCostAmount.php">GetBalanceCostAmount</a> - 회원사 보유금액 조회</li>
            <li><a href="COMMON/GetBalanceCostAmountOfInterOP.php">GetBalanceCostAmountOfInterOP</a> - 파트너 보유금액 조회</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>공동인증서 관련</legend>
        <ul>
            <li><a href="COMMON/GetCertificateRegistURL.php">GetCertificateRegistURL</a> - 공동인증서 등록 URL</li>
            <li><a href="COMMON/CheckCERTIsValid.php">CheckCERTIsValid</a> - 등록된 공동인증서의 유효성 검증</li>
            <li><a href="COMMON/GetCertificateExpireDate.php">GetCertificateExpireDate</a> - 등록된 공동인증서의 만료일자 조회</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>URL 제공</legend>
        <ul>
            <li><a href="COMMON/GetBaroBillURL.php">GetBaroBillURL</a> - 바로빌 사이트의 다양한 URL 반환</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>오류메시지 확인</legend>
        <ul>
            <li><a href="COMMON/GetErrString.php">GetErrString</a> - 오류코드의 내용확인</li>
        </ul>
    </fieldset>
</fieldset>
<?php include './_include/bottom.php'; ?>
