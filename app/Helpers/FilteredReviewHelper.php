<?php

namespace App\Helpers;

class FilterReviewHelper
{
    public function filterByRating($reviews, $minRating)
    {
        return array_filter($reviews, function ($review) use ($minRating) {
            return $review['rating'] >= $minRating;
        });
    }

    public function sortByDate($reviews, $sortOrder)
    {
        usort($reviews, function ($a, $b) use ($sortOrder) {
            $aTimestamp = strtotime($a['reviewCreatedOnDate']);
            $bTimestamp = strtotime($b['reviewCreatedOnDate']);
            if ($aTimestamp == $bTimestamp) {
                return 0;
            }
            return $aTimestamp < $bTimestamp ? $sortOrder : -$sortOrder;
        });
        return $reviews;
    }
}
