@extends('layouts.main')

@section('content')

<div class="become-tutor container vertical-gutters--large">
	<div class="row text-center">
		<h1>Become a Tutor Today</h1>
	</div>
	<form>
		<div class="row become-tutor__form-row vertical-gutters--large">
			<div class="col-md-7">
				<div class="row become-tutor__form-row">
					<div class="col-xs-12">
						<label>Full Name*</label>
						<input type="text" />
					</div>
				</div>

				<div class="row become-tutor__form-row">
					<div class="col-md-6">
						<label>E-mail Address*</label>
						<input type="text" />
					</div>

					<div class="col-md-6">
						<label>Contact Number</label>
						<input type="text" />
					</div>
				</div>

				<div class="row become-tutor__form-row">
					<div class="col-xs-12">
						<label>Why do you want to tutor with us?</label>
						<div>
						<textarea rows="4"></textarea>
						</div>
					</div>
				</div>

				<div class="row become-tutor__form-row">
					<div class="col-xs-12">
						<label>What experience with tuition do you have so far?</label>
						<div>
						<textarea rows="4"></textarea>
						</div>
					</div>
				</div>

				<div class="row become-tutor__form-row">
					<div class="col-xs-12">
						<label>What subjects can you tutor, to what level and with which exam boards?</label>
						<div>
						<textarea rows="4"></textarea>
						</div>
					</div>
				</div>

				<div class="row become-tutor__form-row">
					<div class="col-xs-12">
						<label>Where and when can you run sessions? How far are you willing to travel?</label>
						<div>
						<textarea rows="4"></textarea>
						</div>
					</div>
				</div>

				<div class="row become-tutor__form-row">
					<div class="col-xs-12">
						<label>Please upload any supporting files/documents (CV, DBS etc.)</label>
						<label for="supporting-file" class="file-upload-button"><span class="glyphicon glyphicon-open"></span>&nbsp;&nbsp;&nbsp;Upload a file or files</label>
						<input type="file" class="inputfile" name="supportingFile" id="supporting-file" data-multiple-caption="{count} files selected" multiple>
					</div>
				</div>

				<div class="row become-tutor__form-row">
					<div class="col-xs-12">
						<label>Any other information you wish to provide?</label>
						<div>
						<textarea rows="2"></textarea>
						</div>
					</div>
				</div>

				<div class="row become-tutor__form-row">
					<div class="col-xs-12">
						<input class="cta--primary rounded" type="submit" value="Submit application" />
					</div>
				</div>

			</div>
			<div class="col-md-5">
				<h2 class="text-center vertical-gutters--medium">Why Become a tutor?</h2>
				<p>Tuition can be an extremely rewarding job. Hours can depend
					on what you can give and there is nothing more satisfying
					that seeing a student understanding a topic fully.</p>
				<br />
				<p>Here at Merlintuition we are constantly looking to find the
					best tutors in all subjects and bring them together with
					students to ensure the best experience for both.</p>
				<br />
				<p>So join us today to begin building up your client base. No
					matter if you are new to tuition or an experienced we can
					fit you in. Working together we will ensure that you are
					advertised and supported with your students.</p>

				<h2 class="text-center vertical-gutters--medium">Any Questions?</h2>
				<p>If you have any queries about becoming a tutor with merlin
					tuition, please feel free to send me an e-mail at:</p>
				<a href="mailto:admin@merlintuition.co.uk?Subject=Merlin%20Tutition%20Enquiry" target="_top">admin@merlintuition.co.uk</a>
			</div>
		</div>
	</form>
</div>

@endsection
