<div class="testimonials container">
	<h1 class="text-center">See what our students or their parents have said</h1>

	@foreach ($testimonials as $testimonial)
		<div class="testimonials__card vertical-gutters--medium">
			<div class="testimonials__card-header">
				{{ $testimonial->student_name }} | {{ $testimonial->subject }} {{ $testimonial->level }}
			</div>
			<div class="testimonials__card-quote horizontal-gutters--large vertical-gutters--medium">
				<p>{{ $testimonial->message }}</p>
			</div>
		</div>
	@endforeach
</div>
