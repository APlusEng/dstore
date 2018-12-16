@extends('layouts.admin.dashboard')
@section('content')
	<div class="card-body">
        <form>
            <div class="form-group">
                <label for="title" class="col-form-label">Title</label>
                   	<input name="title" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="slug" class="col-form-label">Slug</label>
                <input name="slug" type="text" class="form-control">
            </div>                                                              
                                           
             <div class="form-group">
                 <label for="description">Description</label>
                 <textarea class="form-control" idrows="3"></textarea>
             </div>
         </form>
     </div>
@endsection