<?php

/**
 * Filter reviews by minimum rating and sort by text, rating or date.
 *
 * @param array $reviews An array of reviews to filter.
 * @param int $filterRating The minimum rating to include in the results.
 * @param string $sortBy The field to sort the results by (text, rating, or date).
 * @param string $sortOrder The order to sort the results by (asc or desc).
 * @return array The filtered and sorted reviews.
 */
function filterReviews(array $reviews, int $filterRating = 1, string $sortBy = 'text', string $sortOrder = 'asc'): array
{
    // Filter reviews by minimum rating
    $filteredReviews = array_filter($reviews, function ($review) use ($filterRating) {
        return $review['rating'] >= $filterRating;
    });

    // Sort reviews by text, rating, or date
    usort($filteredReviews, function ($review1, $review2) use ($sortBy, $sortOrder) {
        if ($review1[$sortBy] == $review2[$sortBy]) {
            return 0;
        }
        $sortValue = $review1[$sortBy] > $review2[$sortBy] ? 1 : -1;
        return $sortOrder == 'asc' ? $sortValue : -$sortValue;
    });

    return $filteredReviews;
}
