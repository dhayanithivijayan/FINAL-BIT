<?php
session_start();
include("database/db_conection.php");
ini_set('display_errors', '0');
	function buildQuery($arrayobjval,$arrayname,$query,$type)
	{  	
		$operator =(count($arrayobjval)>1)?'IN ':' = ';
		//Recheck the condition with select column name query
		if (strpos($query, 'AND') === false && strpos($query, '=') === false && strpos($query, 'IN') === false) {			
			if($type === 0){			
				$list = "". implode(",", $arrayobjval) ."";		
				if($operator === ' = '){
					return "`".$arrayname."` ".$operator." ".$list;			
				} else {
					return "`".$arrayname."` ".$operator. "(".$list.")";			
				}
				
			}else{
				
				$list = "'". implode("', '", $arrayobjval) ."'";
				if($operator === ' = '){
					return "`".$arrayname."` ".$operator." ".$list;
				} else {
					return "`".$arrayname."` ".$operator. "(".$list.")";		
				}	
			}	
			
		} else {	
			
			if($type === 0) {			
				$list = "". implode(",", $arrayobjval) ."";			
				if($operator === ' = '){
					return " AND `".$arrayname."` ".$operator." ".$list;			
				} else {
					return " AND `".$arrayname."` ".$operator. "(".$list.")";			
				}
				
					  
			} else {
				
				$list = "'". implode("', '", $arrayobjval) ."'";		
				if($operator === ' = '){				
					return " AND `".$arrayname."` ".$operator." ".$list;			
				} else {					
					return " AND `".$arrayname."` ".$operator. "(".$list.")";			
				}			
			} 		  
			
		}
	}

		
			
			if( isset($_POST['name']) )		
			{
				$control_revenue_bundle_unbundle=$_POST['CONTROL_REVENUE_BUNDLE_UNBUNDLE'];
				$control_category_cost_revenue=$_POST['CONTROL_CATEGORY_COST_REVENUE'];
				$group_name=$_POST['GROUP_NAME'];
				$account=$_POST['ACCOUNT'];
				$account_number=$_POST['ACCOUNT_NUMBER'];
				$invoice_number=$_POST['INVOICE_NUMBER'];
				$country=$_POST['COUNTRY'];
				$city_state=$_POST['CITY_STATE'];
				$a_site_address=$_POST['A_SITE_ADDRESS'];
				$product=$_POST['PRODUCT'];
				$service_category=$_POST['SERVICE_CATEGORY'];
				$classic_site_id=$_POST['CLASSIC_SITE_ID'];
				$service_period=$_POST['SERVICE_PERIOD'];
				$usf_code=$_POST['USF_CODE'];
				$supplier_name=$_POST['SUPPLIER_NAME'];
				$supplier_circuit_id_1=$_POST['SUPPLIER_CIRCUIT_ID_1'];
				$supplier_circuit_id_2=$_POST['SUPPLIER_CIRCUIT_ID_2'];
				$supplier_ban_1=$_POST['SUPPLIER_BAN_1'];	
				$supplier_ban_2=$_POST['SUPPLIER_BAN_2'];		
				//$query ="SELECT `ID`, `BT_CIRCUIT_ID`, `CONTROL_REVENUE_BUNDLE_UNBUNDLE`, `CONTROL_CATEGORY _COST_REVENUE`, `GROUP_NAME`, `ACCOUNT`, `ACCOUNT_NUMBER`, `INVOICE_NUMBER`, `BILLED_TO_DATE`, `DUE_BY`, `PSN`, `BILL_STRUCTURE_1`, `BILL_STRUCTURE_2`, `BILL_STRUCTURE_3`, `BILL_STRUCTURE_4`, `BILL_STRUCTURE_5`, `BILL_STRUCTURE_6`, `BILL_STRUCTURE_7`, `BILL_STRUCTURE_8`, `BILL_STRUCTURE_9`, `BILL_STRUCTURE_10`, `COUNTRY`, `CITY_ STATE`, `A SITE ADDRESS`, `Z SITE ADDRESS`, `NODE_ID_BT_POP`, `PRODUCT`, `SERVICE_CATEGORY`, `CAPACITY_MODEL`, `CLASSIC_SITE_ID`, `INVENTORY_DESCRIPTION`, `START_DATE`, `END_DATE`, `SERVICE_PERIOD`, `INVOICE_AMOUNT`, `CURRENCY`, `FOREX_RATE`, `ITEM_PRICE_MRC`, `ITEM_PRICE_MRC_USD`, `ACTUAL_CHARGE`, `ACTUAL_CHARGE_USD`, `TAX`, `DISCOUNT`, `USF CODE [33_40]`, `USF%`, `ACTUAL_USF_CHARGE`, `ACTUAL_USF_CHARGE_USD`, `ACTUAL_SUPPLIER_COST_USD`, `REVENUE_DERIVED_CHARGE_USD`, `COST_DERIVED_CHARGE_USD`, `GROSS_MARGIN_USD`, `GROSS_MARGIN_%`, `REVENUE_DERIVED_RECOVERY_USF`, `COST_DERIVED_CHARGE_USF`, `USF_DELTA_USD`, `SUPPLIER_NAME`, `SUPPLIER_CIRCUIT_ID_1`, `SUPPLIER_CIRCUIT_ID_2`, `SUPPLIER_BAN_1`, `SUPPLIER_BAN_2`, `TAX_EXEMPT_[Y_N]`, `USF_EXEMPT_[Y_N]`, `US_TOUCHING [Y_N]`, `COMMENTS`,`OTHER_1`, `OTHER_2`, `OTHER_3`, `OTHER_4`, `OTHER_5`, `OTHER_6`, `OTHER_7`, `OTHER_8` FROM `r2c1`";//select query for viewing users. ";		
				$query ="SELECT * FROM `r2c1` "; 
				if(!empty($control_revenue_bundle_unbundle)||!empty($control_category_cost_revenue)||!empty($group_name)||!empty($account)||!empty($account_number)||!empty($invoice_number)||!empty($country)||!empty($city_state)||!empty($a_site_address)||!empty($product)||!empty($service_category)||!empty($classic_site_id)||!empty($service_period)||!empty($usf_code)||!empty($supplier_name)||!empty($supplier_circuit_id_1)||!empty($supplier_circuit_id_2)||!empty($supplier_ban_1)||!empty($supplier_ban_2)){
					
					$query .= " WHERE ";
					
				} else {
					
					$status=array("STATUS"=>0,"ERROR"=>"PLEASE SEND QUERY PARAMS ");		                
					echo  json_encode($status);
					exit;
					
				}				
				//buildQuery($arrayobjval,$arrayname,$query,$type =1)
				
				$query .= (!empty(array_filter($control_revenue_bundle_unbundle)) ) ? buildQuery($control_revenue_bundle_unbundle,"CONTROL_REVENUE_BUNDLE_UNBUNDLE",$query,1) : "";					
				$query .= (!empty(array_filter($control_category_cost_revenue)) ) ? buildQuery($control_category_cost_revenue,"CONTROL_CATEGORY _COST_REVENUE",$query,1) : "";	
				$query .= (!empty(array_filter($group_name)) ) ? buildQuery($group_name,"GROUP_NAME",$query,1) : "";
				$query .= (!empty(array_filter($account)) ) ? buildQuery($account,"ACCOUNT",$query,1) : "";
				$query .= (!empty(array_filter($account_number)) ) ? buildQuery($account_number,"ACCOUNT_NUMBER",$query,1) : "";
				$query .= (!empty(array_filter($invoice_number)) ) ? buildQuery($invoice_number,"INVOICE_NUMBER",$query,0) : "";
				$query .= (!empty(array_filter($country)) ) ? buildQuery($country,"COUNTRY",$query,1) : "";
				$query .= (!empty(array_filter($city_state)) ) ? buildQuery($city_state,"CITY_ STATE",$query,1) : "";
				$query .= (!empty(array_filter($a_site_address)) ) ? buildQuery($a_site_address,"A SITE ADDRESS",$query,1) : "";
				$query .= (!empty(array_filter($product)) ) ? buildQuery($product,"PRODUCT",$query,1) : "";
				$query .= (!empty(array_filter($service_category)) ) ? buildQuery($service_category,"SERVICE_CATEGORY",$query,1) : "";
				$query .= (!empty(array_filter($classic_site_id)) ) ? buildQuery($classic_site_id,"CLASSIC_SITE_ID",$query,1) : "";
				$query .= (!empty(array_filter($service_period)) ) ? buildQuery($service_period,"SERVICE_PERIOD",$query,1) : "";
				$query .= (!empty(array_filter($usf_code))) ? buildQuery($usf_code,"USF CODE [33_40]",$query,0) : "";
				$query .= (!empty(array_filter($supplier_name))) ? buildQuery($supplier_name,"SUPPLIER_NAME",$query,1) : "";
				$query .= (!empty(array_filter($supplier_circuit_id_1))) ? buildQuery($supplier_circuit_id_1,"SUPPLIER_CIRCUIT_ID_1",$query,1) : "";
				$query .= (!empty(array_filter($supplier_circuit_id_2)) ) ? buildQuery($supplier_circuit_id_2,"SUPPLIER_CIRCUIT_ID_2",$query,1) : "";
				$query .= (!empty(array_filter($supplier_ban_1))) ? buildQuery($supplier_ban_1,"SUPPLIER_BAN_1",$query,1) : "";
				$query .= (!empty(array_filter($supplier_ban_2))) ? buildQuery($supplier_ban_2,"SUPPLIER_BAN_2",$query,1) : "";					
				$result = mysqli_query($dbcon,$query);
				$num_rows = mysqli_num_rows($result);						
				if($num_rows>0)
				{	
					 $_SESSION['query']=$query;
					 $status=array("STATUS"=>1,"RECORDS FOUND");		                
					 echo  json_encode($status);	
					 exit;
					 
					 
				}
				else
				{
						$status=array("STATUS"=>0,"NO RECORDS FOUND");		                
						echo  json_encode($status);	
						exit;
				}	
				
		
			}
			else
			{

						$status=array("STATUS"=>0,"ERROR"=>"PLEASE SEND QUERY PARAMS");		                
						echo  json_encode($status);
						exit;

			}			
			
			?>




