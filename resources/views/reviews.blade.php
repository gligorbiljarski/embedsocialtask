@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Reviews</h1>
                <hr>
                <h3>Sort By Rating</h3>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Rating</th>
                        <th>Date</th>
                        <th>Review</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sortByRating as $review)
                        <tr>
                            <td>{{ $review->name }}</td>
                            <td>{{ $review->rating }}</td>
                            <td>{{ $review->created_at }}</td>
                            <td>{{ $review->text }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
                <h3>Sort By Date</h3>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Rating</th>
                        <th>Date</th>
                        <th>Review</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sortByDate as $review)
                        <tr>
                            <td>{{ $review->name }}</td>
                            <td>{{ $review->rating }}</td>
                            <td>{{ $review->created_at }}</td>
                            <td>{{ $review->text }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

