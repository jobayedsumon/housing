<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class career extends Sximo  {
	
	protected $table = 'vmsl_career';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_career.* FROM vmsl_career  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_career.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
