<?php
require_once __DIR__.'/vendor/autoload.php';

use App\Helpers\FilterReviewHelper;
use App\Models\Review;

// Load reviews from reviews.json and reviews2.json files
$reviews1 = json_decode(file_get_contents(__DIR__.'/public/reviews.json'), true);
$reviews2 = json_decode(file_get_contents(__DIR__.'/public/reviews2.json'), true);

// Merge the two arrays of reviews
$reviews = array_merge($reviews1, $reviews2);

// Filter the reviews by rating (4 stars and above) and sort by date in descending order
$filterHelper = new FilterReviewHelper();
$reviews = $filterHelper->filterByRating($reviews, 4);
$reviews = $filterHelper->sortByDate($reviews, SORT_DESC);

// Create Review objects from the filtered and sorted review data
$reviewObjects = array_map(function($review) {
    return new Review($review['reviewText'], $review['rating'], $review['reviewCreatedOnDate']);
}, $reviews);

// Output the review objects as JSON
header('Content-Type: application/json');
echo json_encode($reviewObjects);
