@extends('layouts.admin.panel')

@section('admin-panel-content')

<form>
    @foreach($testimonials as $testimonial)
        <div class="row">
            <div class="col-xs-12">
                <label for="student-name-{{$testimonial->id}}">Student Name</label>
                <input id="student-name-{{$testimonial->id}}" name="testimonial[id][student_name]" type='text' value="{{$testimonial->student_name}}"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="subject-{{$testimonial->id}}">Subject</label>
                <input id="subject-{{$testimonial->id}}" name="testimonial[id][subject]" type='text' value="{{$testimonial->subject}}"/>
            </div>
            <div class="col-md-6">
                <label for="level-{{$testimonial->id}}">Level</label>
                <input id="level-{{$testimonial->id}}" name="testimonial[id][level]" type='text' value="{{$testimonial->level}}"/>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <label for="message-{{$testimonial->id}}">Message</label>
                <textarea rows="2">{{$testimonial->message}}</textarea>
            </div>
        </div>
    @endforeach
<form>

@endsection
