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
									<table width="610" align="center" cellpadding="15" bgcolor="#FFFFFF" style="text-align: center; padding: 3px; border: 1px solid #ececec;">
										<tr>
											<td colspan=2>
												<p>You've had a new enquiry! See the details below:</p>
											</td>
										</tr>
										@foreach ($params as $label => $param)
											<tr>
												<td style="border-bottom: 1px solid gray"><strong>{{ $label }}</strong></td>
												<td style="border-bottom: 1px solid gray">{{ $param }}</td>
											</tr>
										@endforeach
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
