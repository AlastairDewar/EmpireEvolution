<?PHP
class Navigation extends Player
{
function home(){
Echo('<div id="Menu"><div id="scrollTop">&nbsp;</div><div id="MenuContent"><br/>
			<p><h1>Welcome to Empire Evolution!</h1></p>
			<p>Empire Evolution is a strategic empire simulation game with thousands of players across the world competing with each other simultaneously. All you need to play is a standard web browser.</p>
			<p style="font-size:15px;"><a href="?Page=Login">Login</a> // <a href="?Page=Register">Register</a> // <a href="?Page=About">About</a> // <a href="?Page=Screenshots">Screenshots</a> // <a href="./Forums/">Forums</a><br/><a href="?Page=News">News</a></p>');
			if(isset($_SESSION[UID]) && isset($_SESSION[UID2])){Echo('<p><a href="./Game/">Get playing!</a></p>');}
			Echo('<p style="font-size:12px; top:15px; position:relative;"><a href="?Page=TermsAndConditions">Terms &amp; Conditions</a> || <a href="?Page=PrivacyPolicy">Privacy Policy</a></p>
			<p style="font-size:12px;">Empire Evolution was created and developed by <a href="http://www.alastairdewar.co.uk">Alastair Dewar</a>.</p><br/>
</div><div id="scrollBottom">&nbsp;</div></div>');}
function about(){
Echo('<div id="Menu"><div id="scrollTop">&nbsp;</div><div id="MenuContent"><br/>
			<p><h1>About Empire Evolution!</h1></p>
			<p style="font-size:12px;"><i>After the Great War all the people of Kolarian had retreated to their own empires as they recovered from the mass losses they suffered.rn As no empire had any power left there was peace as no one had any large amount of army strength to wage a war, and so all the empires rnlived in peace, although no contact was made of each other. rn After many years of prosperity the kings of each empire began to grow old and eventually die, leaving their lands and riches to their heirs.rn These young and naive kings had decided that their fathers ideas of peace had blinded them of the truth - that the other kings were amassing rnan army to once again launch an attack for more land. rn As each warmongering king had the same idea they started to raise an army to conquer the lands of their enemies. And thus the begining of the next Great War was started...</i></p>
			<p style="font-size:14px;">Empire Evolution is a browser-based game which is written using the programming paradigm object-orientated programming PHP and MySQL.</p>
			<br/>
</div><div id="scrollBottom">&nbsp;</div></div>');}
function news($UID = null){
if($UID != null){
$Data = mysql_fetch_array(mysql_query("SELECT * FROM News WHERE UID = '".$UID."' AND Visible='1' ORDER BY UID DESC LIMIT 1;")) or die(error('Cannot gather news data.'));
}else{
$Data = mysql_fetch_array(mysql_query("SELECT * FROM News WHERE Visible = '1' ORDER BY UID DESC LIMIT 1;")) or die(error('Cannot gather news data.'));}
$Author = mysql_fetch_array(mysql_query("SELECT * FROM Player WHERE ID = '".$Data[AuthorID]."' ORDER BY ID DESC LIMIT 1;")) or die(error('Cannot gather news author data.'));
Echo('<div id="Menu"><div id="scrollTop">&nbsp;</div><div id="MenuContent"><br/>
		<p><b>'.$Data[Title].'</b></p>
		<p>'.$Data[PostDate].'</p>
		<p style="font-size:12px;">'.$Data[Content].'<br/>by <b>'.$Author[Username].'</b></p>
		<p><a href="?NewsArticle='.$Data[UID].'"><img alt="Link" src="'.$Settings->WebsiteAddress.'images/icons/link.png"/>&nbsp;Link</a>&nbsp;&nbsp;&nbsp;<a href="?NewsComments='.$Data[UID].'"><img alt="Comments" src="'.$Settings->WebsiteAddress.'images/icons/comments.png"/>&nbsp;Comments</a></p>
<br/></div><div id="scrollBottom">&nbsp;</div></div>');}
function login(){
if(isset($_SESSION[UID]) && $_SESSION[UID] != null){die(error('You are already logged in.'));}else{
if($_POST[Login])
{
	if(isset($_POST[Username]) && $_POST[Username] != null){
		if(isset($_POST[Password]) && $_POST[Password] != null){
			if(isset($_POST[RobotPrevention]) && $_POST[RobotPrevention] != null){
			if(strlen($_POST[Username]) < 3 || strlen($_POST[Username]) > 12)
			{die(error('Username should be between 3 characters and 12 characters.'));}else{
			if(strlen($_POST[Username]) < 6 || strlen($_POST[Username]) >25)
			{die(error('Password should be between 6 characters and 25 characters.'));}else{
			if(validUsernamePassword($_POST[Username],$_POST[Password])){
			if(strcmp($_SESSION[RobotPrevention], md5(strtolower($_POST[RobotPrevention]))) == 0){
			$User = mysql_fetch_array(mysql_query("SELECT * FROM Player WHERE Username='".usernameFormat($_POST[Username])."' LIMIT 1;"));
			#setcookie('UID',$User[ID],time()+60*60*24*30);
			#setcookie('UID2',$User[Password],time()+60*60*24*30);
			$_SESSION['UID'] = $User[ID];
			$_SESSION['UID2'] = $User[Password];
			Echo('<div id="Menu"><div id="scrollTop">&nbsp;</div><div id="MenuContent"><br/>
		<p><h1>Empire Evolution Login</h1></p>
		<p>Thank you for logging in '.usernameFormat($_POST[Username]).'.</p>
					<br/></div><div id="scrollBottom">&nbsp;</div></div>');
			}else{
			die(error('Robot Prevention code is incorrect.'));}
			}else{
			die(error('Username or Password contains invalid characters.'));}
			}}
			}else{
			die(error('Robot Prevention field has no value.'));}}
		else{
		die(error('Password field has no value.'));}}
	else{
	die(error('Username field has no value.'));}
}else{
Echo('<div id="Menu"><div id="scrollTop">&nbsp;</div><div id="MenuContent"><br/>
		<p><h1>Empire Evolution Login</h1></p>
		<p><form action="" method="post">Username<br/><input type="text" name="Username" value=""/><br/><br/>Password<br/><input type="password" name="Password" value=""/><br/><br/>Robot Prevention<br/><img src="Captcha.php" alt="Please refresh to view this image."/><br/><input type="text" size="5" name="RobotPrevention" value=""/><br/><br/><input type="submit" name="Login" value="Login"/>&nbsp;&nbsp;&nbsp;<input type="reset" name="Reset" value="Reset"/></form></p>
<br/></div><div id="scrollBottom">&nbsp;</div></div>');
}}}
function register(){
Echo('<div id="Menu"><div id="scrollTop">&nbsp;</div><div id="MenuContent"><br/>
		<p><h1>Empire Evolution Registration</h1></p>
		<p><form action="" method="post">Username<br/>
		<input type="text" name="Username" value=""/><br/><br/>Password<br/>
		<input type="password" name="Password" value=""/><br/><br/>Password <div style="font-size:10px;display: inline;">(Confirmation)</div><br/>
		<input type="password" name="Password2" value=""/><br/>Email<br/>
		<input type="text" name="Email" value=""/><br/><br/>Email <div style="font-size:10px;display: inline;">(Confirmation)</div><br/>
		<input type="text" name="Email2" value=""/><br/><br/>Birthday<br />
		<select name="Day"><option value="">Day</option>');
		$x=1;
		while($x < 31){Echo('<option value="'.$x.'">'.$x.'</option>');$x++;}
		Echo('</select>&nbsp;<select name="Month"><option>Month</option><option value="1">January</option><option value="2">February</option><option value="3">March</option value="4"><option>April</option><option value="5">May</option><option value="6">June</option><option value="7">July</option><option value="8">August</option><option value="9">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select><select name="Year"><option value="">Year</option>');
		    $year_built_min = date("Y")-65;
			$year_built_max = date("Y")-5;
		foreach (range($year_built_max, $year_built_min) as $year) {Echo('<option>'.$year.'</option>');}
		Echo('</select><br/><br/>Location<br/><select name="Location">
<option value="US">United States</option>
<option value="CA">Canada</option>
<option value="AD">Andorra</option>
<option value="AF">Afghanistan</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AI">Anguilla</option>
<option value="AL">Albania</option>
<option value="AM">Armenia</option>
<option value="AN">Netherlands Antilles</option>
<option value="AO">Angola</option>
<option value="AQ">Antarctica</option>
<option value="AR">Argentina</option>
<option value="AS">American Samoa</option>
<option value="AT">Austria</option>
<option value="AU">Australia</option>
<option value="AW">Aruba</option>
<option value="AX">Aland Islands</option>
<option value="AZ">Azerbaijan</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BB">Barbados</option>
<option value="BD">Bangladesh</option>
<option value="BE">Belgium</option>
<option value="BF">Burkina Faso</option>
<option value="BG">Bulgaria</option>
<option value="BH">Bahrain</option>
<option value="BI">Burundi</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BN">Brunei Darussalam</option>
<option value="BO">Bolivia</option>
<option value="BR">Brazil</option>
<option value="BS">Bahamas</option>
<option value="BT">Bhutan</option>
<option value="BV">Bouvet Island</option>
<option value="BW">Botswana</option>
<option value="BY">Belarus</option>
<option value="BZ">Belize</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CD">Democratic Republic of the Congo</option>
<option value="CF">Central African Republic</option>
<option value="CG">Congo</option>
<option value="CH">Switzerland</option>
<option value="CI">Cote D\'Ivoire (Ivory Coast)</option>
<option value="CK">Cook Islands</option>
<option value="CL">Chile</option>
<option value="CM">Cameroon</option>
<option value="CN">China</option>
<option value="CO">Colombia</option>
<option value="CR">Costa Rica</option>
<option value="CS">Serbia and Montenegro</option>
<option value="CU">Cuba</option>
<option value="CV">Cape Verde</option>
<option value="CX">Christmas Island</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DE">Germany</option>
<option value="DJ">Djibouti</option>
<option value="DK">Denmark</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="DZ">Algeria</option>
<option value="EC">Ecuador</option>
<option value="EE">Estonia</option>
<option value="EG">Egypt</option>
<option value="EH">Western Sahara</option>
<option value="ER">Eritrea</option>
<option value="ES">Spain</option>
<option value="ET">Ethiopia</option>
<option value="FI">Finland</option>
<option value="FJ">Fiji</option>
<option value="FK">Falkland Islands (Malvinas)</option>
<option value="FM">Federated States of Micronesia</option>
<option value="FO">Faroe Islands</option>
<option value="FR">France</option>
<option value="FX">France, Metropolitan</option>
<option value="GA">Gabon</option>
<option value="GB">Great Britain (UK)</option>
<option value="GD">Grenada</option>
<option value="GE">Georgia</option>
<option value="GF">French Guiana</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GL">Greenland</option>
<option value="GM">Gambia</option>
<option value="GN">Guinea</option>
<option value="GP">Guadeloupe</option>
<option value="GQ">Equatorial Guinea</option>
<option value="GR">Greece</option>
<option value="GS">S. Georgia and S. Sandwich Islands</option>
<option value="GT">Guatemala</option>
<option value="GU">Guam</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HK">Hong Kong</option>
<option value="HM">Heard Island and McDonald Islands</option>
<option value="HN">Honduras</option>
<option value="HR">Croatia (Hrvatska)</option>
<option value="HT">Haiti</option>
<option value="HU">Hungary</option>
<option value="ID">Indonesia</option>
<option value="IE">Ireland</option>
<option value="IL">Israel</option>
<option value="IN">India</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="IQ">Iraq</option>
<option value="IR">Iran</option>
<option value="IS">Iceland</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JO">Jordan</option>
<option value="JP">Japan</option>
<option value="KE">Kenya</option>
<option value="KG">Kyrgyzstan</option>
<option value="KH">Cambodia</option>
<option value="KI">Kiribati</option>
<option value="KM">Comoros</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="KP">Korea (North)</option>
<option value="KR">Korea (South)</option>
<option value="KW">Kuwait</option>
<option value="KY">Cayman Islands</option>
<option value="KZ">Kazakhstan</option>
<option value="LA">Laos</option>

<option value="LB">Lebanon</option>
<option value="LC">Saint Lucia</option>
<option value="LI">Liechtenstein</option>
<option value="LK">Sri Lanka</option>
<option value="LR">Liberia</option>
<option value="LS">Lesotho</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="LV">Latvia</option>

<option value="LY">Libya</option>
<option value="MA">Morocco</option>
<option value="MC">Monaco</option>
<option value="MD">Moldova</option>
<option value="MG">Madagascar</option>
<option value="MH">Marshall Islands</option>
<option value="MK">Macedonia</option>
<option value="ML">Mali</option>
<option value="MM">Myanmar</option>

<option value="MN">Mongolia</option>
<option value="MO">Macao</option>
<option value="MP">Northern Mariana Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MS">Montserrat</option>
<option value="MT">Malta</option>
<option value="MU">Mauritius</option>
<option value="MV">Maldives</option>

<option value="MW">Malawi</option>
<option value="MX">Mexico</option>
<option value="MY">Malaysia</option>
<option value="MZ">Mozambique</option>
<option value="NA">Namibia</option>
<option value="NC">New Caledonia</option>
<option value="NE">Niger</option>
<option value="NF">Norfolk Island</option>
<option value="NG">Nigeria</option>

<option value="NI">Nicaragua</option>
<option value="NL">Netherlands</option>
<option value="NO">Norway</option>
<option value="NP">Nepal</option>
<option value="NR">Nauru</option>
<option value="NU">Niue</option>
<option value="NZ">New Zealand (Aotearoa)</option>
<option value="OM">Oman</option>
<option value="PA">Panama</option>

<option value="PE">Peru</option>
<option value="PF">French Polynesia</option>
<option value="PG">Papua New Guinea</option>
<option value="PH">Philippines</option>
<option value="PK">Pakistan</option>
<option value="PL">Poland</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="PN">Pitcairn</option>
<option value="PR">Puerto Rico</option>

<option value="PS">Palestinian Territory</option>
<option value="PT">Portugal</option>
<option value="PW">Palau</option>
<option value="PY">Paraguay</option>
<option value="QA">Qatar</option>
<option value="RE">Reunion</option>
<option value="RO">Romania</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>

<option value="SA">Saudi Arabia</option>
<option value="SB">Solomon Islands</option>
<option value="SC">Seychelles</option>
<option value="SD">Sudan</option>
<option value="SE">Sweden</option>
<option value="SG">Singapore</option>
<option value="SH">Saint Helena</option>
<option value="SI">Slovenia</option>
<option value="SJ">Svalbard and Jan Mayen</option>

<option value="SK">Slovakia</option>
<option value="SL">Sierra Leone</option>
<option value="SM">San Marino</option>
<option value="SN">Senegal</option>
<option value="SO">Somalia</option>
<option value="SR">Suriname</option>
<option value="ST">Sao Tome and Principe</option>
<option value="SV">El Salvador</option>
<option value="SY">Syria</option>

<option value="SZ">Swaziland</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TD">Chad</option>
<option value="TF">French Southern Territories</option>
<option value="TG">Togo</option>
<option value="TH">Thailand</option>
<option value="TJ">Tajikistan</option>
<option value="TK">Tokelau</option>
<option value="TL">Timor-Leste</option>

<option value="TM">Turkmenistan</option>
<option value="TN">Tunisia</option>
<option value="TO">Tonga</option>
<option value="TP">East Timor</option>
<option value="TR">Turkey</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TV">Tuvalu</option>
<option value="TW">Taiwan</option>
<option value="TZ">Tanzania</option>

<option value="UA">Ukraine</option>
<option value="UG">Uganda</option>
<option value="AE">United Arab Emirates</option>
<option value="UK">United Kingdom</option>
<option value="UM">United States Minor Outlying Islands</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VA">Vatican City State (Holy See)</option>
<option value="VC">Saint Vincent and the Grenadines</option>

<option value="VE">Venezuela</option>
<option value="VG">Virgin Islands (British)</option>
<option value="VI">Virgin Islands (U.S.)</option>
<option value="VN">Viet Nam</option>
<option value="VU">Vanuatu</option>
<option value="WF">Wallis and Futuna</option>
<option value="WS">Samoa</option>
<option value="YE">Yemen</option>
<option value="YT">Mayotte</option>

<option value="ZA">South Africa</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>
    </select><br/><br/>Robot Prevention<br/>
		<img src="Captcha.php" alt="Please refresh to view this image."/><br/>
		<input type="text" size="5" name="RobotPrevention" value=""/><br/><br/>
		I agree to the <a href="?Page=TermsAndConditions">Terms and Conditions</a> and <a href="?Page=PrivacyPolicy">Privacy Policy</a> for playing Empire Evolution<br/><input type="checkbox" name="PolicyCheck"/><br/><br/>
		<input type="submit" name="Login" value="Login"/>&nbsp;&nbsp;&nbsp;
		<input type="reset" name="Reset" value="Reset"/></form></p>
<br/></div><div id="scrollBottom">&nbsp;</div></div>');}
function screenshots(){
Echo('<div id="Menu"><div id="scrollTop">&nbsp;</div><div id="MenuContent"><br/>
			<p><h1>Empire Evolution Screenshots</h1></p>
			<p>Empire Evolution screenshots cannot be found at present due to the game still being in the development phase.</p><br/></div><div id="scrollBottom">&nbsp;</div></div>');}
}
?>