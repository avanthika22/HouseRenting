Prerequisites
1.	Install XAMPP web server
2.	Any Editor (Preferably VS Code or Sublime Text)
3.	Any web browser with the latest version

Languages and Technologies used
1.	HTML5/CSS3
2.	JavaScript (to create dynamically updating content)
3.	Bootstrap (An HTML, CSS, and JS library)
4.	XAMPP (A web server by Apache Friends)
5.	Php
6.	MySQL (An RDBMS that uses SQL)

SOFTWARES USED
•	XAMPP was installed on the Windows machine and APACHE Server and MySQL were initialized. And, files were built inside C:\xampp\htdocs\House_Renting\db
•	VS Code 2022 version was used as a text editor.
•	Microsoft Edge was used to run the project (localhost/House_Renting was used as the url)


Steps to run a project 
Open the Xampp application and run Apache and Mysql 
Then it will be redirect to Microsoft edge or chrome 
Open a new tab and type the following URL HOUSE RENT this will redirect to the following page

 
Here we have two logins
	Admin login

1.	Admin has the following access 

	Services
	Properties
	Individual
	Apartment
	Gated community
	Individual bookings
	Apartment bookings
	Gated Bookings
	Technician
	View complaints
	Service History
	Parking Request
	Review


Complaints that are completed can be viewed in the service history
All the rental history can view here by the admin 


	 Resident Login

1.	Resident has the following access 
	Book Complaint
	View complaint Status
	Pay Rent
	Request for Parking
	Parking Status
	Review


A resident can make a complaint by y filling in the following details
After booking the complaint that can be viewed under view complaints
A resident can pay the rent by moving to the pay rent tab. The rental history can be viewed by the admin.
Making a parking request by a resident.
Parking lot assigned details can be viewed by the resident in the view parking status. 
The resident can provide the review that can be viewed by the admin.


DEPENDENCIES:

INDIVIDAUL

IND_ID->IND_TYPE
IND_ID->IND_ADD
IND_ID->IND_RENT
IND_ID->PROPERTY_ID

APARTMENT

A_ID->A_TYPE
A_ID->A_ADD
A_ID->A_RENT
A_ID->PROPERTY_ID

GATED_COMMUNITY

G_ID->G_TYPE
G_ID->G_ADD
G_ID->G_RENT
G_ID->PROPERTY_ID

PROPERTY_DETAILS

PROPERTY_ID->APT_NAME
PROPERTY_ID->LOCATION
PROPERTY_ID->MAIL_ID
PROPERTY_ID->MOBILE_NUM
PROPERTY_ID->SERVICES
PROPERTY_ID->APPLICATION_ID

PROPERTY_SERVICES

PROPERTY_SERVICES_ID-> PROPERTY_ID
PROPERTY_SERVICES_ID-> SERVICES_ID

APPLICANT

APP_ID ->APP_NAME
APP_ID->APP_MOBILE
APP_ID->APP_EMAIL
APP_ID->IND_ID
APP_ID->A_ID
APP_ID->G_ID

SERVICES

SERVICES_ID-> SERVICES_NAME
SERVICES_ID->RESIDENT_ID


APPLICATION_FORM

APPLICATION_ID->APPLICATION_NAME
APPLICATION_ID->ID_PROOF
APPLICATION_ID->IMGTYP
APPLICATION_ID->VTYPE
APPLICATION_ID->APPLICATION_MAIL
APPLICATION_ID->PASSWORD
APPLICATION_ID->APPLICATION_MOBILE
APPLICATION_ID->APPLICATION_GENDER
APPLICATION_ID->LEASING
APPLICATION_ID->PAYMENT
APPLICATION_ID->IID
APPLICATION_ID->ADMIN_ID

ADMIN_COMPLAINTS

ADMIN_COMPLAINTS_ID->COMPLAINTS_ID
ADMIN_COMPLAINTS_ID->ADMIN_ID

COMPLAINT_BOOKING

