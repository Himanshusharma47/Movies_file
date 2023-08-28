<?php
	
	class json{
		
	private	$jsonfile = ('data.json');
		
		function display()
		{
			if(file_exists($this->jsonfile))
			{
				$jsondata = file_get_contents($this->jsonfile);
				$data = json_decode($jsondata, true);
				return !empty($data)?$data:'';
			}
			else
			{
				return false;
			}
		}
		
		function single($eid)
		{
			$jsondata = file_get_contents($this->jsonfile);
			$data = json_decode($jsondata,true);
			
			foreach($data as $key => $value)
			{
				if($value['id'] == $eid)
				{
				// important line why should we use $data[$key] keep remember!
					$singledata = $data[$key];
				}
			}
			// send one data which data id is same!
			return !empty($singledata)?$singledata:'';
		}
		
		function insert($userdata)
		{	// random id generated!
			$id = time();
			$userdata['id'] = $id;
			
			// first we have to collect the save data in json file---
			$jsondata = file_get_contents($this->jsonfile);
			$data = json_decode($jsondata, true);
			
			if(!empty($data))
			{
				array_push($data,$userdata);
			}
			else
			{
				$data[] = $userdata;
			}
			
			// after inserting we have to put the data in json file 
			$insert = file_put_contents($this->jsonfile,json_encode($data,JSON_PRETTY_PRINT));
			return $insert?true:false;
		}
		
		function update($userdata, $eid)
		{
			$jsondata = file_get_contents($this->jsonfile);
			$data = json_decode($jsondata,true);
			
			foreach($data as $key => $value)
			{
				if($value['id'] == $eid)
				{
					if(!empty($userdata['name']))
					{
						$data[$key]['name'] = $userdata['name'];
					}
					if(!empty($userdata['age']))
					{
						$data[$key]['age'] = $userdata['age'];
					}
				}
			}
			
			$data = array_values($data);
			$update = file_put_contents($this->jsonfile, json_encode($data,JSON_PRETTY_PRINT));
			return $update?true:false;
		}
		
		function del($did)
		{
			$jsondata = file_get_contents($this->jsonfile);
			$data = json_decode($jsondata,true);
			
			if(!empty($data))
			{
				foreach($data as $key => $value)
				{
					if($value['id'] == $did)
					{
						unset($data[$key]);
						break;
					}
				}
			}
			else
			{
				return false; 
			}
			
			$data = array_values($data);
			$deletedata  = file_put_contents($this->jsonfile, json_encode($data,JSON_PRETTY_PRINT));
			return $deletedata?true:false;
		}
	}
?>