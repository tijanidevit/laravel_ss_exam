@extends('teacher.layout.app')

@section('title')
    Questions {{$form->name}}
@endsection

@section('page_title')
    {{$form->name}} Questions
@endsection

@section('page_description')
    Add new questions and view previously added questions
@endsection

@section('content')


<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="mb-3">Questions</h5>
                @if (session('deleted'))
                    <div class="alert alert-success">{{session('deleted')}}</div>
                @endif
                
                @forelse ($questions as $question)
                    <div class="mb-3">
                        <hr>
                        <h6>{{$question->question}}</h6>
                        <ul>
                            @forelse ($question->options as $option)
                                <li @if ($option->is_answer == 1) class="text-success" @endif>--- {{$option->option}}</li>
                            @empty
                                
                            @endforelse
                        </ul>
                        
                        <form action="{{route('teacher.subjects.question.delete', [$question->form_subject_id,$question->id,])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        <hr>
                    </div>
                @empty
                    <div class="text-danger">No questions added yet!</div>
                @endforelse
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="mb-3">Add Question</h5>

                <form action="" method="post">
                    @csrf
                    @if (session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">{{session('error')}}</div>
                    @endif
                    
                    <div class="form-group mb-3">
                        <label for="">Question</label>
                        <input type="text" class="form-control" name="question"value="{{old('question')}}" required>
                    </div>

                    
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Option A</label>
                            <input type="text" class="form-control" name="option1" value="{{old('option1')}}" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Option B</label>
                            <input type="text" class="form-control" name="option2" value="{{old('option2')}}" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Option C</label>
                            <input type="text" class="form-control" name="option3" value="{{old('option3')}}" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Option D</label>
                            <input type="text" class="form-control" name="option4" value="{{old('option4')}}" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Select correct option</label>
                            <select class="form-control" name="is_answer" value="{{old('is_answer')}}" required>
                                <option value="1">Option A</option>
                                <option value="2">Option B</option>
                                <option value="3">Option C</option>
                                <option value="4">Option D</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for=""></label>
                            <button class="btn btn-dark btn-block"> Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
@endsection