COMPLAINTS_ID->COMPLAINTS_TYPE
COMPLAINTS_ID->DESCRIPTION
COMPLAINTS_ID->PRIORITY
COMPLAINTS_ID->RESIDENTEMAIL
COMPLAINTS_ID->TID
COMPLAINTS_ID->STATUS
COMPLAINTS_ID->RESIDENT_ID

RESIDENT_REVIEW

RESIDENT_REVIEW_ID->RESIDENT_ID
RESIDENT_REVIEW_ID->RESIDENT_NAME
RESIDENT_REVIEW_ID->DESCRIPTION

PAYMENT

PAYMENTID->AMOUNT
PAYMENTID->PAYMENTTYPE
PAYMENTID->BILLINGADDRESS
PAYMENTID->RESIDENTEMAIL
PAYMENTID->RESIDENT_ID

RENTAL_HISTORY

RESIDENT_ID->PAID_DATE
RESIDENT_ID->AMOUNT
RESIDENT_ID->TAXES
RESIDENT_ID->TOTAL




ADMIN_RENTAL

ADMIN_RENTAL_ID->RESIDENT_ID
ADMIN_RENTAL_ID->ADMIN_NAME

PROPERTY

PROPERTY_ID->PROPERTY_TYPE
PROPERTY_ID->EMAIL
PROPERTY_ID->MOBILE
PROPERTY_ID->ADMIN_ID

ADMIN_PARKING

ADMIN_PARKING_ID->PARKINGLOTID
ADMIN_PARKING_ID->ADMIN_NAME

PARKING

PARKINGLOTID->PID
PARKINGLOTID->RESIDENTMAIL

RESIDENT_LOGIN

RESIDENT_ID->PASSOWRD
RESIDENT_ID->PARKINGLOTID

ADMIN_LOGIN

ADMIN_ID->PASSWORD
ADMIN_ID->USERNAME
ADMIN_ID->SERVICE_ID

ADMIN

ADMIN_ID->ADMIN_NAME
ADMIN_ID->ADMIN_MAIL
ADMIN_ID->ADMIN_DOB
ADMIN_ID->ADMIN_ADD
ADMIN_ID->ADMIN_GENDER

RESIDENT

RESIDENT_ID->RESIDENT_NAME
RESIDENT_ID->RESIDENT_EMAIL
RESIDENT_ID->RESIDENT_MOBILE
RESIDENT_ID->ADMIN_ID

ADMIN_SERVICES

ADMIN_SERVICES_ID->ADMIN_ID
ADMIN_SERVICES_ID->SERVICE_ID



TECHNICIAN

TECHNICIAN_ID->TECHNICIAN_NAME
TECHNICIAN_ID->TECHNICIAN_MAIL
TECHNICIAN_ID->TECHNICIAN_ADDRESS
TECHNICIAN_ID->SERVICES_PROVIDED
TECHNICIAN_ID->SERVICE_ID
TECHNICIAN_ID->WORKINGHOURS

SERVICE_HISTORY

SERVICE_ID->SERVICE_NAME
SERVICE_ID->TECHNICIAN_NAME

PAY

TECHNICIAN_ID->PAID_AMOUNT
TECHNICIAN_ID->DATE_OF_PAYMENT
TECHNICIAN_ID->TYPE_OF_PAYMENT

Queries
Admin Table
	SELECT * FROM `admin` WHERE 1
	SELECT `admin_name`, `admin_mail`, `admin_dob`, `admin_add`, `admin_gender` FROM `admin` WHERE 1
	INSERT INTO `admin`(`admin_name`, `admin_mail`, `admin_dob`, `admin_add`, `admin_gender`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
	UPDATE `admin` SET `admin_name`=[value-1],`admin_mail`=[value-2],`admin_dob`=[value-3],`admin_add`=[value-4],`admin_gender`=[value-5] WHERE 1
	DELETE FROM `admin` WHERE 0

Admin_Login Table
	SELECT * FROM `admin_login` WHERE 1
	SELECT `admin_id`, `password`, `username` FROM `admin_login` WHERE 1
	INSERT INTO `admin_login`(`admin_id`, `password`, `username`) VALUES ([value-1],[value-2],[value-3])
	UPDATE `admin_login` SET `admin_id`=[value-1],`password`=[value-2],`username`=[value-3] WHERE 1
	DELETE FROM `admin_login` WHERE 0

Apartment Table
	SELECT * FROM `apartment` WHERE 1
	SELECT `a_id`, `a_type`, `a_add`, `a_rent`, `pid` FROM `apartment` WHERE 1
	INSERT INTO `apartment`(`a_id`, `a_type`, `a_add`, `a_rent`, `pid`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
	UPDATE `apartment` SET `a_id`=[value-1],`a_type`=[value-2],`a_add`=[value-3],`a_rent`=[value-4],`pid`=[value-5] WHERE 1
	DELETE FROM `apartment` WHERE 0

Applicant Individual Table
	SELECT * FROM `applicant` WHERE 1
	SELECT `app_id`, `app_name`, `app_mobile`, `app_email` FROM `applicant` WHERE 1
	INSERT INTO `applicant`(`app_id`, `app_name`, `app_mobile`, `app_email`) VALUES ([value-1],[value-2],[value-3],[value-4])
	UPDATE `applicant` SET `app_id`=[value-1],`app_name`=[value-2],`app_mobile`=[value-3],`app_email`=[value-4] WHERE 1
	DELETE FROM `applicant` WHERE 0

Applicant Appartment Table
	SELECT * FROM `application_form` WHERE 1
	SELECT `application_id`, `application_name`, `id_proff`, `imgType`, `vtype`, `application_mail`, `password`, `application_mobile`, `application_gender`, `leasing`, `payment`, `iid`, `Status` FROM `application_form` WHERE 1
	INSERT INTO `application_form`(`application_id`, `application_name`, `id_proff`, `imgType`, `vtype`, `application_mail`, `password`, `application_mobile`, `application_gender`, `leasing`, `payment`, `iid`, `Status`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13])
	UPDATE `application_form` SET `application_id`=[value-1],`application_name`=[value-2],`id_proff`=[value-3],`imgType`=[value-4],`vtype`=[value-5],`application_mail`=[value-6],`password`=[value-7],`application_mobile`=[value-8],`application_gender`=[value-9],`leasing`=[value-10],`payment`=[value-11],`iid`=[value-12],`Status`=[value-13] WHERE 1
	DELETE FROM `application_form` WHERE 0

Applicant Gated Community Table
	SELECT * FROM `application_form1` WHERE 1
	SELECT `application_id`, `application_name`, `id_proff`, `imgType`, `vtype`, `application_mail`, `password`, `application_mobile`, `application_gender`, `leasing`, `payment`, `iid`, `Status` FROM `application_form1` WHERE 1
	INSERT INTO `application_form1`(`application_id`, `application_name`, `id_proff`, `imgType`, `vtype`, `application_mail`, `password`, `application_mobile`, `application_gender`, `leasing`, `payment`, `iid`, `Status`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13])
	UPDATE `application_form1` SET `application_id`=[value-1],`application_name`=[value-2],`id_proff`=[value-3],`imgType`=[value-4],`vtype`=[value-5],`application_mail`=[value-6],`password`=[value-7],`application_mobile`=[value-8],`application_gender`=[value-9],`leasing`=[value-10],`payment`=[value-11],`iid`=[value-12],`Status`=[value-13] WHERE 1
	DELETE FROM `application_form1` WHERE 0

Complaint Booking Table
	SELECT * FROM `complaint_booking` WHERE 1
	SELECT `complaint_id`, `complaint_type`, `description`, `priority`, `ResidentEmail`, `Tid`, `status` FROM `complaint_booking` WHERE 1
	INSERT INTO `complaint_booking`(`complaint_id`, `complaint_type`, `description`, `priority`, `ResidentEmail`, `Tid`, `status`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])
	UPDATE `complaint_booking` SET `complaint_id`=[value-1],`complaint_type`=[value-2],`description`=[value-3],`priority`=[value-4],`ResidentEmail`=[value-5],`Tid`=[value-6],`status`=[value-7] WHERE 1
	DELETE FROM `complaint_booking` WHERE 0

