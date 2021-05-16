<?php

namespace App\Traits;

use Hootlex\Friendships\Status;

/**
 * Class Friendable
 * @package Hootlex\Friendships\Traits
 */
trait FriendableExtend
{
        /**
     * This method will not return Friendship models
     * It will return the 'friends' models. ex: App\User
     *
     * @param int $perPage Number
     * @param string $groupSlug
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getPendingFriends($perPage = 0, $groupSlug = '')
    {
        return $this->getOrPaginate($this->getPendingFriendsQueryBuilder($groupSlug), $perPage);
    }

        /**
     * Get the query builder of the 'friend' model
     *
     * @param string $groupSlug
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    private function getPendingFriendsQueryBuilder($groupSlug = '')
    {

        $friendships = $this->findFriendships(Status::PENDING, $groupSlug)->get(['sender_id']);
        $senders     = $friendships->pluck('sender_id')->all();

        return $this->where('id', '!=', $this->getKey())->whereIn('id', $senders);
    }
}