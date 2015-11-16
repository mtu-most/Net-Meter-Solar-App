<html>
<head>
<title>Application : NET METERING INTERCONNECTION FOR PLUG AND PLAY SOLAR SYSTEM</title>
<meta name="generator" content="Bluefish 2.2.5" >
<meta name="author" content="root" >
<meta name="date" content="2015-09-16T14:16:27-0400" >
<meta name="copyright" content="">
<meta name="keywords" content="net metering,plug and play solar system">
<meta name="description" content="Application : NET METERING INTERCONNECTION FOR PLUG AND PLAY SOLAR SYSTEM">
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="expires" content="0">
<script type="text/javascript">
//check to show certified testing record number field or not
function checkYesNo() {
    if (document.getElementById('b_ul1741_yes').checked) {
        document.getElementById('if_b_ul1741_yes').style.display = 'block';
    }
    else document.getElementById('if_b_ul1741_yes').style.display = 'none';
    if (document.getElementById('b_ul1703_yes').checked) {
        document.getElementById('if_b_ul1703_yes').style.display = 'block';
    }
    else document.getElementById('if_b_ul1703_yes').style.display = 'none';
}

//check to show section A or B
function checkAB() {
    if (document.getElementById('chooseSectionA').checked) {
        document.getElementById('sectionA').style.display = 'block';
        document.getElementById('sectionB').style.display = 'none';
    }
    else {
    	document.getElementById('sectionB').style.display = 'block';
    	document.getElementById('sectionA').style.display = 'none';
    }
}
var onlyInteger = /^\d+$/;
function checkInteger(myField) {
	//alert(myField.value);
	var myData = myField.value;
	if (!myData.match(onlyInteger)) {
		alert('The field must be number!')
	}
		
}
//check required field and valid email address
var emailRex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
function checkRequiredField() {
	errorhappen = 0;
	if (appForm.customer_name.value == "") {
		alert('Customer Name is required!');
		errorhappen = 1;
	}
	var customer_email = appForm.customer_email.value
	if (customer_email != "") {
		if (!customer_email.match(emailRex)) {
			alert('Invalid email address!');
			errorhappen = 1;
		}
	}
	if (errorhappen == 0) {
		return true;	
	} else {
		return false;
	}
}

</script>
</head>
<body style="margin-left:0;padding:0;background-color:gray">
<table align="center" style="border-style:solid;border-width:0px;padding:0px 100px 20px 100px;background-color:white"><tr><td>
<div style="text-align: center"><h1><font color="red">APPLICATION</font></h1>
<h3>NET METERING INTERCONNECTION FOR PLUG AND PLAY SOLAR SYSTEM</h3>
</div>

