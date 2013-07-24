<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


class rrb_apartment extends ActiveRecord\Model { 
      static $table_name = 'rrb_apartment_comlex';
}

class rrb_housing extends ActiveRecord\Model { 
      static $table_name = 'rrb_housing';
}

class rrb_address  extends ActiveRecord\Model { 
      static $table_name = 'rrb_housing_address';
}

class rrb_finance  extends ActiveRecord\Model { 
      static $table_name = 'rrb_housing_finance';
}

class rrb_builder  extends ActiveRecord\Model { 
      static $table_name = 'rrb_investor_builder';
}

class rrb_infrastructure  extends ActiveRecord\Model { 
      static $table_name = 'rrb_housing_infrastructure';
}

class rrb_spec  extends ActiveRecord\Model { 
      static $table_name = 'rrb_housing_specification';
}


?>
