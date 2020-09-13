@extends('Backend/admin/layouts/master')
@section('title','Post')
@section('content')
<div class="container">
    <div class="row justify-content-center">    
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($contacts as $contact)
                        <tr>
                              <td>{{$contact->id}}</td>
                              <td>{{$contact->name}}</td>
                              <td>{{$contact->email}}</td>
                              <td>{{$contact->subject}}</td>
                              <td>{{$contact->message}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection