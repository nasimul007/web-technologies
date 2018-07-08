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
  <h2>PASSPORT APPLICATION-STAGE 3</h2>
  <pre style="color:gray;">   Online Application ID :</pre>
  <pre>   Fields marked with <span style="color:#f00">(*)</span> are mandetory.</pre>
  <form action="Stage4.php">
    <table>
    <col width="80">
    <col width="130">
    <col width="80">
      <col width="130">
    <tr>
      <td colspan="2" align="left"> <p style="color:blue;">Payment Information</p> </td>
     
     </tr>
    <tr>
    
    <td></td> 
    <td><input type="radio" name="Pay_Type" value="Online" > Online</td> 
 
    </tr>
   

    <tr>
      <td>Payment Type :</td> 
      <td><input type="radio" name="Pay_Type" value="Non_Online" checked> Non-Online</td>
    </tr> 
  
    <tr>
      <td><input type="checkbox" name="Skip_Pay" value="Skip_Pay"> Skip Payment</td>
    </tr>
  
    <tr>
   
      <td>Amount: <span style="color:#f00">*</span> </td><td> <select  name="Currency"  width="80" style="width: 80px">
        <option placeholder="Month"> BDT </option>
        <option value="saab">USD</option>
        <option value="fiat">Euro</option>
        <option value="audi">Pound</option>
        <option value="saab">Rupee</option>
        <input type="number" name="Amount" size ="15">
      </td>
      <td></td> 
    </tr>
  
    <tr>
      <td>Date Of Payment: <span style="color:#f00">*</span></td><td><input type="text" name="Pay_Date" size ="35"></td>  
    </tr>
  
    <tr>
      <td>Recept No: <span style="color:#f00">*</span></td><td><input type="text" name="Rec_No" size ="35"></td>  
    </tr>
  
    <tr>
      <td>Name Of Bank:  </td><td> <select  name="PS"  width="230" style="width: 230px">
        <option placeholder="Month"> Dhaka </option>
        <option value="saab">Bahrain</option>
        <option value="fiat">Belgium</option>
        <option value="audi">Canada</option>
        <option value="saab">Denmark</option>
      </td>
    </tr>

    <tr>
      <td>Name Of Branch: </td><td> <select  name="PO" width="230" style="width: 230px">
        <option placeholder="Month"> Bangladesh </option>
        <option value="saab">Bahrain</option>
        <option value="fiat">Belgium</option>
        <option value="audi">Canada</option>
        <option value="saab">Denmark</option>
      </td>
    </tr> 
    <tr>
      <td align="right">
        <input type="submit" name="" value="Save & Next">
      </td>
    </tr>
  </table> 
  </form>
</body>
</html>
