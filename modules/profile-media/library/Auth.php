<?php
/**
 * Auth
 * @package profile-media
 * @version 0.0.1
 */

namespace ProfileMedia\Library;


class Auth implements \LibUpload\Iface\Authorizer
{
    static function getAuthId(): ?int{
        if(!\Mim::$app->profile->isLogin())
            return null;
        return \Mim::$app->profile->id;
    }
}