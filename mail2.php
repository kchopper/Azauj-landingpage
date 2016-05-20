<?php
//Personal Info
$to = "pxkwsfzc@mailparser.io";
$subject = "Azauj registration form";
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



$txt = "Name: ".$Name.  " \nCnic:" .$Cnic.  "\nContact Person:" .$ContactPerson.  
"\nContact Number: " .$ContactNumber. "\nEmail: ".$Email.  "\nAddress:" .$Address.  "\nGender:" .$Gender. "\nAge:" .$Age. 
"\nHeight:" .$Height.  
"\nBeard/Hijabi:" .$Appearence.
"\nJob Title:" .$JobTitle.
"\nIncome:" .$Income.  
  
 "\nDegree:" .$Degree. "\nInstitution:" .$Institution.   
 
    "\nMarital Status:" .$MaritalStatus. "\nNumber Of Children:" .$NoOfChildren. 
    "\nReligious belief:" .$ReligiousBelief. "\nCaste:" .$Caste. "\nNationality:" .$Nationality. "\nCity:" .$City. "\nOwnerShip of House:" .$Owner.
    "\nCountry:" .$Country.    "\n Additional Information:" .$Additional. "\nWilling To Relocate:" .$Relocate.  
    "\nFamily Values:" .$FamiyValues. "\nFamily Type:" .$FamilyType. "\nFamily Status:" .$FamilyStatus. 
    "\nDisabled:" .$Disabled. "\nDisability:" .$Disability. "\nSmoking:" .$Smoking.
    "\nAge From:" .$AgeFrom. "\nAge To:" .$AgeTo. 
    "\nHeight From:" .$HeightFrom. "\nHeight To:" .$HeightTo. "\nEducation:" .$EducationReq. 
    "\nReligious Belief:" .$ReligiousBeliefReq. "\nCaste:" .$CasteReq. "\nNationality:" .$NationalityReq. 
    "\nBeard/Hijabi:" .$AppearenceReq. 
    "\nMarital Status:" .$MaritalStatusReq. "\nNumber Of children:" .$NoOfChildrenReq. "\nSmoking:" .$SmokingReq. 
      "\nCity:" .$CityReq. "\nCountry:" .$CountryReq.
    "\nFamily Values:" .$FamilyValuesReq. "\nFamily Type:" .$FamilyTypeReq. "\nFamily Status:" .$FamilyStatus;
$headers = $Email ;

mail($to, $subject, $txt, $headers);
header('location:index.html');
