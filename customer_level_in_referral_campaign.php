add_filter('wlr_pro_conditions',function($conditions){
	if(empty($conditions) || !is_array($conditions)){
		return $conditions;
	}	
	foreach ($conditions as $key => &$condition) {
		if($key != 'referral'){
			continue;
		}
         if ( isset( $condition['Common'] ) && isset( $condition['Common']['options'] ) ) {
					$condition['Common']['options']['user_level'] = __( 'Customer Level', 'wp-loyalty-rules' );
		}
   }
            
	return $conditions;
},10,1);