<?php
if (!isset($_POST['submit'])) { // if it is not submitted then show the form
?>

<h4>Customer Information</h4>
<form name="appForm" action="application.php" method="post" >
<table>
	<tr><td>Customer Name:</td><td><input type="text" name="customer_name" size="30" maxlength="50"></td></tr>
	<tr><td>Customer Mailing Address:</td><td><input type="text" name="customer_mailing_address" size="60" maxlength="150"></td></tr>
	<tr><td>Customer Phone Number:</td><td><input type="text" name="customer_phone_number" size="30" maxlength="20"></td></tr>
	<tr><td>Customer Email:</td><td><input type="text" name="customer_email" size="30" maxlength="50"></td></tr>
	<tr><td>Electric Service Account Number:</td><td><input type="text" name="electric_service_account_number" size="30" maxlength="20"></td></tr>
	<tr><td>Electric Service Meter Number:</td><td><input type="text" name="electric_service_meter_number" size="30" maxlength="30"></td></tr>
	<tr><td>Are you applying for Net Metering?</td><td><input type="radio" name="applying_for_net_metering" value="1">Yes<input type="radio" name="applying_for_net_metering" value="0">No</td></tr>
</table>
<br>
<input type="radio" onclick="javascript:checkAB();" name="chooseSection" id="chooseSectionA" checked="checked" value="A">Plug and Play Solar Kit <input type="radio" onclick="javascript:checkAB();" name="chooseSection" id="chooseSectionB" value="B">à la carte
<div id="sectionA" style="display:block">
<h3>SECTION A</h3>
<h4>Plug and Play Solar Kit</h4>
 <table>
	<tr><td>Manufacturer:</td><td><input type="text" name="a_manufacturer" size="30" maxlength="50"></td></tr>
	<tr><td>Model Number:</td><td><input type="text" name="a_model_number" size="30" maxlength="50"></td></tr>
	<tr><td>AC Power Type:</td><td><input type="radio" name="a_ac_power_type" value="Single Phase">Single Phase<input type="radio" name="a_ac_power_type" value="Three Phase">Three Phase</td></tr>
	<tr><td>Testing Standards:</td><td></td></tr>
	<tr><td></td><td>
	<table><tr><td>CEC:</td><td><input type="radio" name="a_testing_standards_cec" value="1">Yes<input type="radio" name="a_testing_standards_cec" value="0">No</td></tr>
			<tr><td>UL1741:</td><td><input type="radio" name="a_testing_standards_ul1741" value="1">Yes<input type="radio" name="a_testing_standards_ul1741" value="0">No</td></tr>
	</table>
	</td></tr>
	
	<tr><td>Number of Modules:</td><td><input type="text" name="a_number_of_modules" id="a_number_of_modules" size="30" maxlength="11" ></td></tr>
	<tr><td>AC Operating Voltage:</td><td><input type="text" name="a_ac_operating_voltage" size="30" maxlength="11" > V.</td></tr>
</table>
</div>
<div id="sectionB" style="display:none">
<h3>SECTION B</h3>
<h4>Inverter and Solar Panel Information</h4>
<table>
	<tr><td>Inverter Manufacturer:</td><td><input type="text" name="b_inverter_manufacturer" size="30" maxlength="50"></td></tr>
	<tr><td>Inverter Module Number:</td><td><input type="text" name="b_inverter_module_number" size="30" maxlength="50"></td></tr>
	<tr><td>Inverter Power Rating:</td><td><input type="text" name="b_inverter_power_rating" size="30" maxlength="11" > kW/unit</td></tr>
	<tr><td>Number of Inverter Units:</td><td><input type="text" name="b_number_of_inverter_units" size="30" maxlength="11" ></td></tr>
	<tr><td>AC Output Voltage:</td><td><input type="text" name="b_ac_output_voltage" size="30" maxlength="11" > V.</td></tr>
	<tr><td>Solar Panel AC Output Rating:</td><td><input type="text" name="b_solar_panel_ac_output_rating" size="30" maxlength="11" > kW/unit</td></tr>
	<tr><td>Number of Solar PV Panels:</td><td><input type="text" name="b_number_of_solar_pv_panels" size="30" maxlength="11" ></td></tr>
	<tr><td>AC Power Type:</td><td><input type="radio" name="b_ac_power_type" value="Single Phase">Single Phase<input type="radio" name="b_ac_power_type" value="Three Phase">Three Phase </td></tr>
	<tr><td>UL1741 Standard Testing:</td><td><input type="radio" onclick="javascript:checkYesNo();" name="b_ul1741_standard_testing" id="b_ul1741_yes" value="1">Yes<input type="radio" onclick="javascript:checkYesNo();" name="b_ul1741_standard_testing" id="b_ul1741_no" value="0">No</td></tr>
	<tr><td colspan="2"><div id="if_b_ul1741_yes" style="display:none">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If yes then Certified Testing Record Number:&nbsp;<input type="text" name="b_certified_testing_record_number_ul1741" size="30" maxlength="50"></div></td></tr>
	<tr><td>UL1703 Standard Testing:</td><td><input type="radio" onclick="javascript:checkYesNo();" name="b_ul1703_standard_testing" id="b_ul1703_yes" value="1">Yes<input type="radio" onclick="javascript:checkYesNo();" name="b_ul1703_standard_testing" id="b_ul1703_no" value="0">No</td></tr>
	<tr><td colspan="2"><div id="if_b_ul1703_yes" style="display:none">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If yes then Certified Testing Record Number:&nbsp;<input type="text" name="b_certified_testing_record_number_ul1703" size="30" maxlength="50"></div></td></tr>
</table>

</div>

<br>
<div style="text-align: center"><input type="submit" name="submit" value=" Submit " >&nbsp;<input type="submit" name="clear" value="Clear"></div>

</form>
<?php
} else {
	//receive all posted value from the html form
	$customer_name = "" != trim($_POST['customer_name']) ? trim($_POST['customer_name']) : null;
	$customer_mailing_address = "" != trim($_POST['customer_mailing_address']) ? trim($_POST['customer_mailing_address']) : null;
	$customer_phone_number = "" != trim($_POST['customer_phone_number']) ? trim($_POST['customer_phone_number']) : null;
	$customer_email = "" != trim($_POST['customer_email']) ? trim($_POST['customer_email']) : null;
	$electric_service_account_number = "" != trim($_POST['electric_service_account_number']) ? trim($_POST['electric_service_account_number']) : null;
	$electric_service_meter_number = "" != trim($_POST['electric_service_meter_number']) ? trim($_POST['electric_service_meter_number']) : null;
	$applying_for_net_metering = isset($_POST['applying_for_net_metering']) ? $_POST['applying_for_net_metering'] : null;
	//section A
	$a_manufacturer = "" != trim($_POST['a_manufacturer']) && $_POST['chooseSection'] == 'A' ? trim($_POST['a_manufacturer']) : null;
	$a_model_number = "" != trim($_POST['a_model_number']) && $_POST['chooseSection'] == 'A' ? trim($_POST['a_model_number']) : null;
	$a_ac_power_type = isset($_POST['a_ac_power_type']) && $_POST['chooseSection'] == 'A' ? $_POST['a_ac_power_type'] : null;
	//$a_ac_power_type_three_phase = isset($_POST['a_ac_power_type_three_phase']) && $_POST['chooseSection'] == 'A' ? $_POST['a_ac_power_type_three_phase'] : null;
	$a_testing_standards_cec = isset($_POST['a_testing_standards_cec']) && $_POST['chooseSection'] == 'A' ? $_POST['a_testing_standards_cec'] : null;
	$a_testing_standards_ul1741 = isset($_POST['a_testing_standards_ul1741']) && $_POST['chooseSection'] == 'A' ? $_POST['a_testing_standards_ul1741'] : null;
	$a_number_of_modules = "" != trim($_POST['a_number_of_modules']) && $_POST['chooseSection'] == 'A' ? trim($_POST['a_number_of_modules']) : null;
	$a_ac_operating_voltage = "" != trim($_POST['a_ac_operating_voltage']) && $_POST['chooseSection'] == 'A' ? trim($_POST['a_ac_operating_voltage']) : null;
	//section B
	$b_inverter_manufacturer = "" != trim($_POST['b_inverter_manufacturer']) && $_POST['chooseSection'] == 'B' ? trim($_POST['b_inverter_manufacturer']) : null;
	$b_inverter_module_number = "" != trim($_POST['b_inverter_module_number']) && $_POST['chooseSection'] == 'B' ? trim($_POST['b_inverter_module_number']) : null;
	$b_inverter_power_rating = "" != trim($_POST['b_inverter_power_rating']) && $_POST['chooseSection'] == 'B' ? trim($_POST['b_inverter_power_rating']) : null;
	$b_number_of_inverter_units = "" != trim($_POST['b_number_of_inverter_units']) && $_POST['chooseSection'] == 'B' ? trim($_POST['b_number_of_inverter_units']) : null;
	$b_ac_output_voltage = "" != trim($_POST['b_ac_output_voltage']) && $_POST['chooseSection'] == 'B' ? trim($_POST['b_ac_output_voltage']) : null;
	$b_solar_panel_ac_output_rating = "" != trim($_POST['b_solar_panel_ac_output_rating']) && $_POST['chooseSection'] == 'B' ? trim($_POST['b_solar_panel_ac_output_rating']) : null;
	$b_number_of_solar_pv_panels = "" != trim($_POST['b_number_of_solar_pv_panels']) && $_POST['chooseSection'] == 'B' ? trim($_POST['b_number_of_solar_pv_panels']) : null;
	$b_ac_power_type = isset($_POST['b_ac_power_type']) && $_POST['chooseSection'] == 'B' ? $_POST['b_ac_power_type'] : null;
	//$b_ac_power_type_three_phase = isset($_POST['b_ac_power_type_three_phase']) && $_POST['chooseSection'] == 'B' ? $_POST['b_ac_power_type_three_phase'] : null;
	$b_ul1741_standard_testing = isset($_POST['b_ul1741_standard_testing']) && $_POST['chooseSection'] == 'B' ? $_POST['b_ul1741_standard_testing'] : null;
	$b_certified_testing_record_number_ul1741 = "" != trim($_POST['b_certified_testing_record_number_ul1741']) && $_POST['chooseSection'] == 'B' && $b_ul1741_standard_testing == 1 ? trim($_POST['b_certified_testing_record_number_ul1741']) : null;
	$b_ul1703_standard_testing = isset($_POST['b_ul1703_standard_testing']) && $_POST['chooseSection'] == 'B' ? $_POST['b_ul1703_standard_testing'] : null;
	$b_certified_testing_record_number_ul1703 = "" != trim($_POST['b_certified_testing_record_number_ul1703']) && $_POST['chooseSection'] == 'B' && $b_ul1703_standard_testing == 1 ? trim($_POST['b_certified_testing_record_number_ul1703']) : null;

	//create database connection
	$db_conn = new mysqli("localhost", "root", "password!", "nmifpapss"); 
	if ($db_conn->errno) die("Database connection failed: " . htmlspecialchars($db_conn->error()));
	
	//create query
	$query = 'INSERT INTO `application` (`CUSTOMER_NAME`, `CUSTOMER_MAILING_ADDRESS`, `CUSTOMER_PHONE_NUMBER`, `CUSTOMER_EMAIL`, `ELECTRIC_SERVICE_ACCOUNT_NUMBER`, `ELECTRIC_SERVICE_METER_NUMBER`, `APPLYING_FOR_NET_METERING`, `A_MANUFACTURER`, `A_MODEL_NUMBER`, `A_AC_POWER_TYPE`, `A_TESTING_STANDARDS_CEC`, `A_TESTING_STANDARDS_UL1741`, `A_NUMBER_OF_MODULES`, `A_AC_OPERATING_VOLTAGE`, `B_INVERTER_MANUFACTURER`, `B_INVERTER_MODULE_NUMBER`, `B_INVERTER_POWER_RATING`, `B_NUMBER_OF_INVERTER_UNITS`, `B_AC_OUTPUT_VOLTAGE`, `B_SOLAR_PANEL_AC_OUTPUT_RATING`, `B_NUMBER_OF_SOLAR_PV_PANELS`, `B_AC_POWER_TYPE`, `B_UL1741_STANDARD_TESTING`, `B_CERTIFIED_TESTING_RECORD_NUMBER_UL1741`, `B_UL1703_STANDARD_TESTING`, `B_CERTIFIED_TESTING_RECORD_NUMBER_UL1703`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)'; 
	$stmt = $db_conn->prepare($query); 
	if ($stmt == false){
		die('query prepare() failed: ' . htmlspecialchars($db_conn->error));
	}
	//binding parameters
	$ret = $stmt->bind_param('ssssssdsssddddssdddddsdsds', $customer_name, $customer_mailing_address, $customer_phone_number, $customer_email, $electric_service_account_number, $electric_service_meter_number, $applying_for_net_metering, $a_manufacturer, $a_model_number, $a_ac_power_type, $a_testing_standards_cec, $a_testing_standards_ul1741, $a_number_of_modules, $a_ac_operating_voltage, $b_inverter_manufacturer, $b_inverter_module_number, $b_inverter_power_rating, $b_number_of_inverter_units, $b_ac_output_voltage, $b_solar_panel_ac_output_rating, $b_number_of_solar_pv_panels, $b_ac_power_type, $b_ul1741_standard_testing, $b_certified_testing_record_number_ul1741, $b_ul1703_standard_testing, $b_certified_testing_record_number_ul1703);
	if ($ret == false){
		die('bind_param() failed: ' . htmlspecialchars($stmt->error));
	}	
	//execute query
	$ret = $stmt->execute(); 
	if ($ret == false){
		die('execute() failed: ' . htmlspecialchars($stmt->error));
	}	
	//printf("%d Row inserted.\n", $stmt->affected_rows);
	//close all connection
	$stmt->close();
	$db_conn->close();
	
	//if everything went through successfully
	echo "<font color='red'>Your application submitted!</font> Thank you.";
	
}
?>
</td></tr></table>
</body>
</html>