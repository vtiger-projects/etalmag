<?php /* Smarty version Smarty-3.1.7, created on 2015-08-18 15:15:36
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Users/UserSetup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122173565555d34c1876bcb6-56683820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eae4ce41c8a3a2057e68620a1e96c0fbb3efa468' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Users/UserSetup.tpl',
      1 => 1399895722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122173565555d34c1876bcb6-56683820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IS_FIRST_USER' => 0,
    'MODULE' => 0,
    'CURRENCIES' => 0,
    'header' => 0,
    'CURRENT_USER_MODEL' => 0,
    'currency' => 0,
    'LANGUAGES' => 0,
    'language' => 0,
    'TIME_ZONES' => 0,
    'time_zone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55d34c1896c11',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d34c1896c11')) {function content_55d34c1896c11($_smarty_tpl) {?>
<!DOCTYPE html><html><head><title>Vtiger</title><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link REL="SHORTCUT ICON" HREF="layouts/vlayout/skins/images/favicon.ico"><link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.css" type="text/css" media="screen" /><link rel="stylesheet" href="resources/styles.css" type="text/css" media="screen" /><link rel="stylesheet" href="libraries/jquery/select2/select2.css" /><link rel="stylesheet" href="libraries/jquery/posabsolute-jQuery-Validation-Engine/css/validationEngine.jquery.css" /><script type="text/javascript" src="libraries/jquery/jquery.min.js"></script><script type="text/javascript" src="libraries/bootstrap/js/bootstrap-tooltip.js"></script><script type="text/javascript" src="libraries/jquery/select2/select2.min.js"></script><script type="text/javascript" src="libraries/jquery/posabsolute-jQuery-Validation-Engine/js/jquery.validationEngine.js" ></script><script type="text/javascript" src="libraries/jquery/posabsolute-jQuery-Validation-Engine/js/jquery.validationEngine-en.js" ></script><script type="text/javascript">
			jQuery(function(){
				jQuery('select').select2({blurOnChange:true});
				jQuery('[rel="tooltip"]').tooltip();
				jQuery('form').validationEngine({
					prettySelect: true,
					usePrefix: 's2id_',
					autoPositionUpdate: true,
					promptPosition : "topLeft",
					showOneMessage: true
				});
				jQuery('#currency_name_controls').mouseenter(function() {
					jQuery('#currency_name_tooltip').tooltip('show');
				});
				jQuery('#currency_name_controls').mouseleave(function() {
					jQuery('#currency_name_tooltip').tooltip('hide');
				});
			});
		</script><style type="text/css">
			 body { background: #ffffff url('layouts/vlayout/skins/images/usersetupbg.png') no-repeat center top; background-size: 100%; font-size: 14px; }
			.modal-backdrop { opacity: 0.35; }
			.tooltip { z-index: 1055; }
			input, select, textarea { font-size: 14px; }
		</style></head><body><div class="container"><div class="modal-backdrop"></div><form class="form" method="POST" action="index.php?module=Users&action=UserSetupSave"><div class="modal" <?php if (false&&$_smarty_tpl->tpl_vars['IS_FIRST_USER']->value){?>style="width: 700px;"<?php }?>> <div class="modal-header"><h3><?php echo vtranslate('LBL_ALMOST_THERE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><div class="modal-body"><div class="row"><?php if (false&&$_smarty_tpl->tpl_vars['IS_FIRST_USER']->value){?> <div class="span4"><label class="control-label"><strong><?php echo vtranslate('LBL_ABOUT_ME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong> <span class="muted"><?php echo vtranslate('LBL_WE_PROMISE_TO_KEEP_THIS_PRIVATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></label><div class="controls"><input type="text" name="about[phone]" id="phone" placeholder="<?php echo vtranslate('LBL_PHONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" rel="tooltip" title="<?php echo vtranslate('LBL_YOUR_CONTACT_NUMBER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" style="width:250px;"></div><div class="controls"><select name="about[country]" id="country" placeholder="<?php echo vtranslate('LBL_SELECT_COUNTRY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" rel="tooltip" title="<?php echo vtranslate('LBL_WHERE_ARE_YOU_FROM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" style="width:250px;"><option value=""></option><!-- to allow select2 pick placeholder --><option value="Prefer Not to Disclose">Prefer Not to Disclose</option><option value="United States">United States</option><option value="Afghanistan">Afghanistan</option><option value="Africa">Africa</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option><option value="Antilles, Netherlands">Antilles, Netherlands</option><option value="Arabia, Saudi">Arabia, Saudi</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Asia">Asia</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas, The">Bahamas, The</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean T.">British Indian Ocean T.</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Caribbean, the">Caribbean, the</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Central America">Central America</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Congo, Dem. Rep. of the">Congo, Dem. Rep. of the</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote D'Ivoire">Cote D'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor (Timor-Leste)">East Timor (Timor-Leste)</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Europe">Europe</option><option value="European Union">European Union</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Terr.">French Southern Terr.</option><option value="Gabon">Gabon</option><option value="Gambia, the">Gambia, the</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey and Alderney">Guernsey and Alderney</option><option value="Guiana, French">Guiana, French</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guinea, Equatorial">Guinea, Equatorial</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard &amp; McDonald Is.(AU)">Heard &amp; McDonald Is.(AU)</option><option value="Holy See (Vatican)">Holy See (Vatican)</option><option value="Honduras">Honduras</option><option value="Hong Kong, (China)">Hong Kong, (China)</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Ivory Coast (Cote d'Ivoire)">Ivory Coast (Cote d'Ivoire)</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea Dem. People's Rep.">Korea Dem. People's Rep.</option><option value="Korea, (South) Republic of">Korea, (South) Republic of</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao People's Democ. Rep.">Lao People's Democ. Rep.</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao, (China)">Macao, (China)</option><option value="Macedonia, TFYR">Macedonia, TFYR</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Man, Isle of">Man, Isle of</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique (FR)">Martinique (FR)</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte (FR)">Mayotte (FR)</option><option value="Mexico">Mexico</option><option value="Micronesia, Fed. States of">Micronesia, Fed. States of</option><option value="Middle East">Middle East</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar (ex-Burma)">Myanmar (ex-Burma)</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="North America">North America</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oceania">Oceania</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestinian Territory">Palestinian Territory</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn Island">Pitcairn Island</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion (FR)">Reunion (FR)</option><option value="Romania">Romania</option><option value="Russia (Russian Fed.)">Russia (Russian Fed.)</option><option value="Rwanda">Rwanda</option><option value="Sahara, Western">Sahara, Western</option><option value="Saint Barthelemy (FR)">Saint Barthelemy (FR)</option><option value="Saint Helena (UK)">Saint Helena (UK)</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Martin (FR)">Saint Martin (FR)</option><option value="S Pierre &amp; Miquelon(FR)">S Pierre &amp; Miquelon(FR)</option><option value="S Vincent &amp; Grenadines">S Vincent &amp; Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South America">South America</option><option value="S.George &amp; S.Sandwich">S.George &amp; S.Sandwich</option><option value="South Sudan">South Sudan</option><option value="Spain">Spain</option><option value="Sri Lanka (ex-Ceilan)">Sri Lanka (ex-Ceilan)</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard &amp; Jan Mayen Is.">Svalbard &amp; Jan Mayen Is.</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania, United Rep. of">Tanzania, United Rep. of</option><option value="Thailand">Thailand</option><option value="Timor-Leste (East Timor)">Timor-Leste (East Timor)</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Is.">Turks and Caicos Is.</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="US Minor Outlying Isl.">US Minor Outlying Isl.</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican (Holy See)">Vatican (Holy See)</option><option value="Venezuela">Venezuela</option><option value="Viet Nam">Viet Nam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select><div style="padding-top:10px;"></div></div><div class="controls"><select name="about[company_size]" id="company_size" placeholder="<?php echo vtranslate('LBL_COMPANY_SIZE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" style="width:250px;"><option value=""></option><!-- to allow select2 pick placeholder --><option value="Prefer Not to Disclose">Prefer Not to Disclose</option><option value="1">1</option><option value="2 - 3">2 - 3</option><option value="4 - 7">4 - 7</option><option value="8 - 15">8 - 15</option><option value="16 - 25">16 - 25</option><option value="26 - 50">26 - 50</option><option value="51 - 100">51 - 100</option><option value="101 - 250">101 - 250</option><option value="251 - 500">251 - 500</option><option value="501 +">501 +</option></select><div style="padding-top:10px;"></div></div><div class="controls"><select name="about[company_job]" id="company_job" placeholder="<?php echo vtranslate('LBL_JOB_TITLE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" style="width:250px;"><option value=""></option><!-- to allow select2 pick placeholder --><option value="Prefer Not to Disclose">Prefer Not to Disclose</option><option value="CEO/President">CEO/President</option><option value="Chief Officer">Chief Officer</option><option value="Vice President">Vice President</option><option value="Director">Director</option><option value="Manager">Manager</option><option value="Project Manager">Project Manager</option><option value="Specialist">Specialist</option><option value="Consultant">Consultant</option><option value="Employee">Employee</option><option value="Other">Other</option></select><div style="padding-top:10px;"></div></div><div class="controls"><select name="about[department]" id="department" placeholder="<?php echo vtranslate('LBL_DEPARTMENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" style="width:250px;"><option value=""></option><!-- to allow select2 pick placeholder --><option value="Prefer Not to Disclose">Prefer Not to Disclose</option><option value="Administration">Administration</option><option value="Sales">Sales</option><option value="Marketing">Marketing</option><option value="Support/Customer Service">Support/Customer Service</option><option value="Information Technology">Information Technology</option><option value="Finance/Accounting">Finance/Accounting</option><option value="Business Development">Business Development</option><option value="Product Development">Product Development</option><option value="Professional Services">Professional Services</option><option value="Project Management">Project Management</option><option value="Other">Other</option></select><div style="padding-top:10px;"></div></div></div><?php }?><div class="span4"><label class="control-label"><strong>Preferences</strong> <span class="muted"><?php echo vtranslate('LBL_ALL_FIELDS_BELOW_ARE_REQUIRED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><?php if ($_smarty_tpl->tpl_vars['IS_FIRST_USER']->value){?><div class="controls" id="currency_name_controls"><select name="currency_name" id="currency_name" placeholder="<?php echo vtranslate('LBL_BASE_CURRENCY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-errormessage="<?php echo vtranslate('LBL_CHOOSE_BASE_CURRENCY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="validate[required]" style="width:250px;"><option value=""></option><?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_smarty_tpl->tpl_vars['header'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CURRENCIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
 $_smarty_tpl->tpl_vars['header']->value = $_smarty_tpl->tpl_vars['currency']->key;
?><!--Open source fix to select user preferred currency during installation --><option value="<?php echo $_smarty_tpl->tpl_vars['header']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['header']->value==$_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_name')){?>selected<?php }?>><?php echo getTranslatedCurrencyString($_smarty_tpl->tpl_vars['header']->value);?>
(<?php echo $_smarty_tpl->tpl_vars['currency']->value[1];?>
)</option><?php } ?></select>&nbsp;<span rel="tooltip" title="<?php echo vtranslate('LBL_OPERATING_CURRENCY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" id="currency_name_tooltip" class="icon-info-sign"></span><div style="padding-top:10px;"></div></div><?php }?><div class="controls"><select name="lang_name" id="lang_name" style="width:250px;" placeholder="<?php echo vtranslate('LBL_LANGUAGE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-errormessage="<?php echo vtranslate('LBL_CHOOSE_LANGUAGE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="validate[required]"><option value=""></option><?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['header'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LANGUAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['header']->value = $_smarty_tpl->tpl_vars['language']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['header']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['header']->value==$_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('language')){?>selected<?php }?>><?php echo getTranslatedString($_smarty_tpl->tpl_vars['language']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select><div style="padding-top:10px;"></div></div><div class="controls"><select name="time_zone" id="time_zone" style="width:250px;" placeholder="<?php echo vtranslate('LBL_CHOOSE_TIMEZONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-errormessage="<?php echo vtranslate('LBL_CHOOSE_TIMEZONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="validate[required]"><option value=""></option><?php  $_smarty_tpl->tpl_vars['time_zone'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['time_zone']->_loop = false;
 $_smarty_tpl->tpl_vars['header'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TIME_ZONES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['time_zone']->key => $_smarty_tpl->tpl_vars['time_zone']->value){
$_smarty_tpl->tpl_vars['time_zone']->_loop = true;
 $_smarty_tpl->tpl_vars['header']->value = $_smarty_tpl->tpl_vars['time_zone']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['header']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['header']->value==$_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('time_zone')){?>selected<?php }?>><?php echo getTranslatedString($_smarty_tpl->tpl_vars['time_zone']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select><div style="padding-top:10px;"></div></div><div class="controls"><select name="date_format" id="date_format" style="width:250px;" placeholder="<?php echo vtranslate('LBL_DATE_FORMAT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-errormessage="<?php echo vtranslate('LBL_CHOOSE_DATE_FORMAT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="validate[required]"><option value=""></option><option value="dd-mm-yyyy" <?php if ($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('date_format')=="dd-mm-yyyy"){?> selected<?php }?>>dd-mm-yyyy</option><option value="mm-dd-yyyy" <?php if ($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('date_format')=="mm-dd-yyyy"){?> selected<?php }?>>mm-dd-yyyy</option><option value="yyyy-mm-dd" <?php if ($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('date_format')=="yyyy-mm-dd"){?> selected<?php }?>>yyyy-mm-dd</option></select><div style="padding-top:10px;"></div></div></div></div></div><div class="modal-footer"><button class="btn btn-success" type="submit"><?php echo vtranslate('LBL_GET_STARTED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div></form></div></body></html>
<?php }} ?>