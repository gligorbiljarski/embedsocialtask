<?php

use App\Helpers\FilterReviewHelper;

Route::get('/', function () {
    $reviews = FilterReviewHelper::loadReviews('reviews.json');
    $filteredReviews = FilterReviewHelper::filterByRating($reviews, 4);

    return view('welcome', [
        'reviews' => $filteredReviews,
    ]);
});

Route::get('/date', function () {
    $reviews = FilterReviewHelper::loadReviews('reviews.json');
    $filteredReviews = FilterReviewHelper::filterByDate($reviews, '2022-01-01', '2022-02-01');

    return view('welcome', [
        'reviews' => $filteredReviews,
    ]);
});

Route::get('/reviews2', function () {
    $reviews = FilterReviewHelper::loadReviews('reviews2.json');
    $filteredReviews = FilterReviewHelper::filterByRating($reviews)
