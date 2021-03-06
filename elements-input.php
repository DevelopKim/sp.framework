

<?php include('include/_header.php'); ?>


<div id="contentWrap">

	<div class="contentWidth clearFix row">

		<div class="lnbWrap col span_6">
			<?include('include/lnb_elements.php');?>
		</div>

		<section class="col span_18">
			<h2>Input</h2>


			<table class="signUpTable">
				<colgroup>
					<col width="11%" />
					<col width="89%" />
				</colgroup>

				<tbody>
					<tr>
						<th>
							<label for="userId">아이디</label>
						</th>

						<td>
							<table class="inputStructure">
								<colgroup>
									<col width="68%"/>
									<col width="2%"/>
									<col width="30%"/>
								</colgroup>
								<tbody>
									<tr>
										<td>
											<input class="textInput" type="text" name="userId" label="아이디" id="userId">
										</td>
										<td></td>
										<td>
											<a href="#" class="button">
												<span>중복확인</span>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>

					<tr>
						<th>
							<label for="userPw">비밀번호</label>
						</th>

						<td>
							<input class="textInput" type="password" name="password" label="비밀번호" id="userPw">
						</td>
					</tr>

					<tr>
						<th>
							<label for="userPwConfirm">비밀번호 확인</label>
						</th>

						<td>
							<input class="textInput" type="password" name="password2" label="비밀번호" id="userPwConfirm">
						</td>
					</tr>

					<tr>
						<th>
							<label for="userName">이름</label>
						</th>

						<td>
							<input class="textInput" type="text" name="userName" label="이름" id="userName">
						</td>
					</tr>



					<tr>
						<th>
							<label for="userEmail">이메일</label>
						</th>

						<td>
							<table class="inputStructure">
								<colgroup>
									<col width="68%"/>
									<col width="2%"/>
									<col width="30%"/>
								</colgroup>
								<tbody>
									<tr>
										<td>
											<input class="textInput" type="text" name="email" label="이메일" id="userEmail">
										</td>
										<td>
										</td>
										<td>
											<a href="#" class="button">
												<span>중복확인</span>
											</a>
										</td>
									</tr>
								</tbody>
							</table>

							<div class="extra">
								<span>
									<input type="checkbox" name="mailling" id="newsletter"> <label for="newsletter">뉴스레터 수신</label>
								</span>
								<p>
									<em>※</em> 주문 관련 정보, 주요 공지사항은 수신동의 여부에 관계없이 발송됩니다.
								</p>
							</div>
						</td>
					</tr>



					<tr>
						<th>
							<label for="userEmail2">이메일 2</label>
						</th>

						<td>
							<table class="inputStructure">
								<colgroup>
									<col width="30%"/>
									<col width="5%"/>
									<col width="33%"/>
									<col width="2%"/>
									<col width="30%"/>
								</colgroup>
								<tbody>
								<tr>
									<td>
										<input class="textInput" type="text" name="email" id="userEmail2"/>
									</td>
									<td>
										@
									</td>
									<td>
										<select name="emailSelect" id="emailSelect">
											<option value="naver">naver.com</option>
											<option value="daum">daum.net</option>
											<option value="google">gmail.com</option>
										</select>
									</td>
									<td></td>
									<td>
										<a href="#" class="button">
											<span>중복확인</span>
										</a>
									</td>
								</tr>
								</tbody>
							</table>

							<div class="extra">
								<span>
									<input type="checkbox" name="mailling" id="newsletter2"> <label for="newsletter2">뉴스레터 수신</label>
								</span>
								<p>
									<em>※</em> 주문 관련 정보, 주요 공지사항은 수신동의 여부에 관계없이 발송됩니다.
								</p>
							</div>
						</td>
					</tr>


					<tr>
						<th>
							<label>
								<label for="userPhoneNo">핸드폰</label>
							</label>
						</th>

						<td>
							<table class="inputStructure">
								<colgroup>
									<col width="30%">
									<col width="5%">
									<col width="30%">
									<col width="5%">
									<col width="30%">
								</colgroup>

								<tbody>
									<tr>
										<td>
											<input class="textInput" type="text" name="mobileNum1" maxlength="4" label="핸드폰" id="userPhoneNo">
										</td>
										<td>
											-
										</td>
										<td>
											<input class="textInput" type="text" name="mobileNum2" maxlength="4" label="핸드폰">
										</td>
										<td>
											-
										</td>
										<td>
											<input class="textInput" type="text" name="mobileNum3" maxlength="4" label="핸드폰">
										</td>
									</tr>
								</tbody>
							</table>

							<div class="extra">
								<span>
									<input type="checkbox" name="sms" id="eventMailing"> <label for="eventMailing">정보/이벤트 SMS 수신</label>
								</span>
								<p>
									<em>※</em> 주문 관련 정보, 주요 공지사항은 수신동의 여부에 관계없이 발송됩니다.
								</p>
							</div>

						</td>
					</tr>



					<tr>
						<th>
							<label>
								<label for="userPhoneNo2">핸드폰 2</label>
							</label>
						</th>

						<td>
							<table class="inputStructure">
								<colgroup>
									<col width="30%">
									<col width="5%">
									<col width="30%">
									<col width="5%">
									<col width="30%">
								</colgroup>

								<tbody>
								<tr>
									<td>
										<select name="phoneSelect" id="phoneSelect">
											<option value="010">010</option>
											<option value="016">016</option>
											<option value="019">019</option>
										</select>
									</td>
									<td>
										-
									</td>
									<td>
										<input class="textInput" type="text" name="mobileNum2" maxlength="4" label="핸드폰">
									</td>
									<td>
										-
									</td>
									<td>
										<input class="textInput" type="text" name="mobileNum3" maxlength="4" label="핸드폰">
									</td>
								</tr>
								</tbody>
							</table>

							<div class="extra">
								<span>
									<input type="checkbox" name="sms" id="eventMailing2"> <label for="eventMailing2">정보/이벤트 SMS 수신</label>
								</span>
								<p>
									<em>※</em> 주문 관련 정보, 주요 공지사항은 수신동의 여부에 관계없이 발송됩니다.
								</p>
							</div>

						</td>
					</tr>


					<tr class="address">
						<th>
							<label for="userAddress">주소</label>
						</th>
						<td>
							<table class="inputStructure">
								<colgroup>
									<col width="30%">
									<col width="5%">
									<col width="30%">
									<col width="2%">
									<col width="30%">
								</colgroup>

								<tbody>
									<tr>
										<td>
											<input class="textInput" type="text" name="addressZip" label="우편번호" readonly>
										</td>

										<td>-</td>

										<td>
											<input class="textInput" type="text" name="addressZip2" label="우편번호" readonly>
										</td>

										<td></td>

										<td>
											<a class="button" href="#">
												<span>우편번호</span>
											</a>
										</td>
									</tr>

									<tr>
										<td colspan="5">
											<input class="textInput" type="text" name="address" readonly />
										</td>
									</tr>

									<tr>
										<td colspan="5">
											<input class="textInput" type="text" id="userAddress"/>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>



					<tr>
						<th>성별</th>
						<td>
							<input type="radio" id="genderM" name="gender" value="m" /> <label for="genderM">남자</label>
							<input type="radio" id="genderF" name="gender" value="f" /> <label for="genderF">여자</label>
						</td>
					</tr>



					<tr>
						<th>
							<label for="birthDate">생년월일</label>
						</th>
						<td>
							<input type="date" id="birthDate" min="1950-01-01" />
						</td>
					</tr>


					<tr>
						<th>
							<label for="birthY">생년월일 2</label>
						</th>
						<td>
							<table class="inputStructure">
								<colgroup>
									<col widht="28%" />
									<col widht="5%" />
									<col widht="28%" />
									<col widht="5%" />
									<col widht="28%" />
									<col widht="5%" />
								</colgroup>
								<tbody>
									<tr>
										<td>
											<select name="birthY" id="birthY">
												<option value="2010">2010</option>
												<option value="2011">2011</option>
												<option value="2012">2012</option>
											</select>
										</td>
										<td>
											년
										</td>
										<td>
											<select name="birthM" id="birthM">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
											</select>
										</td>
										<td>
											월
										</td>
										<td>
											<select name="birthD" id="birthD">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
											</select>
										</td>
										<td>
											일
										</td>
									</tr>
									</tbody>
							</table>
						</td>

					</tr>



					<tr>
						<td class="agreementCheck" colspan="2">
							<p>
								<input type="checkbox" name="private">
								<a href="#">이용약관</a>과 <a href="#">개인정보 취급방침</a>을 읽고 이에 동의합니다.
							</p>
						</td>
					</tr>

					<tr>
						<td colspan="2">
							<button type="submit" class="button">
								<span>가입하기</span>
							</button>
						</td>
					</tr>

				</tbody>

			</table>




		</section>

	</div><!-- .contentWidth -->


</div><!-- .contentWrap -->


<script type="text/javascript">
	$(function(){
		$('select').selectric({
			disableOnMobile: false
		});

		$('input').iCheck({
			checkboxClass: 'icheckbox_square-red',
			radioClass: 'iradio_square-red'
		});
		$('input').iCheck('uncheck');
	});
</script>


<?php include('include/_footer.php'); ?>

