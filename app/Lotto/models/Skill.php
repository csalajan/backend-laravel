<?php
namespace Lotto\models;
use Eloquent;

class Skill extends Eloquent {

	protected $table = 'lotto_skill';
	public $timestamps = false;
	protected $fillable = array('name');
	protected $guarded = array('id');
    protected $hidden = array('pivot');

	public function users(){
        return $this->belongsToMany('User', 'lotto_skill_user');
    }

}
