<?php namespace Katana\SpecialOffers\Models;

use Model;

/**
 * SpecialOffer Model
 */
class SpecialOffer extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'katana_special_offers';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'photo' => 'System\Models\File'
    ];
    public $attachMany = [];

}