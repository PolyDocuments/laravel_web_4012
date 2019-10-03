@extends('layouts')

@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div>
                <label>Name</label>
                <input type="text" name="name"/>
            </div>

            <div>
                <label>Email</label>
                <input type="text" name="email"/>
            </div>
            <div>
                <label>Birthday</label>
                <input type="text" name="birthday"/>
            </div>
            <button type="submit">Submit</button>
        </form>
    </section>
  </div>

@endsection
