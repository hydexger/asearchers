<?php namespace Asearcher\Candidatecustommer\Models;

use Model;

/**
 * JobCategory Model
 */
class JobCategory extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'job_category';

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
    public $attachOne = [];
    public $attachMany = [];
}