Gated community Table
	SELECT * FROM `gated_community` WHERE 1
	SELECT `g_id`, `g_type`, `g_add`, `g_rent`, `pid` FROM `gated_community` WHERE 1
	INSERT INTO `gated_community`(`g_id`, `g_type`, `g_add`, `g_rent`, `pid`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
	UPDATE `gated_community` SET `g_id`=[value-1],`g_type`=[value-2],`g_add`=[value-3],`g_rent`=[value-4],`pid`=[value-5] WHERE 1
	DELETE FROM `gated_community` WHERE 0

Individual Table
	SELECT * FROM `individaul` WHERE 1
	SELECT `ind_id`, `ind_type`, `ind_add`, `ind_rent`, `property_id` FROM `individaul` WHERE 1
	INSERT INTO `individaul`(`ind_id`, `ind_type`, `ind_add`, `ind_rent`, `property_id`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
	UPDATE `individaul` SET `ind_id`=[value-1],`ind_type`=[value-2],`ind_add`=[value-3],`ind_rent`=[value-4],`property_id`=[value-5] WHERE 1
	DELETE FROM `individaul` WHERE 0

Parking Table
	SELECT * FROM `parking` WHERE 1
	SELECT `pid`, `residentemail`, `vehiclenumber`, `parkingLotid` FROM `parking` WHERE 1
	INSERT INTO `parking`(`pid`, `residentemail`, `vehiclenumber`, `parkingLotid`) VALUES ([value-1],[value-2],[value-3],[value-4])
	UPDATE `parking` SET `pid`=[value-1],`residentemail`=[value-2],`vehiclenumber`=[value-3],`parkingLotid`=[value-4] WHERE 1
	DELETE FROM `parking` WHERE 0

Pay Table
	SELECT * FROM `pay` WHERE 1
	SELECT `techinican_id`, `paid_amount`, `date_of_payment`, `type_of_payment` FROM `pay` WHERE 1
	INSERT INTO `pay`(`techinican_id`, `paid_amount`, `date_of_payment`, `type_of_payment`) VALUES ([value-1],[value-2],[value-3],[value-4])
	UPDATE `pay` SET `techinican_id`=[value-1],`paid_amount`=[value-2],`date_of_payment`=[value-3],`type_of_payment`=[value-4] WHERE 1
	DELETE FROM `pay` WHERE 0

Payment history Table
	SELECT * FROM `payment` WHERE 1
	SELECT `PaymentId`, `Amount`, `PaymentType`, `BillingAddress`, `ResidentEmail` FROM `payment` WHERE 1
	INSERT INTO `payment`(`PaymentId`, `Amount`, `PaymentType`, `BillingAddress`, `ResidentEmail`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
	UPDATE `payment` SET `PaymentId`=[value-1],`Amount`=[value-2],`PaymentType`=[value-3],`BillingAddress`=[value-4],`ResidentEmail`=[value-5] WHERE 1
	DELETE FROM `payment` WHERE 0

Property Table
	SELECT * FROM `property` WHERE 1
	SELECT `property_id`, `property_type`, `email`, `mobile` FROM `property` WHERE 1
	INSERT INTO `property`(`property_id`, `property_type`, `email`, `mobile`) VALUES ([value-1],[value-2],[value-3],[value-4])
	UPDATE `property` SET `property_id`=[value-1],`property_type`=[value-2],`email`=[value-3],`mobile`=[value-4] WHERE 1
	DELETE FROM `property` WHERE 0

Property Details Table
	SELECT * FROM `property_details` WHERE 1
	SELECT `property_id`, `apt_name`, `location`, `mail_id`, `mobile_num`, `services` FROM `property_details` WHERE 1
	INSERT INTO `property_details`(`property_id`, `apt_name`, `location`, `mail_id`, `mobile_num`, `services`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
	UPDATE `property_details` SET `property_id`=[value-1],`apt_name`=[value-2],`location`=[value-3],`mail_id`=[value-4],`mobile_num`=[value-5],`services`=[value-6] WHERE 1
	DELETE FROM `property_details` WHERE 0

Resident Table
	SELECT * FROM `resident` WHERE 1
	SELECT `resident_id`, `resident_name`, `resident_email`, `resident_mobile` FROM `resident` WHERE 1
	INSERT INTO `resident`(`resident_id`, `resident_name`, `resident_email`, `resident_mobile`) VALUES ([value-1],[value-2],[value-3],[value-4])
	UPDATE `resident` SET `resident_id`=[value-1],`resident_name`=[value-2],`resident_email`=[value-3],`resident_mobile`=[value-4] WHERE 1
	DELETE FROM `resident` WHERE 0

Resident Login Table
	SELECT * FROM `resident_login` WHERE 1
	SELECT `resident_id`, `password` FROM `resident_login` WHERE 1
	INSERT INTO `resident_login`(`resident_id`, `password`) VALUES ([value-1],[value-2])
	UPDATE `resident_login` SET `resident_id`=[value-1],`password`=[value-2] WHERE 1
	DELETE FROM `resident_login` WHERE 0

Resident Review Table
	SELECT * FROM `resident_review` WHERE 1
	SELECT * FROM `resident_review` WHERE 1
	INSERT INTO `resident_review`(`resident_id`, `resident_name`, `description`) VALUES ([value-1],[value-2],[value-3])
	UPDATE `resident_review` SET `resident_id`=[value-1],`resident_name`=[value-2],`description`=[value-3] WHERE 1
	DELETE FROM `resident_review` WHERE 0

Review Table
	SELECT * FROM `review` WHERE 1
	SELECT `resident_id`, `resident_name`, `description` FROM `review` WHERE 1
	INSERT INTO `review`(`resident_id`, `resident_name`, `description`) VALUES ([value-1],[value-2],[value-3])
	UPDATE `review` SET `resident_id`=[value-1],`resident_name`=[value-2],`description`=[value-3] WHERE 1
	DELETE FROM `review` WHERE 0

Services Table
	SELECT * FROM `services` WHERE 1
	SELECT `service_id`, `service_name` FROM `services` WHERE 1
	INSERT INTO `services`(`service_id`, `service_name`) VALUES ([value-1],[value-2])
	UPDATE `services` SET `service_id`=[value-1],`service_name`=[value-2] WHERE 1
	DELETE FROM `services` WHERE 0

Services History Table
	SELECT * FROM `service_history` WHERE 1
	SELECT `service_id`, `service_name`, `service_history`, `technician` FROM `service_history` WHERE 1
	INSERT INTO `service_history`(`service_id`, `service_name`, `service_history`, `technician`) VALUES ([value-1],[value-2],[value-3],[value-4])
	UPDATE `service_history` SET `service_id`=[value-1],`service_name`=[value-2],`service_history`=[value-3],`technician`=[value-4] WHERE 1

Technician Table
	SELECT * FROM `techinican` WHERE 1
	SELECT `techinican_id`, `techinican_name`, `techinican_mail`, `techinican_address`, `service_provided`, `service_id`, `working_hours` FROM `techinican` WHERE 1
	INSERT INTO `techinican`(`techinican_id`, `techinican_name`, `techinican_mail`, `techinican_address`, `service_provided`, `service_id`, `working_hours`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])
	UPDATE `techinican` SET `techinican_id`=[value-1],`techinican_name`=[value-2],`techinican_mail`=[value-3],`techinican_address`=[value-4],`service_provided`=[value-5],`service_id`=[value-6],`working_hours`=[value-7] WHERE 1
	DELETE FROM `techinican` WHERE 0



























<img width="496" height="517" alt="image" src="https://github.com/user-attachments/assets/53963ac1-9baa-441c-b0e4-12011145f5c7" />
