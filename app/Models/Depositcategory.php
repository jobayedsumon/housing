<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class depositcategory extends Sximo  {
	
	protected $table = 'vmsl_deposit_category';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_deposit_category.* FROM vmsl_deposit_category  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_deposit_category.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
