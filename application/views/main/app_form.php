<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/application.js"></script> 
<main id="main">
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1" data-aos="fade-up">
                    <div class="shadow-md p-3 bg-white rounded-b-md w-full">
                        <div class="alert alert-success alert-shake" id="success" style='display:none'>
                            <center id="success_msg"><center>
                        </div>
                        <div class="text-center">
                            <p class="font-bold">SILAY SANDIEGO LENDING INVESTOR INC</p>
                            <p class="">Silay City</p>
                            <p class="">Loan/Credit Application</p>
                        </div>
                        <form id='app_form'>
                            <table class="w-full border">
                                <tr>
                                    <td>Current Payslip:</td>
                                    <td><input type="file" name="payslip" id="payslip"></td>
                                </tr>
                                <tr>
                                    <td>Promissory Letter:</td>
                                    <td><input type="file" name="promissory" id="promissory"></td>
                                </tr>
                                <tr>
                                    <td><b>2 Valid ID</b></td>
                                </tr>
                                <tr>
                                    <td>1st ID:</td>
                                    <td><input type="file" name="first" id="first"></td>
                                </tr>
                                <tr>
                                    <td>2nd ID:</td>
                                    <td><input type="file" name="second" id="second"></td>
                                </tr>
                            </table>
                            <table class="w-full border">
                                <tr>
                                    <td colspan='2'>I. Personal Data</td>
                                </tr>
                                <tr>
                                    <td colspan='1'>Name:</td>
                                    <td colspan='1'><input type='text' id='name'></td>
                                    <td colspan='1'>Bithdate:</td>
                                    <td colspan='1'><input type='date' id='bday'></td>
                                    <td colspan='1'>Age:</td>
                                    <td colspan='1'><input type='number' id='age'></td>
                                    <td colspan='1'>Sex:</td>
                                    <td colspan='1'>
                                        <select id='sex'>
                                            <option value="">--Select Gender--</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='1'>Spouse:</td>
                                    <td colspan='1'><input type='text' id='spouse'></td>
                                    <td colspan='1'>No. of Dependents:</td>
                                    <td colspan='1'><input type='text' id='dependents'></td>
                                    <td colspan='1'>No. of Studying:</td>
                                    <td colspan='1'><input type='text' id='studying'></td>
                                </tr>
                                <tr>
                                    <td colspan='1'>Home Address:</td>
                                    <td colspan='3'><textarea style="width:100%" id="home"></textarea></td>
                                    <td colspan='1'>Tel. No.:</td>
                                    <td colspan='1'><input type='text' id='tel_no'></td>
                                </tr>
                                <tr>
                                    <td colspan='1'><input type='radio' id="house_type" value='Own'></td>
                                    <td colspan='1'>Own</td>
                                    <td colspan='1'><input type='radio' id="house_type" value='Rent'></td>
                                    <td colspan='1'>Rent</td>
                                    <td colspan='1'><input type='radio' id="house_type" value='Free'></td>
                                    <td colspan='1'>Use Free</td>
                                    <td colspan='1'>Tin: </td>
                                    <td colspan='1'><input type='text' id='tin'></td>
                                </tr>
                                <tr>
                                    <td colspan='1'>Business Address:</td>
                                    <td colspan='3'><textarea style="width:100%" id="business_address"></textarea></td>
                                    <td colspan='1'>Tel. No.:</td>
                                    <td colspan='1'><input type='text' id='bus_telno'></td>
                                </tr>
                                <tr>
                                    <td colspan='2'>II. Employment</td>
                                </tr>
                                <tr>
                                    <td colspan='1'>Employer/Co:</td>
                                    <td colspan='3'><textarea style="width:100%" id="employer"></textarea></td>
                                    <td colspan='1'>Position:</td>
                                    <td colspan='1'><input type='text' id='position'></td>
                                </tr>
                                <tr>
                                    <td colspan='1'>Nature Business:</td>
                                    <td colspan='3'><textarea style="width:100%" id="nature_business"></textarea></td>
                                    <td colspan='1'>Length of Service:</td>
                                    <td colspan='1'><input type='text' id='length_service'></td>
                                </tr>
                                <tr>
                                    <td colspan='1'>Spouse Employment:</td>
                                    <td colspan='3'><textarea style="width:100%" id="spouse_employment"></textarea></td>
                                    <td colspan='1'>Position:</td>
                                    <td colspan='1'><input type='text' id='spouse_position'></td>
                                </tr>
                                <tr>
                                    <td colspan='1'>Address:</td>
                                    <td colspan='3'><textarea style="width:100%" id="spouse_address"></textarea></td>
                                    <td colspan='1'>Tel. No.:</td>
                                    <td colspan='1'><input type='text' id='spouse_telno'></td>
                                </tr>
                                <tr>
                                    <td colspan='2'>III. Source of Income(Monthly)</td>
                                </tr>
                                <tr class="append" id="append0">
                                    <td colspan='1'>Nature:</td>
                                    <td colspan='3'><textarea style="width:100%" id="nature_source1" class='nature'></textarea></td>
                                    <td colspan='1'>Amount:</td>
                                    <td colspan='1'><input type='text' id='source_amount1' class='amount'></td>
                                    <td colspan='1' class='addmoreappend'>
                                        <input type="text" id="countSource">
                                        <button type='button' class="btn btn-sm btn-primary addSource" id="addSource">+</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='1'>TOTAL:</td>
                                    <td colspan='3'></td>
                                    <td colspan='3'><input type='text'></td>
                                </tr>
                                <tr>
                                    <td colspan='2'>IV. Expenses(Monthly)</td>
                                </tr>
                                <tr>
                                    <td colspan='1'>Food:</td>
                                    <td colspan='1'>Amount:</td>
                                    <td colspan='1'><input type='text' id='food'></td>
                                </tr>
                                <tr>
                                    <td colspan='1'>Water & Light, Tel.:</td>
                                    <td colspan='1'>Amount:</td>
                                    <td colspan='1'><input type='text' id='water'></td>
                                </tr>
                                <tr>
                                    <td colspan='1'>Education:</td>
                                    <td colspan='1'>Amount:</td>
                                    <td colspan='1'><input type='text' id='education'></td>
                                </tr>
                                <tr>
                                    <td colspan='1'>Others:</td>
                                    <td colspan='1'>Amount:</td>
                                    <td colspan='1'><input type='text' id='others'></td>
                                </tr>
                                <tr>
                                    <td colspan='1'>TOTAL:</td>
                                    <td colspan='3'></td>
                                    <td colspan='2'><input type='text'></td>
                                </tr>
                                <tr>
                                    <td colspan='2'>Savings Account With:</td>
                                    <td colspan='1'><input type='text' id='savings_account'></td>
                                    <td colspan='1'>Checking Account With:</td>
                                    <td colspan='1'></td>
                                    <td colspan='1'><input type='text' id='checking_account'></td>
                                </tr>
                                <tr>
                                    <td colspan='2'>V. Credit References</td>
                                </tr>
                                <tr>
                                    <td colspan='1'>Creditor</td>
                                    <td colspan='1'>Address</td>
                                    <td colspan='1'>Original Amount</td>
                                    <td colspan='1'>Loan Balance</td>
                                    <td colspan='1'>Collateral</td>
                                </tr>
                                <tr class="credit" id="credit0">
                                    <td colspan='1'><input type='text' id='creditor1' class='creditor'></td>
                                    <td colspan='1'><input type='text' id='creditor_address1' class='creditor_address'></td>
                                    <td colspan='1'><input type='number' id='original_amount1' class='original_amount'></td>
                                    <td colspan='1'><input type='number' id='loan_balance1' class='loan_balance'></td>
                                    <td colspan='1'><input type='text' id='collateral1' class='collateral'></td>
                                    <td colspan='1' class='addmorecredit'>
                                        <input type="text" id="countCredit">
                                        <button type="button" class="btn btn-sm btn-primary addCredit" id="addCredit">+</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='2'>VI. Personal Reference</td>
                                </tr>
                                <tr>
                                    <td colspan='1'>Name</td>
                                    <td colspan='1'>Address</td>
                                    <td colspan='1'>Employment/Business</td>
                                    <td colspan='1'>Relation</td>
                                </tr>
                                <tr class="personal" id="personal0">
                                    <td colspan='1'><textarea id="personal_name1" class="personal_name"></textarea></td>
                                    <td colspan='1'><textarea id="personal_address1" class="personal_address"></textarea></td>
                                    <td colspan='1'><textarea id="personal_employment1" class="personal_employment"></textarea></td>
                                    <td colspan='1'><textarea id="personal_relation1" class="personal_relation"></textarea></td>
                                    <td colspan='1' class='addmorepersonal'>
                                        <input type="text" id="countPersonal">
                                        <button type="button" class="btn btn-sm btn-primary addPersonal" id="addPersonal">+</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='2'>VII. REAL AND PERSONAL PROPERTIES OWNED</td>
                                </tr>
                                <tr>
                                    <td colspan='1'>KIND</td>
                                    <td colspan='1'>LOCATION</td>
                                    <td colspan='1'>VALUE</td>
                                    <td colspan='1'>ENCUMBRANCE</td>
                                </tr>
                                <tr class="owned" id="owned0">
                                    <td colspan='1'><textarea id="kind1" class="kind"></textarea></td>
                                    <td colspan='1'><textarea id="location1" class="location"></textarea></td>
                                    <td colspan='1'><textarea id="value1" class="value"></textarea></td>
                                    <td colspan='1'><textarea id="encumbrance1" class="encumbrance"></textarea></td>
                                    <td colspan='1'  class='addmoreowned'>
                                        <input type="text" id="countOwned">
                                        <button type="button" class="btn btn-sm btn-primary addOwned" id="addOwned">+</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='1'></td>
                                    <td colspan='2'>Amount of Loan Application:</td>
                                    <td colspan='1'><input type='text' id='loan_amount'></td>
                                </tr>
                                <tr>
                                    <td colspan='1'></td>
                                    <td colspan='2'>Term of Loan:</td>
                                    <td colspan='1'><input type='text' id='loan_term'></td>
                                </tr>
                                <tr>
                                    <td colspan='1'></td>
                                    <td colspan='2'>Collateral(s) Offered:</td>
                                    <td colspan='1'><input type='text' id='collateral_offered'></td>
                                </tr>
                                <tr>
                                    <td colspan='2'></td>
                                    <td colspan='5'>I hereby certify that all the information given in this credit application is true on to my own</td>
                                </tr>
                                <tr>
                                    <td colspan='1'></td>
                                    <td colspan='5'>personal knoweledge , I hereby authorize SILAY SAN DIEGO LENDING INVESTOR, INC. or any of this</td>
                                </tr>
                                <tr>
                                    <td colspan='1'></td>
                                    <td colspan='5'>representative to conduct the required investigation hereon.</td>
                                </tr>
                            </table>
                            <input name="baseurl" id="baseurl" value="<?php echo base_url(); ?>" class="form-control" type="hidden" >
                            <button type="button" class='btn btn-block btn-primary' onclick='proceed_btn()'>Save Application</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->

