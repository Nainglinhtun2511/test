@extends('layouts.master')

@section('content')
  <div class="col col-md-6">
    <div class="card">
        <div class="card-header">
             Add  Task
        </div>
        <div class="card-body">
        <form method="post" action="{{ route ('task.create')}}">
            @csrf
                <div class="form-group">
                    <label for="task">Write your task</label>
                <input type="text" id="task" name="taskname" class="form-control {{ $errors->has('taskname')? 'is-invalid' : ''}}">
                    <div class="invalid-feedback">
                      {{$errors->has('taskname')? $errors->first('taskname'):''}}
                      </div>
            
                </div>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
             Task List
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Task</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>Task1</td>
                    <td><button class="btn btn-danger">Delete</button></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection()