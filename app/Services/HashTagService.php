<?php

namespace App\Services;

use App\Models\Hashtag;

class HashTagService
{
    /**
     *
     * @param string $hashtagString
     * @return array
     */
    public function getHashtagsFromString(string $hashtagString): array
    {
         $hashtags = array_filter(explode('#', $hashtagString), function($element) {
            return $element !== '';
        });

        return array_map(function ($hashtag) {
            return trim($hashtag);
        }, $hashtags);
    }
}
