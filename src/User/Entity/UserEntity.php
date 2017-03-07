<?php
/**
 * @copyright: DotKernel
 * @library: dot-frontend
 * @author: n3vrax
 * Date: 2/23/2017
 * Time: 1:32 AM
 */

declare(strict_types = 1);

namespace Frontend\User\Entity;

/**
 * Class UserEntity
 * @package App\User\Entity
 */
class UserEntity extends \Dot\User\Entity\UserEntity
{
    /** @var  UserDetailsEntity */
    protected $details;

    /**
     * @return UserDetailsEntity
     */
    public function getDetails(): UserDetailsEntity
    {
        if (!$this->details) {
            $this->details = new UserDetailsEntity();
        }
        return $this->details;
    }

    /**
     * @param UserDetailsEntity $details
     */
    public function setDetails(UserDetailsEntity $details)
    {
        $this->details = $details;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return array_merge(
            parent::jsonSerialize(),
            [
                'details' => $this->getDetails(),
            ]
        );
    }
}