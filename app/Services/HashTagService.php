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

    /**
     *
     * @param string $hashtagTitle
     * @return int
     */
    public function findOrCreate(string $hashtagTitle): int
    {
        $hashtag =Hashtag::where('title', $hashtagTitle)->first();
        $hashtag = $hashtag ?: Hashtag::create(['title' => $hashtagTitle]);

        return $hashtag->id;
    }
}
