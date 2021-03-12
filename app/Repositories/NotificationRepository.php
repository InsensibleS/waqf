<?php

namespace App\Repositories;

use App\Models\Notification;
use App\Models\NotificationFilter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationRepository
{
    const NOTIFICATION_FILTERS = [
        'all' => [1,2,3,4,5,6,7],
        'news' => [4],
        'my projects' => [1,3,5,7],
        'my comments' => [1,5,8]
    ];

    const FOR_PAGE = 15;

    /**
     * @param Request $request
     * @return array
     */
    public function getCustomerNotifications(Request $request): array
    {
        $filter = $request->filter ? $request->filter : 'all';
        $notificationTypes = self::NOTIFICATION_FILTERS[$filter];
        $searchWord = $request->search_word ? '%' . $request->search_word . '%' : null;
        $is_unread = $request->is_unread;
        $page = $request->page ?: 1;
        $sortByDate = $request->sort_by_date === 'asc' ? 'asc' : 'desc';

        $allNotifications = Notification::with('notificationType')->orderBy('id', $sortByDate)
            ->where('customer_id', Auth::id())
            ->when($filter !== 'all', function ($query) use ($notificationTypes){
                  return $query->whereIn('type_id', $notificationTypes);
            })
            ->when($searchWord, function ($query) use ($searchWord) {
                return $query->where('description','like', $searchWord);
            })
            ->when($is_unread, function ($query) {
                return $query->where('is_read', false);
            })
            ->get();

        $notificationssForPage = [];
        $numberOfPages = 0;

        if (count($allNotifications) !== 0) {
            $notificationssForPage = $allNotifications->forPage($page,self::FOR_PAGE);
            $numberOfPages = ceil(count($allNotifications)/self::FOR_PAGE);
        }

        return [
            'notifications' => $notificationssForPage,
            'numberOfPages' => $numberOfPages,
            'notificationFilters' => NotificationFilter::all()
        ];
    }
}
