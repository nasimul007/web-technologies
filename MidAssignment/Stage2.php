<!DOCTYPE html>
<html>
<head>
	<style>
		table
		{
    		border: 1px solid black;
			width:100%;
		}
	</style>
</head>
<body>
	<h2>PASSPORT APPLICATION-STAGE 2</h2>
	<pre style="color:gray;">   Online Application ID :</pre>
	<pre>   Fields marked with <span style="color:#f00">(*)</span> are mandetory.</pre>
	<table>
	  <col width="80">
	  <col width="130">
	  <col width="80">
	    <col width="130">
	    <tr>
		    <td colspan="2" align="left"> <p style="color:blue;">Applicant Contact Information</p> </td>
		     
	   		<td colspan="2" align="left"> <p style="color:blue;">Old Passport Information</p> </td>   
  		</tr>
	    <tr>
		    <td>Office No : </td><td><input type="text" name ="Office_No" size ="35" ></td>
		    <td>Passport No:</td> <td><input type="text" name ="Passport_No" size ="35" ></td>  
	    </tr>
		<tr>
		    <td>Residence No: </td><td><input type="text" name ="Residence_No" size ="35"></td> 
		    <td>Place of Issue:   </td><td> <input type="text" name ="Place_of_Issue " size ="35"></td>   
	    </tr>
  
  		<tr>
   			 <td>Mobile No: </td><td><input type="text" name="Mbl_No" size ="35"></td>	
             <td>Date of Issue:  </td><td><input type="text" name="Is_res" size ="35"></td>					
		</tr>
		<tr>
			<td colspan="2" align="left"><p style="color:blue;">Emergency Contact Person's Details</p></td>
			<td>Re-Issue Reason:  </td><td> <select  name="Re_Issue"  width="230" style="width: 230px">
		    <option placeholder="select"> select </option>
		    <option value="l">lost</option>
		    <option value="s">stolen</option>
		</tr>
	   		<td>Name: <span style="color:#f00">*</span> </td><td><input type="text" name ="Ema_name" size ="35"></td> 
	    <tr>
	 
		  <td>Country: <span style="color:#f00">*</span> </td><td> <select  name="Ema_country"  width="230" style="width: 230px">
		    <option placeholder="Month"> Bangladesh </option>
		    <option value="saab">Bahrain</option>
		    <option value="fiat">Belgium</option>
		    <option value="audi">Canada</option>
			<option value="saab">Denmark</option>
			</td>
			
	    </tr>
		<tr>
	  		<td><input type="checkbox" name="parma" value="parma"> </td><td>Same as permanent address</td>
	    </tr>
	    <tr>
            <td><input type="checkbox" name="present" value="present" checked></td><td>Same as present address</td>
        </tr>
	 
	    <tr>
	        <td>Village/House:</td><td><input type="text" name ="Vill_Add" size ="35"></td> 
	    </tr>
	    <tr>
	       <td>Road/Block/Sector:</td><td><input type="text" name ="RBS" size ="35"></td> 
	    </tr>
	 
	    <tr>
	 
		  	<td>District: <span style="color:#f00">*</span> </td><td> <select  name="Dist"  width="230" style="width: 230px">
			    <option placeholder="Month"> Gazipur </option>
			    <option value="saab">Bahrain</option>
			    <option value="fiat">Belgium</option>
			    <option value="audi">Canada</option>
				<option value="saab">Denmark</option>
			</td>
			
		</tr>
	 

	 	<tr>
	   		<td>Police Station: <span style="color:#f00">*</span> </td><td> <select  name="PS"  width="230" style="width: 230px">
			    <option placeholder="Month"> Dhaka </option>
			    <option value="saab">Bahrain</option>
			    <option value="fiat">Belgium</option>
			    <option value="audi">Canada</option>
				<option value="saab">Denmark</option>
			</td>
		</tr>
	
		<tr>
	 
  			<td>Post Office: <span style="color:#f00">*</span> </td><td> <select  name="PO" width="230" style="width: 230px">
			    <option placeholder="Month"> Bangladesh </option>
			    <option value="saab">Bahrain</option>
			    <option value="fiat">Belgium</option>
			    <option value="audi">Canada</option>
				<option value="saab">Denmark</option>
			</td>
	
		</tr>
	
	
		<tr>
    		<td>Contact No: <span style="color:#f00">*</span></td><td><input type="text" name="Ema_Mbl_No" size ="35"></td>	
		</tr>
	
		<tr>
    		<td>Email: </td><td><input type="text" name="Ema_email" size ="35"></td>	
		</tr>
	
		<tr>
			<td>Relationship: <span style="color:#f00">*</span> </td><td> <select  name="Relate"  width="230" style="width: 230px">
			    <option placeholder="Month"> Father </option>
			    <option value="saab">Mother</option>
			    <option value="fiat">Sister</option>
			    <option value="audi">Brother</option>
				<option value="saab">Spouse</option>
			</td>
	 	</tr>
	</table>
</body>
</html>
