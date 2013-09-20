<?php defined('SYSPATH') OR die('No direct script access.');

// Do not edit this file for dev config, use overrides instead

if (Kohana::$environment === Kohana::DEVELOPMENT)
{
    $settings =  array(
        // LOCAL
        'api_url'           => 'https://localhost/',
        'images_url'        => '/images/',
        'brand_images_url'   => '/images/brands/',
        
        'users_url'         => 'http://localhost/',
        'marketing_url'     => 'http://virtualpiggy.com/',

        'marketing_url_child' => 'http://www.myvirtualpiggy.com',
        
        'api_version'       => '',
        'timeout_enabled'   => 'FALSE',
        'legacy_url'        => 'https://localhost/',
        'use_fiddler'       => 'FALSE'	// DO NOT ENABLE THIS HERE
    );

    return Helper_Settings::override($settings);
}

if (Kohana::$environment === Kohana::TESTING)
{
    return $settings =  array(
        // FIPS
        'api_url'           => 'https://trunk.virtualpiggy.com/',
        'images_url'        => 'https://fips.virtualpiggy.com/images/',
        'brand_images_url'   => 'https://fips.virtualpiggy.com/images/brands/',
        
        'users_url'         => 'https://fips.virtualpiggy.com/',
        'marketing_url'     => 'http://virtualpiggy.com/',

        'marketing_url_child' => 'http://www.myvirtualpiggy.com',
        
        'api_version'       => '',
        'timeout_enabled'   => 'TRUE',
        'legacy_url' => 'https://trunk.virtualpiggy.com/'
    );
}


if (Kohana::$environment === Kohana::PRODUCTION)
{
	return array(
        // USERS
	    'api_url'          => 'https://api.virtualpiggy.com/',
	    'users_url'        => 'https://users.virtualpiggy.com/',
	    'images_url'       => 'https://images.virtualpiggy.com/images/',
        'brand_images_url'   => 'https://images.virtualpiggy.com/images/brands/',
        
        'marketing_url'    => 'http://virtualpiggy.com/',
        'marketing_url_child' => 'http://www.myvirtualpiggy.com',

        'api_version'      => '',
        'timeout_enabled'  => 'TRUE',
        'legacy_url' => 'https://live.virtualpiggy.com/'
	);
}