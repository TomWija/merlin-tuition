<!-- Modal -->
<div id="contactModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Contact Us</h4>
      </div>
      <div class="modal-body">
        <p>To contact me, please fill out the form below, or if you'd prefer,
			phone me on: 07123456789</p>

		<form action="{{route('submit-contact-form')}}" method="POST">
			<div class="row contact-us__form-row vertical-gutters--large">
				<div class="col-xs-12">
					<div class="row contact-us__form-row">
						<div class="col-xs-12">
							<label>Full Name*</label>
							<input type="text" name="name" required/>
						</div>
					</div>

					<div class="row contact-us__form-row">
						<div class="col-sm-6">
							<label>E-mail Address*</label>
							<input type="email" name="email" required/>
						</div>

						<div class="col-sm-6">
							<label>Contact Number</label>
							<input type="text" name="contactNumber"/>
						</div>
					</div>

					<div class="row contact-us__form-row">
						<div class="col-xs-12">
							<label>What is your enquiry?*</label>
							<div>
							<textarea rows="4" name="enquiry" required></textarea>
							</div>
						</div>
					</div>

					<div class="row contact-us__form-row">
						<div class="col-xs-12">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input class="cta cta--primary rounded" type="submit" value="Send Enquiry" />
						</div>
					</div>

				</div>
			</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
