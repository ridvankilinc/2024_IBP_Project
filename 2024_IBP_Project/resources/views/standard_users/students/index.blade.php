@extends('layouts.standard')

@section('title', 'Students List')

@section('content-header')
    <h1>Products List</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Products</h3>
        </div>
        <div class="card-body">
            <!-- Student listing table -->
            @if($students->count())
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Product Owner Email</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->department }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <p>No products found for the given search criteria.</p>
            @endif
        </div>
    </div>
@endsection
