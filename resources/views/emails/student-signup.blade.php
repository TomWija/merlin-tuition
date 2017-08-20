<table style="width: 100%;">
	<tbody>
		<tr>
			<td>
			<!-- HEADER -->
				<table bgcolor="#444C5C" align="center" style="width: 100%;">
					<tbody>
						<tr>
							<td>
								<center>
									<table width="690" align="center" style="text-align: center; padding: 3px;">
										<h1 style="font-family: 'Times New Roman', serif; color: white; font-size: 5rem; margin: 2px;">
											Merlin Tuition
										</h1>
										<h5 style="font-family: 'Arial', sans-serif; color: white; font-size: 1.2rem; font-weight: 300; margin: 2px;">
											Bespoke Tuition in Brighton and Hove
										</h5>
									</table>
								</center>
							</td>
						</tr>
					</tbody>
				</table>
			<!-- /HEADER -->
			<!-- BODY -->
				<table bgcolor="#F4F4EF" align="center" style="width: 100%; padding: 3px;">
					<tbody>
						<tr>
							<td>
								<center>
									<table width="610" align="center" cellpadding="15" cellspacing="0" bgcolor="#FFFFFF" style="text-align: center; padding: 3px; border: 1px solid #ececec;">
										<tr>
											<td colspan=2>
												<p>Thank you for expressing interest in finding a tutor with Merlin Tuition. We will
												soon provide you with bespoke tutors for you to choose from. Meanwhile, please look
												through the information submitted and confirm it's correct.</p>
												<p>If it's not, please phone me on 07123456789. Or E-mail me at test@test.com</p>
											</td>
										</tr>

										<tr>
											<td><strong>Full Name</strong></td>
											<td>{{ $params['name'] }}</td>
										</tr>

										<tr>
											<td><strong>E-Mail</strong></td>
											<td>{{ $params['email'] }}</td>
										</tr>

										<tr>
											<td><strong>Contact Number</strong></td>
											<td>{{ $params['number'] }}</td>
										</tr>

										<tr>
											<td><strong>Location</strong></td>
											<td>{{ $params['location'] }}</td>
										</tr>

										<tr>
											<td style="padding-bottom: 35px;"><strong>Additional Information</strong></td>
											<td style="padding-bottom: 35px;">{{ $params['extraInfo'] }}</td>
										</tr>

                                        <tr>
											<td style="border-bottom: 1px solid grey; border-top: 1px solid grey"><strong>Subject</strong></td>
											<td style="border-bottom: 1px solid grey; border-top: 1px solid grey"><strong>Level</strong></td>
										</tr>

                                        <tr>
											<td style="border-right: 1px solid grey;">{{ $params['subject1'] }}</td>
											<td>{{ $params['level1'] }}</td>
										</tr>

                                        @if (isset($params['subject2']))
                                            <tr>
    											<td style="border-right: 1px solid grey;">{{ $params['subject2'] }}</td>
    											<td>{{ $params['level2'] }}</td>
    										</tr>
                                        @endif

                                        @if (isset($params['subject3']))
                                            <tr>
    											<td style="border-right: 1px solid grey;">{{ $params['subject3'] }}</td>
    											<td>{{ $params['level3'] }}</td>
    										</tr>
                                        @endif
									</table>
								</center>
							</td>
						</tr>
					</tbody>
				</table>
			<!-- /BODY -->
			</td>
		</tr>
	</tbody>
</table>
