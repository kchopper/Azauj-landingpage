<?php 

 $url = 'https://api.sendgrid.com/';
 $user = 'Hassan.syed';
 $pass = 'Azaujpass011';
 //Personal Info

$Name=$_POST['name'];
$Cnic=$_POST['CNIC'];
$ContactPerson=$_POST['contact'];
$ContactNumber=$_POST['number'];
$Email=$_POST['email'];
$Address=$_POST['address'];


//Credentials

$Gender=$_POST['gender'];
$Height=$_POST['height'];
$Appearence=$_POST['appearence'];
$Disabled=$_POST['physically_disabled'];
$Disability=$_POST['disability'];
$Smoking=$_POST['smoking'];
$Age=$_POST['age'];
$Degree=$_POST['education_degree'];
$Institution=$_POST['education_institute'];
$JobTitle=$_POST['job_title'];
$Income=$_POST['job_salary'];
$MaritalStatus=$_POST['marital_status'];
$NoOfChildren=$_POST['marital_status_children'];
$ReligiousBelief=$_POST['religious_belief'];
$Caste=$_POST['caste'];
$Nationality=$_POST['nationality'];
$City=$_POST['current_city'];
$Owner=$_POST['owner'];
$Country=$_POST['current_country'];
$Relocate= $_POST['willing_to_relocate'];
$FamiyValues=$_POST['family_values'];
$FamilyType=$_POST['family_type'];
$FamilyStatus=$_POST['family_status'];
$AboutSiblings=$_POST['about_siblings'];
$AboutParents=$_POST['about_parents'];
$Additional=$_POST['additional_information'];


//Requirments

$AgeFrom=$_POST['age_from'];
$AgeTo=$_POST['age_to'];
$HeightFrom=$_POST['height_from'];
$HeightTo=$_POST['height_to'];
$EducationReq=$_POST['education_req'];
$ReligiousBeliefReq=$_POST['religious_belief_req'];
$CasteReq=$_POST['caste_req'];
$NationalityReq=$_POST['nationality_req'];
$AppearenceReq=$_POST['appearence_req'];
$MaritalStatusReq=$_POST['marital_status_req'];
$NoOfChildrenReq=$_POST['marital_status_children_req'];
$SmokingReq=$_POST['smoking_req'];
$FamilyValuesReq=$_POST['family_values_req'];
$FamilyTypeReq=$_POST['family_type_req'];
$FamilyStatusReq=$_POST['family_status_req'];
$CityReq=$_POST['current_city_req'];
$CountryReq=$_POST['current_country_req'];

 $params = array(
      'api_user' => $user,
      'api_key' => $pass,
      'to' => 'pxkwsfzc@mailparser.io',
      'subject' => 'Azauj Requirments',
      'html' => "Name: ".$Name.  " \nCnic:" .$Cnic.  "\nContact Person:" .$ContactPerson.  
"\nContact Number: " .$ContactNumber. "\nEmail: ".$Email.  "\nAddress:" .$Address.  "\nGender:" .$Gender. "\nAge:" .$Age. 
"\nHeight:" .$Height.  
"\nBeard/Hijabi:" .$Appearence.
"\nJob Title:" .$JobTitle.
"\nIncome:" .$Income.  
  
 "\nDegree:" .$Degree. "\nInstitution:" .$Institution.   
 
    "\nMarital Status:" .$MaritalStatus. "\nNumber Of Children:" .$NoOfChildren. 
    "\nReligious belief:" .$ReligiousBelief. "\nCaste:" .$Caste. "\nNationality:" .$Nationality. "\nCity:" .$City. "\nOwnerShip of House:" .$Owner.
    "\nCountry:" .$Country. "\nAbout Parents:" .$AboutParents. "\nAbout Siblings:" .$AboutSiblings.   "\n Additional Information:" .$Additional. "\nWilling To Relocate:" .$Relocate.  
    "\nFamily Values:" .$FamiyValues. "\nFamily Type:" .$FamilyType. "\nFamily Status:" .$FamilyStatus. 
    "\nDisabled:" .$Disabled. "\nDisability:" .$Disability. "\nSmoking:" .$Smoking.
    "\nAge From:" .$AgeFrom. "\nAge To:" .$AgeTo. 
    "\nHeight From:" .$HeightFrom. "\nHeight To:" .$HeightTo. "\nEducation:" .$EducationReq. 
    "\nReligious Belief:" .$ReligiousBeliefReq. "\nCaste:" .$CasteReq. "\nNationality:" .$NationalityReq. 
    "\nBeard/Hijabi:" .$AppearenceReq. 
    "\nMarital Status:" .$MaritalStatusReq. "\nNumber Of children:" .$NoOfChildrenReq. "\nSmoking:" .$SmokingReq. 
      "\nCity:" .$CityReq. "\nCountry:" .$CountryReq.
    "\nFamily Values:" .$FamilyValuesReq. "\nFamily Type:" .$FamilyTypeReq. "\nFamily Status:" .$FamilyStatus,
      'text' => 'testing body2',
      'from' => 'hamza.bhinder@azauj.com',
   );

 $request = $url.'api/mail.send.json';
 // Generate curl request
 $session = curl_init($request);
 // Tell curl to use HTTP POST
 curl_setopt ($session, CURLOPT_POST, true);
 // Tell curl that this is the body of the POST
 curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
 // Tell curl not to return headers, but do return the response
 curl_setopt($session, CURLOPT_HEADER, false);
 curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
 // curl_setopt($session, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt ($session, CURLOPT_CAINFO, "Certificate/cacert.pem");  
 // obtain response
 $response = curl_exec($session);
 if (curl_errno($session)) { 
   print curl_error($session); 
 } 
 curl_close($session);
 
 header('location:index.html');
?>