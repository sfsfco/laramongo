<?php


namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Subscribe extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'subscribers';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kendp',
        'publicKey', 
        'authToken', 
        'contentEncoding', 
        'country', 
        'ip', 
        'model', 
        'osversion', 
        'browser', 
        'browserversion', 
        'language', 
        'connection', 
        'os', 
        'device', 
        'brand', 
        'last_send'
    ];
}