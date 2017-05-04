<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Logo Path
    |--------------------------------------------------------------------------
    |
    | This value should contain the path to the logo file that you wish to
    | display above each form in the login system. If left null then
    | your application name will be displayed as text instead.
    */

    'logoPath' => null,

    /*
    |--------------------------------------------------------------------------
    | Logo Alt Text
    |--------------------------------------------------------------------------
    |
    | If you are displaying a logo, then it is good practise to also provide
    | alternative text for assistive devices. If this is set to null then
    | again your application name will be added to the view instead.
    */

    'logoAltText' => null,

    /*
    |--------------------------------------------------------------------------
    | Redirect To
    |--------------------------------------------------------------------------
    |
    | By default, when a user successfully authenticates, Laravel will
    | to a "home" route, so we do too. But if you'd rather they
    | are taken someplace else, you can indicate that here.
    */

    'redirectTo' => '/home',
];
