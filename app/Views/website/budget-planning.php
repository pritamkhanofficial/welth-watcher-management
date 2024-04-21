<?php
// getPrint($budget);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('component/front/head');
    
    
    
    ?>
    <style>
        .wizard > .content > .body label.error{
            margin-left:0 !important;
        }
    </style>
</head>

<body>
    <?php echo view('component/front/header'); ?>
    <div id="content">
        <div class="slider-sub ">
            <div class="bg-img"> <img src="<?= base_url() ?>front/images/banner/about1.png" alt="banner" /></div>
            <div class="container">
                <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white"
                        href="index-2.html">Home</a><i class="ph ph-caret-double-right text-white"></i>
                    <div class="caption1 text-white">Wealth Score</div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="text-nav">
                            <div class="heading3 text-white">Wealth Score</div>
                            <div class="sub-heading mt-8 text-white fw-400">We perform a full analysis of the client’s
                                website .</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php

        // getPrint($budget);
        ?>
        <div class="container pt-5 pb-5">
            <?php //if (is_null($budget)) { // For Add 
            ?>
            <div class="content">
                <!-- < ?php foreach($data as $key => $value){?> -->
                <form action="" method="post" id="budget-planning-save-form">
                    <input type="hidden" name="form_submit" value="add">
                    <div id="wizard">
                        <h2>BASICS</h2>
                        <section>
                            <div class="heading3 mt-10">The Basics</div>
                            <div class="body3 text-secondary mt-20">Tell us about yourself.</div>
                            <hr>
                            <div class="mb-5 mt-5">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 col-12">
                                        <div class="heading7 hover-text-blue mb-3">Where do you live?</div>
                                            <select required class="w-100 bg-surface caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    name="budget_planning_area">
                                                    <option value="">-- Select Your city or metro area --</option>
                                                    <?php foreach ($getBPA as $key => $row) { ?>
                                                    <option value="<?=$row->id?>" <?= (isset($budget->area_id) == $row->id) ? 'selected' : '' ?>><?=$row->label?></option>
                                                    <?php } ?>
                                                </select>
                                        <div class="body3 text-secondary mt-2">
                                            <i>Select your city or metro area.</i>
                                        </div>

                                        <div class="heading7 hover-text-blue mb-3 mt-3">How many people are in your
                                            household?</div>
                                        <input class="w-100 bg-surface caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            name="household_size" value="<?= (isset($budget->household_size) == '') ? '' : $budget->household_size; ?>" type="number" required placeholder="Number of people" />
                                        <div class="body3 text-secondary mt-2"><i>Enter 1 if you live alone; otherwise,
                                                include yourself, your partner and any dependents.</i></div>

                                        <div class="heading7 hover-text-blue mb-3 mt-3">How old are you?</div>
                                        <input class="w-100 bg-surface caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            name="age" value="<?= (isset($budget->age) == '') ? '' : $budget->age; ?>" type="number" required placeholder="Your age" />
                                        <div class="body3 text-secondary mt-2"><i>In years</i></div>
                                        <div class="form-check mt-5">
                                            <input class="form-check-input" type="checkbox" value="<?= (isset($budget->advertisement_interest) == '') ? '' : $budget->advertisement_interest; ?>"
                                                id="flexCheckDefault" name="advertisement_interest">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Bloomberg may use my information to provide me with advertisements that
                                                may
                                                be of particular interest to me (note if you do not check this box you
                                                will
                                                still receive online advertising)
                                            </label>
                                        </div>
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" value="<?= (isset($budget->offers_promotions) == '') ? '' : $budget->offers_promotions; ?>"
                                                id="flexCheckChecked" name="offers_promotions" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Bloomberg may send me offers and promotions
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col-md-12 col-lg-6 col-12 p-5">
                                        <div class="security">
                                            <div class="heading7 hover-text-blue mb-3">Why do I need to share this
                                                information?</div>
                                            <div class="body3 text-secondary mt-20">Your answers will help us provide
                                                the
                                                survey, learn more about our audience and prepare analysis for our
                                                internal
                                                use. We may also use your responses to enhance your experience with this
                                                site and improve our services by providing customized content,
                                                contextual
                                                advertisements and, if you agree, advertisements tailored to your
                                                interests.
                                                Please see our Privacy Policy for more information.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <h2>INCOME</h2>
                        <section>
                            <div class="heading3 mt-10">Your Income</div>
                            <div class="body3 text-secondary mt-20">Show us the money. We’ll give you ideas for getting
                                answers quickly,
                                and it’s okay to guesstimate. You can update your answers later for more precise
                                results.
                            </div>
                            <hr>
                            <div class="mb-5 mt-5">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 col-12">
                                        <div class="row row-gap-20">
                                            <div class="heading7 hover-text-blue mt-3">What is your income?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->income) == '') ? '' : $budget->income; ?>" required placeholder="₹" name="income" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="income_frequency">
                                                    <option value="PERYEAR" <?= (isset($budget->income_frequency) == 'PERYEAR') ? 'selected' : '' ?>>Per Year</option>
                                                    <option value="PERMONTH" <?= (isset($budget->income_frequency) == 'PERMONTH') ? 'selected' : '' ?>>Per Month</option>
                                                    <option value="PERWEEK" <?= (isset($budget->income_frequency) == 'PERWEEK') ? 'selected' : '' ?>>Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Annualize a paycheck’s gross or use W-2
                                                    box
                                                    No. 5 (Medicare
                                                    wages and tips), and add to any other taxable income for all working
                                                    household members.</i>
                                            </div>

                                            <div class="heading7 hover-text-blue mt-2">What is your income after taxes?
                                            </div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->income_after_taxes) == '') ? '' : $budget->income_after_taxes; ?>" required placeholder="₹" name="income_after_taxes" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="income_after_taxes_frequency">
                                                    <option value="PERYEAR" <?= (isset($budget->income_after_taxes_frequency) == 'PERYEAR') ? 'selected' : '' ?>>Per Year</option>
                                                    <option value="PERMONTH" <?= (isset($budget->income_after_taxes_frequency) == 'PERMONTH') ? 'selected' : '' ?>>Per Month</option>
                                                    <option value="PERWEEK" <?= (isset($budget->income_after_taxes_frequency) == 'PERWEEK') ? 'selected' : '' ?>>Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Subtract all federal, state and local
                                                    income taxes from the
                                                    above number, using latest income tax returns.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">How much do you pay in Social
                                                Security taxes?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->social_security_taxes) == '') ? '' : $budget->social_security_taxes; ?>" required placeholder="₹" name="social_security_taxes" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="social_security_taxes_frequency">
                                                    <option value="PERYEAR" <?= (isset($budget->social_security_taxes_frequency) == 'PERYEAR') ? 'selected' : '' ?>>Per Year</option>
                                                    <option value="PERMONTH" <?= (isset($budget->social_security_taxes_frequency) == 'PERMONTH') ? 'selected' : '' ?>>Per Month</option>
                                                    <option value="PERWEEK" <?= (isset($budget->social_security_taxes_frequency) == 'PERWEEK') ? 'selected' : '' ?>>Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>The current rate is 6.2% for corporate
                                                    employees and 12.4% for
                                                    the self-employed on earnings up to ₹147,000. It’s in W-2 box No.
                                                    3.</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-12 p-5">
                                        <div class="security">
                                            <div class="heading7 hover-text-blue mb-3">Why do you need my Social
                                                Security
                                                taxes?</div>
                                            <div class="body3 text-secondary mt-20">The Bureau of Labor Statistics
                                                considers
                                                them money “spent”
                                                on retirement savings and includes them in its averages. So when we
                                                compare
                                                how much you save for
                                                your golden years to your peers’ savings, we’ll include your Social
                                                Security
                                                contributions.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <h2>SPENDING</h2>
                        <section>
                            <div class="heading3 mt-10">Your Spending</div>
                            <div class="body3 text-secondary mt-20">Let’s dive into the nitty-gritty: Where does your
                                money
                                go? You can
                                enter weekly, monthly, or yearly amounts. We’ll adjust accordingly.</div>
                            <hr>
                            <div class="mb-5 mt-5">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 col-12">
                                        <div class="row row-gap-20">
                                            <div class="heading7 hover-text-blue mt-3">How much do you spend on...</div>
                                            <div class="heading7 hover-text-blue mt-3">Food and beverages?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->food_and_beverages) == '') ? '' : $budget->food_and_beverages; ?>" required placeholder="₹" name="food_and_beverages" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="food_and_beverages_frequency">
                                                    <option value="PERYEAR" <?= (isset($budget->food_and_beverages_frequency) == 'PERYEAR') ? 'selected' : '' ?>>Per Year</option>
                                                    <option value="PERMONTH" <?= (isset($budget->food_and_beverages_frequency) == 'PERMONTH') ? 'selected' : '' ?>>Per Month</option>
                                                    <option value="PERWEEK" <?= (isset($budget->food_and_beverages_frequency) == 'PERWEEK') ? 'selected' : '' ?>>Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Consumed at home or elsewhere,
                                                    including in
                                                    restaurants</i>
                                            </div>

                                            <div class="heading7 hover-text-blue mt-2">Clothes?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->clothes) == '') ? '' : $budget->clothes; ?>" required placeholder="₹" name="clothes" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="clothes_frequency">
                                                    <option value="PERYEAR" <?= (isset($budget->clothes_frequency) == 'PERYEAR') ? 'selected' : '' ?>>Per Year</option>
                                                    <option value="PERMONTH" <?= (isset($budget->clothes_frequency) == 'PERMONTH') ? 'selected' : '' ?>>Per Month</option>
                                                    <option value="PERWEEK" <?= (isset($budget->clothes_frequency) == 'PERWEEK') ? 'selected' : '' ?>>Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Include related services, footwear,
                                                    accessories.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">Housing?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->housing) == '') ? '' : $budget->housing; ?>" required placeholder="₹" name="housing" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="housing_frequency">
                                                    <option value="PERYEAR" <?= (isset($budget->housing_frequency) == 'PERYEAR') ? 'selected' : '' ?>>Per Year</option>
                                                    <option value="PERMONTH" <?= (isset($budget->housing_frequency) == 'PERMONTH') ? 'selected' : '' ?>>Per Month</option>
                                                    <option value="PERWEEK" <?= (isset($budget->housing_frequency) == 'PERWEEK') ? 'selected' : '' ?>>Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Rent or mortgage, taxes, insurance,
                                                    maintenance, utilities,
                                                    cell services, personal services, furnishings, appliances, related
                                                    items
                                                    and services</i></div>

                                            <div class="heading7 hover-text-blue mt-2">Transportation?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->transportation) == '') ? '' : $budget->transportation; ?>" required placeholder="₹" name="transportation" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="transportation_frequency">
                                                    <option value="PERYEAR" <?= (isset($budget->transportation_frequency) == 'PERYEAR') ? 'selected' : '' ?>>Per Year</option>
                                                    <option value="PERMONTH" <?= (isset($budget->transportation_frequency) == 'PERMONTH') ? 'selected' : '' ?>>Per Month</option>
                                                    <option value="PERWEEK" <?= (isset($budget->transportation_frequency) == 'PERWEEK') ? 'selected' : '' ?>>Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Vehicle purchases, rentals, leases,
                                                    insurance, fuel, upkeep,
                                                    licenses, public transit, taxis</i></div>

                                            <div class="heading7 hover-text-blue mt-2">Healthcare and personal care
                                                products?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->healthcare_and_personal_care) == '') ? '' : $budget->healthcare_and_personal_care; ?>" required placeholder="₹" name="healthcare_and_personal_care" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="healthcare_and_personal_care_frequency">
                                                    <option value="PERYEAR" <?= (isset($budget->healthcare_and_personal_care_frequency) == 'PERYEAR') ? 'selected' : '' ?>>Per Year</option>
                                                    <option value="PERMONTH" <?= (isset($budget->healthcare_and_personal_care_frequency) == 'PERMONTH') ? 'selected' : '' ?>>Per Month</option>
                                                    <option value="PERWEEK" <?= (isset($budget->healthcare_and_personal_care_frequency) == 'PERWEEK') ? 'selected' : '' ?>>Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Medical insurance, uncovered cost of
                                                    medical supplies, drugs
                                                    and services, shampoo, toothpaste, other such non-food items</i>
                                            </div>

                                            <div class="heading7 hover-text-blue mt-2">Entertainment?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->entertainment) == '') ? '' : $budget->entertainment; ?>" required placeholder="₹" name="entertainment" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="entertainment_frequency">
                                                    <option value="PERYEAR" <?= (isset($budget->entertainment_frequency) == 'PERYEAR') ? 'selected' : '' ?>>Per Year</option>
                                                    <option value="PERMONTH" <?= (isset($budget->entertainment_frequency) == 'PERMONTH') ? 'selected' : '' ?>>Per Month</option>
                                                    <option value="PERWEEK" <?= (isset($budget->entertainment_frequency) == 'PERWEEK') ? 'selected' : '' ?>>Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Admission fees, audio visual equipment
                                                    and
                                                    services, pets,
                                                    toys, hobbies and playground equipment</i></div>

                                            <div class="heading7 hover-text-blue mt-2">Education?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->education) == '') ? '' : $budget->education; ?>" required placeholder="₹" name="education" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="education_frequency">
                                                    <option value="PERYEAR" <?= (isset($budget->education_frequency) == 'PERYEAR') ? 'selected' : '' ?>>Per Year</option>
                                                    <option value="PERMONTH" <?= (isset($budget->education_frequency) == 'PERMONTH') ? 'selected' : '' ?>>Per Month</option>
                                                    <option value="PERWEEK" <?= (isset($budget->education_frequency) == 'PERWEEK') ? 'selected' : '' ?>>Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Tuition, fees, textbooks, supplies and
                                                    equipment, from
                                                    pre-school to graduate school</i></div>

                                            <div class="heading7 hover-text-blue mt-2">Everything else except retirement
                                                savings?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->other_expenses) == '') ? '' : $budget->other_expenses; ?>" required placeholder="₹" name="other_expenses" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="other_expenses_frequency">
                                                    <option value="PERYEAR" <?= (isset($budget->other_expenses_frequency) == 'PERYEAR') ? 'selected' : '' ?>>Per Year</option>
                                                    <option value="PERMONTH" <?= (isset($budget->other_expenses_frequency) == 'PERMONTH') ? 'selected' : '' ?>>Per Month</option>
                                                    <option value="PERWEEK" <?= (isset($budget->other_expenses_frequency) == 'PERWEEK') ? 'selected' : '' ?>>Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Premiums for insurance not covered
                                                    above
                                                    (such as life, income
                                                    protection, personal liability and disability), tobacco, alimony,
                                                    child
                                                    support, cash given
                                                    others and charities, subscriptions and books, legal fees and credit
                                                    card interest</i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-12 p-5">
                                        <div class="security">
                                            <div class="heading7 hover-text-blue mb-3">Why do you need my spending
                                                details?
                                            </div>
                                            <div class="body3 text-secondary mt-20">Understanding your spending habits
                                                helps
                                                us provide more
                                                accurate financial insights and advice tailored to your lifestyle.</div>
                                        </div>
                                        <div class="security">
                                            <div class="heading7 hover-text-blue mb-3">What’s a benchmark?</div>
                                            <div class="body3 text-secondary mt-20">It’s a standard against which
                                                performance is measured. We’ve
                                                identified seven that are generally agreed upon in the personal finance
                                                industry to assess your
                                                financial health. Once you’ve completed all questions, they’ll be
                                                averaged
                                                to calculate your
                                                WealthScore.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <h2>RETIREMENT</h2>
                        <section>
                            <div class="heading3 mt-10">Your Retirement Contributions</div>
                            <div class="body3 text-secondary mt-20">Now we’re going to look at how much you’re
                                squirreling
                                away for your
                                golden years. Later, we’ll also look at how much you’ve saved so far.</div>
                            <hr>
                            <div class="mb-5 mt-5">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 col-12">
                                        <div class="row row-gap-20">
                                            <div class="heading7 hover-text-blue mt-3">How much do you save for
                                                retirement?
                                            </div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->retirement_savings_amount) == '') ? '' : $budget->retirement_savings_amount; ?>" required placeholder="₹" name="retirement_savings_amount" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="retirement_savings_frequency">
                                                    <option value="PERYEAR" <?= (isset($budget->retirement_savings_frequency) == 'PERYEAR') ? 'selected' : '' ?>>Per Year</option>
                                                    <option value="PERMONTH" <?= (isset($budget->retirement_savings_frequency) == 'PERMONTH') ? 'selected' : '' ?>>Per Month</option>
                                                    <option value="PERWEEK" <?= (isset($budget->retirement_savings_frequency) == 'PERWEEK') ? 'selected' : '' ?>>Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Contributions to retirement plans, such
                                                    as
                                                    401(k) programs and
                                                    IRAs, pensions and the like.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">How much does your employer
                                                contribute to your retirement
                                                savings?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->employer_contribution) == '') ? '' : $budget->employer_contribution; ?>" required placeholder="₹" name="employer_contribution" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="employer_contribution_frequency">
                                                    <option value="PERYEAR" <?= (isset($budget->employer_contribution_frequency) == 'PERYEAR') ? 'selected' : '' ?>>Per Year</option>
                                                    <option value="PERMONTH" <?= (isset($budget->employer_contribution_frequency) == 'PERMONTH') ? 'selected' : '' ?>>Per Month</option>
                                                    <option value="PERWEEK" <?= (isset($budget->employer_contribution_frequency) == 'PERWEEK') ? 'selected' : '' ?>>Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Such as matching 401(k) and IRA
                                                    contributions and profit
                                                    sharing or stock options grants if they are part of your employer’s
                                                    retirement plan.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">How old were you when you started
                                                saving for retirement?
                                            </div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->starting_age_for_saving) == '') ? '' : $budget->starting_age_for_saving; ?>" required placeholder="₹" name="starting_age_for_saving" />
                                            </div>
                                            <div class="body3 text-secondary"><i>We need this to estimate your
                                                    retirement-savings goals.</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-12 p-5">
                                        <div class="security">
                                            <div class="heading7 hover-text-blue mb-3">What do I do if I'm below the
                                                benchmark?</div>
                                            <div class="body3 text-secondary mt-20">There's a lot you can do. We can
                                                tell
                                                you more after you
                                                finish entering your information.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <h2>ASSETS</h2>
                        <section>
                            <div class="heading3 mt-10">Your Assets</div>
                            <div class="body3 text-secondary mt-20">Now let's start figuring out your net worth and your
                                preparedness
                                for the future by looking at your bank accounts, retirement savings, investments,
                                property
                                and other
                                valuables.</div>
                            <hr>
                            <div class="mb-5 mt-5">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 col-12">
                                        <div class="row row-gap-20">
                                            <div class="heading7 hover-text-blue mt-3">How much do you have in bank
                                                accounts?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?=(isset($budget->bank_accounts_value) == '') ? '' : $budget->bank_accounts_value; ?>" required placeholder="₹" name="bank_accounts_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Include money from all checking and
                                                    savings
                                                    accounts and the
                                                    like.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">What is the current value of your
                                                non-retirement
                                                investment accounts?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->investment_accounts_value) == '') ? '' : $budget->investment_accounts_value; ?>" required placeholder="₹" name="investment_accounts_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Stocks, bonds, certificates of deposit,
                                                    etc</i></div>

                                            <div class="heading7 hover-text-blue mt-2">If you own your home, what is its
                                                current value?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->home_value) == '') ? '' : $budget->home_value; ?>" required placeholder="₹" name="home_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>How much it would sell for now, minus
                                                    the
                                                    principal remaining
                                                    on any mortgages. If you rent and don’t own your home, enter ₹0.</i>
                                            </div>

                                            <div class="heading7 hover-text-blue mt-2">What is the combined value of any
                                                rental properties you
                                                own?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->rental_properties_value) == '') ? '' : $budget->rental_properties_value; ?>" required placeholder="₹" name="rental_properties_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>How much they would sell for now, minus
                                                    the
                                                    principal remaining
                                                    on any mortgages. If you don’t own any rental properties, enter
                                                    ₹0.</i>
                                            </div>

                                            <div class="heading7 hover-text-blue mt-2">What is the combined value of
                                                your
                                                vehicles?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->vehicles_value) == '') ? '' : $budget->vehicles_value; ?>" required placeholder="₹" name="vehicles_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>How much they would sell for now, minus
                                                    any
                                                    loan principals. If
                                                    you lease or don’t have a car, enter ₹0.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">What is the total value of any
                                                other
                                                assets?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->other_assets_value) == '') ? '' : $budget->other_assets_value; ?>" required placeholder="₹" name="other_assets_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Include equity in businesses, annuities
                                                    and
                                                    trusts, cash value
                                                    of life insurance and any other tangible assets, including
                                                    motorcycles,
                                                    boats, artworks,
                                                    electronics and jewelry.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">What is the current value of your
                                                retirement savings
                                                accounts?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->retirement_savings_value) == '') ? '' : $budget->retirement_savings_value; ?>" required placeholder="₹" name="retirement_savings_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Include 401(k)s, 403bs, IRAs, annuities
                                                    and
                                                    pension-vested
                                                    benefits.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">How much of your assets are
                                                available
                                                for emergencies?
                                            </div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->emergency_assets_value) == '') ? '' : $budget->emergency_assets_value; ?>" required placeholder="₹" name="emergency_assets_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>How much they would sell for now, minus
                                                    the
                                                    principal remaining
                                                    on any mortgages. If you don’t own any other properties, enter
                                                    ₹0.</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-12 p-5">
                                        <div class="security">
                                            <div class="heading7 hover-text-blue mb-3">What do I do if I'm below the
                                                benchmark?</div>
                                            <div class="body3 text-secondary mt-20">There's a lot you can do. We can
                                                tell
                                                you more after you
                                                finish entering your information.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <h2>DEBT</h2>
                        <section>
                            <div class="heading3 mt-10">Your Debts</div>
                            <div class="body3 text-secondary mt-20">In this final section, we’ll look at the other side
                                of
                                the ledger:
                                How much you owe.</div>
                            <hr>
                            <div class="mb-5 mt-5">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 col-12">
                                        <div class="row row-gap-20">
                                            <div class="heading7 hover-text-blue mt-3">How much do you owe for mortgages
                                                and
                                                home-equity loans?
                                            </div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->mortgage_loans_value) == '') ? '' : $budget->mortgage_loans_value; ?>" required placeholder="₹" name="mortgage_loans_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Do not include unused lines of
                                                    credit.</i>
                                            </div>

                                            <div class="heading7 hover-text-blue mt-2">How much business debt do you
                                                have?
                                            </div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->business_debt_value) == '') ? '' : $budget->business_debt_value; ?>" required placeholder="₹" name="business_debt_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Include loans for businesses you own
                                                    for
                                                    your own employment or
                                                    for an investment.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">How much do you owe for vehicle
                                                loans?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->vehicle_loans_value) == '') ? '' : $budget->vehicle_loans_value; ?>" required placeholder="₹" name="vehicle_loans_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Include debt on motorcycles and
                                                    recreational vehicles.</i>
                                            </div>

                                            <div class="heading7 hover-text-blue mt-2">How much credit card debt do you
                                                have?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->credit_card_debt_value) == '') ? '' : $budget->credit_card_debt_value; ?>" required placeholder="₹" name="credit_card_debt_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Include only balances that are or will
                                                    be
                                                    outstanding for
                                                    multiple months.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">How much student debt do you owe?
                                            </div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->student_debt_value) == '') ? '' : $budget->student_debt_value; ?>" required placeholder="₹" name="student_debt_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Include loans for any educational
                                                    related
                                                    expenses, but not
                                                    home-equity loans, even if used for tuition and the like.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">How much do you owe for all other
                                                debts?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->other_debts_value) == '') ? '' : $budget->other_debts_value; ?>" required placeholder="₹" name="other_debts_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Include any other unsecured debt,
                                                    including
                                                    medical debt, money
                                                    owed to private individuals, bank or credit union loans and debt
                                                    held
                                                    against mutual funds or
                                                    stocks via margin accounts.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">How much do you spend to pay off
                                                the
                                                above debts?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="<?= (isset($budget->debt_payment_value) == '') ? '' : $budget->debt_payment_value; ?>" required placeholder="₹" name="debt_payment_value" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="debt_payment_frequency">
                                                    <option value="PERYEAR" <?= (isset($budget->debt_payment_frequency) == 'PERYEAR') ? 'selected' : '' ?>>Per Year</option>
                                                    <option value="PERMONTH" <?= (isset($budget->debt_payment_frequency) == 'PERMONTH') ? 'selected' : '' ?>>Per Month</option>
                                                    <option value="PERWEEK" <?= (isset($budget->debt_payment_frequency) == 'PERWEEK') ? 'selected' : '' ?>>Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>For credit cards, only include sums
                                                    paid to
                                                    reduce outstanding
                                                    balances over the course of multiple months. Don't include amounts
                                                    used
                                                    to pay off credit card
                                                    balances in their entirety each month.</i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-12 p-5">
                                        <div class="security">
                                            <div class="heading7 hover-text-blue mb-3">What do I do if I'm below the
                                                benchmark?</div>
                                            <div class="body3 text-secondary mt-20">There's a lot you can do. We can
                                                tell
                                                you more after you
                                                finish entering your information.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </form>
                <!-- < ?php } ?> -->
            </div>
            <?php //} else { // For Edit 
            ?>
            <!-- <div class="content">
                <form action="" method="post" id="register-form">
                    <input type="hidden" name="form_submit" value="update">
                    <div id="wizard">
                        <h2>BASICS</h2>
                        <section>
                            <div class="heading3 mt-10">The Basics</div>
                            <div class="body3 text-secondary mt-20">Tell us about yourself.</div>
                            <hr>
                            <div class="mb-5 mt-5">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 col-12">
                                        <div class="heading7 hover-text-blue mb-3">Budget planning</div>
                                        <input class="w-100 bg-surface caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            name="budget_planning" value="< ?= $budget->budget_planning; ?>" required
                                            type="text" placeholder="Your city or metro area" />
                                        <div class="body3 text-secondary mt-2"><i>Select your city or metro area.</i>
                                        </div>

                                        <div class="heading7 hover-text-blue mb-3 mt-3">How many people are in your
                                            household?</div>
                                        <input class="w-100 bg-surface caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            name="household_size" value="< ?= $budget->household_size; ?>" type="text"
                                            placeholder="Number of people" />
                                        <div class="body3 text-secondary mt-2"><i>Enter 1 if you live alone; otherwise,
                                                include yourself, your partner and any dependents.</i></div>

                                        <div class="heading7 hover-text-blue mb-3 mt-3">How old are you?</div>
                                        <input class="w-100 bg-surface caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                            name="age" value="< ?= $budget->age; ?>" type="text"
                                            placeholder="Your age" />
                                        <div class="body3 text-secondary mt-2"><i>In years</i></div>
                                        <div class="form-check mt-5">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" name="advertisement_interest"
                                                < ?php if (!empty($budget->advertisement_interest)) echo "checked"; ?>>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Bloomberg may use my information to provide me with advertisements that
                                                may
                                                be of particular interest to me (note if you do not check this box you
                                                will
                                                still receive online advertising)
                                            </label>
                                        </div>
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" name="offers_promotions"
                                                < ?php if (!empty($budget->offers_promotions)) echo "checked"; ?>>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Bloomberg may send me offers and promotions
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col-md-12 col-lg-6 col-12 p-5">
                                        <div class="security">
                                            <div class="heading7 hover-text-blue mb-3">Why do I need to share this
                                                information?</div>
                                            <div class="body3 text-secondary mt-20">Your answers will help us provide
                                                the
                                                survey, learn more about our audience and prepare analysis for our
                                                internal
                                                use. We may also use your responses to enhance your experience with this
                                                site and improve our services by providing customized content,
                                                contextual
                                                advertisements and, if you agree, advertisements tailored to your
                                                interests.
                                                Please see our Privacy Policy for more information.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <h2>INCOME</h2>
                        <section>
                            <div class="heading3 mt-10">Your Income</div>
                            <div class="body3 text-secondary mt-20">Show us the money. We’ll give you ideas for getting
                                answers quickly,
                                and it’s okay to guesstimate. You can update your answers later for more precise
                                results.
                            </div>
                            <hr>
                            <div class="mb-5 mt-5">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 col-12">
                                        <div class="row row-gap-20">
                                            <div class="heading7 hover-text-blue mt-3">What is your income?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->income; ?>" placeholder="₹"
                                                    name="income" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="income_frequency">
                                                    <option value="Per Year"
                                                        < ?php if ($budget->income_frequency == "Per Year") echo "selected"; ?>>
                                                        Per Year</option>
                                                    <option value="Per Month"
                                                        < ?php if ($budget->income_frequency == "Per Month") echo "selected"; ?>>
                                                        Per Month</option>
                                                    <option value="Per Week"
                                                        < ?php if ($budget->income_frequency == "Per Week") echo "selected"; ?>>
                                                        Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Annualize a paycheck’s gross or use W-2
                                                    box
                                                    No. 5 (Medicare
                                                    wages and tips), and add to any other taxable income for all working
                                                    household members.</i>
                                            </div>

                                            <div class="heading7 hover-text-blue mt-2">What is your income after taxes?
                                            </div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->income_after_taxes; ?>"
                                                    placeholder="₹" name="income_after_taxes" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="income_after_taxes_frequency">
                                                    <option value="Per Year"
                                                        < ?php if ($budget->income_after_taxes_frequency == "Per Year") echo "selected"; ?>>
                                                        Per Year</option>
                                                    <option value="Per Month"
                                                        < ?php if ($budget->income_after_taxes_frequency == "Per Month") echo "selected"; ?>>
                                                        Per Month</option>
                                                    <option value="Per Week"
                                                        < ?php if ($budget->income_after_taxes_frequency == "Per Week") echo "selected"; ?>>
                                                        Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Subtract all federal, state and local
                                                    income taxes from the
                                                    above number, using latest income tax returns.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">How much do you pay in Social
                                                Security taxes?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->social_security_taxes; ?>"
                                                    placeholder="₹" name="social_security_taxes" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="social_security_taxes_frequency">
                                                    <option value="Per Year"
                                                        < ?php if ($budget->social_security_taxes_frequency == "Per Year") echo "selected"; ?>>
                                                        Per Year</option>
                                                    <option value="Per Month"
                                                        < ?php if ($budget->social_security_taxes_frequency == "Per Month") echo "selected"; ?>>
                                                        Per Month</option>
                                                    <option value="Per Week"
                                                        < ?php if ($budget->social_security_taxes_frequency == "Per Week") echo "selected"; ?>>
                                                        Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>The current rate is 6.2% for corporate
                                                    employees and 12.4% for
                                                    the self-employed on earnings up to ₹147,000. It’s in W-2 box No.
                                                    3.</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-12 p-5">
                                        <div class="security">
                                            <div class="heading7 hover-text-blue mb-3">Why do you need my Social
                                                Security
                                                taxes?</div>
                                            <div class="body3 text-secondary mt-20">The Bureau of Labor Statistics
                                                considers
                                                them money “spent”
                                                on retirement savings and includes them in its averages. So when we
                                                compare
                                                how much you save for
                                                your golden years to your peers’ savings, we’ll include your Social
                                                Security
                                                contributions.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <h2>SPENDING</h2>
                        <section>
                            <div class="heading3 mt-10">Your Spending</div>
                            <div class="body3 text-secondary mt-20">Let’s dive into the nitty-gritty: Where does your
                                money
                                go? You can
                                enter weekly, monthly, or yearly amounts. We’ll adjust accordingly.</div>
                            <hr>
                            <div class="mb-5 mt-5">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 col-12">
                                        <div class="row row-gap-20">
                                            <div class="heading7 hover-text-blue mt-3">How much do you spend on...</div>
                                            <div class="heading7 hover-text-blue mt-3">Food and beverages?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->food_and_beverages; ?>"
                                                    placeholder="₹" name="food_and_beverages" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="food_and_beverages_frequency">
                                                    <option value="Per Year"
                                                        < ?php if ($budget->food_and_beverages_frequency == "Per Year") echo "selected"; ?>>
                                                        Per Year</option>
                                                    <option value="Per Month"
                                                        < ?php if ($budget->food_and_beverages_frequency == "Per Month") echo "selected"; ?>>
                                                        Per Month</option>
                                                    <option value="Per Week"
                                                        < ?php if ($budget->food_and_beverages_frequency == "Per Week") echo "selected"; ?>>
                                                        Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Consumed at home or elsewhere,
                                                    including in
                                                    restaurants</i>
                                            </div>

                                            <div class="heading7 hover-text-blue mt-2">Clothes?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->clothes; ?>" placeholder="₹"
                                                    name="clothes" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="clothes_frequency">
                                                    <option value="Per Year"
                                                        < ?php if ($budget->clothes_frequency == "Per Year") echo "selected"; ?>>
                                                        Per Year</option>
                                                    <option value="Per Month"
                                                        < ?php if ($budget->clothes_frequency == "Per Month") echo "selected"; ?>>
                                                        Per Month</option>
                                                    <option value="Per Week"
                                                        < ?php if ($budget->clothes_frequency == "Per Week") echo "selected"; ?>>
                                                        Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Include related services, footwear,
                                                    accessories.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">Housing?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->housing; ?>" placeholder="₹"
                                                    name="housing" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="housing_frequency">
                                                    <option value="Per Year"
                                                        < ?php if ($budget->housing_frequency == "Per Year") echo "selected"; ?>>
                                                        Per Year</option>
                                                    <option value="Per Month"
                                                        < ?php if ($budget->housing_frequency == "Per Month") echo "selected"; ?>>
                                                        Per Month</option>
                                                    <option value="Per Week"
                                                        < ?php if ($budget->housing_frequency == "Per Week") echo "selected"; ?>>
                                                        Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Rent or mortgage, taxes, insurance,
                                                    maintenance, utilities,
                                                    cell services, personal services, furnishings, appliances, related
                                                    items
                                                    and services</i></div>

                                            <div class="heading7 hover-text-blue mt-2">Transportation?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->transportation; ?>" placeholder="₹"
                                                    name="transportation" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="transportation_frequency">
                                                    <option value="Per Year"
                                                        < ?php if ($budget->transportation_frequency == "Per Year") echo "selected"; ?>>
                                                        Per Year</option>
                                                    <option value="Per Month"
                                                        < ?php if ($budget->transportation_frequency == "Per Month") echo "selected"; ?>>
                                                        Per Month</option>
                                                    <option value="Per Week"
                                                        < ?php if ($budget->transportation_frequency == "Per Week") echo "selected"; ?>>
                                                        Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Vehicle purchases, rentals, leases,
                                                    insurance, fuel, upkeep,
                                                    licenses, public transit, taxis</i></div>

                                            <div class="heading7 hover-text-blue mt-2">Healthcare and personal care
                                                products?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->healthcare_and_personal_care; ?>"
                                                    placeholder="₹" name="healthcare_and_personal_care" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="healthcare_and_personal_care_frequency">
                                                    <option value="Per Year"
                                                        < ?php if ($budget->healthcare_and_personal_care_frequency == "Per Year") echo "selected"; ?>>
                                                        Per Year</option>
                                                    <option value="Per Month"
                                                        < ?php if ($budget->healthcare_and_personal_care_frequency == "Per Month") echo "selected"; ?>>
                                                        Per Month</option>
                                                    <option value="Per Week"
                                                        < ?php if ($budget->healthcare_and_personal_care_frequency == "Per Week") echo "selected"; ?>>
                                                        Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Medical insurance, uncovered cost of
                                                    medical supplies, drugs
                                                    and services, shampoo, toothpaste, other such non-food items</i>
                                            </div>

                                            <div class="heading7 hover-text-blue mt-2">Entertainment?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->entertainment; ?>" placeholder="₹"
                                                    name="entertainment" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="entertainment_frequency">
                                                    <option value="Per Year"
                                                        < ?php if ($budget->entertainment_frequency == "Per Year") echo "selected"; ?>>
                                                        Per Year</option>
                                                    <option value="Per Month"
                                                        < ?php if ($budget->entertainment_frequency == "Per Month") echo "selected"; ?>>
                                                        Per Month</option>
                                                    <option value="Per Week"
                                                        < ?php if ($budget->entertainment_frequency == "Per Week") echo "selected"; ?>>
                                                        Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Admission fees, audio visual equipment
                                                    and
                                                    services, pets,
                                                    toys, hobbies and playground equipment</i></div>

                                            <div class="heading7 hover-text-blue mt-2">Education?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->education; ?>" placeholder="₹"
                                                    name="education" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="education_frequency">
                                                    <option value="Per Year"
                                                        < ?php if ($budget->education_frequency == "Per Year") echo "selected"; ?>>
                                                        Per Year</option>
                                                    <option value="Per Month"
                                                        < ?php if ($budget->education_frequency == "Per Month") echo "selected"; ?>>
                                                        Per Month</option>
                                                    <option value="Per Week"
                                                        < ?php if ($budget->education_frequency == "Per Week") echo "selected"; ?>>
                                                        Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Tuition, fees, textbooks, supplies and
                                                    equipment, from
                                                    pre-school to graduate school</i></div>

                                            <div class="heading7 hover-text-blue mt-2">Everything else except retirement
                                                savings?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->other_expenses; ?>" placeholder="₹"
                                                    name="other_expenses" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="other_expenses_frequency">
                                                    <option value="Per Year"
                                                        < ?php if ($budget->other_expenses_frequency == "Per Year") echo "selected"; ?>>
                                                        Per Year</option>
                                                    <option value="Per Month"
                                                        < ?php if ($budget->other_expenses_frequency == "Per Month") echo "selected"; ?>>
                                                        Per Month</option>
                                                    <option value="Per Week"
                                                        < ?php if ($budget->other_expenses_frequency == "Per Week") echo "selected"; ?>>
                                                        Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Premiums for insurance not covered
                                                    above
                                                    (such as life, income
                                                    protection, personal liability and disability), tobacco, alimony,
                                                    child
                                                    support, cash given
                                                    others and charities, subscriptions and books, legal fees and credit
                                                    card interest</i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-12 p-5">
                                        <div class="security">
                                            <div class="heading7 hover-text-blue mb-3">Why do you need my spending
                                                details?
                                            </div>
                                            <div class="body3 text-secondary mt-20">Understanding your spending habits
                                                helps
                                                us provide more
                                                accurate financial insights and advice tailored to your lifestyle.</div>
                                        </div>
                                        <div class="security">
                                            <div class="heading7 hover-text-blue mb-3">What’s a benchmark?</div>
                                            <div class="body3 text-secondary mt-20">It’s a standard against which
                                                performance is measured. We’ve
                                                identified seven that are generally agreed upon in the personal finance
                                                industry to assess your
                                                financial health. Once you’ve completed all questions, they’ll be
                                                averaged
                                                to calculate your
                                                WealthScore.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <h2>RETIREMENT</h2>
                        <section>
                            <div class="heading3 mt-10">Your Retirement Contributions</div>
                            <div class="body3 text-secondary mt-20">Now we’re going to look at how much you’re
                                squirreling
                                away for your
                                golden years. Later, we’ll also look at how much you’ve saved so far.</div>
                            <hr>
                            <div class="mb-5 mt-5">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 col-12">
                                        <div class="row row-gap-20">
                                            <div class="heading7 hover-text-blue mt-3">How much do you save for
                                                retirement?
                                            </div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->retirement_savings_amount; ?>"
                                                    placeholder="₹" name="retirement_savings_amount" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="retirement_savings_frequency">
                                                    <option value="Per Year"
                                                        < ?php if ($budget->retirement_savings_frequency == "Per Year") echo "selected"; ?>>
                                                        Per Year</option>
                                                    <option value="Per Month"
                                                        < ?php if ($budget->retirement_savings_frequency == "Per Month") echo "selected"; ?>>
                                                        Per Month</option>
                                                    <option value="Per Week"
                                                        < ?php if ($budget->retirement_savings_frequency == "Per Week") echo "selected"; ?>>
                                                        Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Contributions to retirement plans, such
                                                    as
                                                    401(k) programs and
                                                    IRAs, pensions and the like.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">How much does your employer
                                                contribute to your retirement
                                                savings?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->employer_contribution; ?>"
                                                    placeholder="₹" name="employer_contribution" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="employer_contribution_frequency">
                                                    <option value="Per Year"
                                                        < ?php if ($budget->employer_contribution_frequency == "Per Year") echo "selected"; ?>>
                                                        Per Year</option>
                                                    <option value="Per Month"
                                                        < ?php if ($budget->employer_contribution_frequency == "Per Month") echo "selected"; ?>>
                                                        Per Month</option>
                                                    <option value="Per Week"
                                                        < ?php if ($budget->employer_contribution_frequency == "Per Week") echo "selected"; ?>>
                                                        Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>Such as matching 401(k) and IRA
                                                    contributions and profit
                                                    sharing or stock options grants if they are part of your employer’s
                                                    retirement plan.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">How old were you when you started
                                                saving for retirement?
                                            </div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->starting_age_for_saving; ?>"
                                                    placeholder="₹" name="starting_age_for_saving" />
                                            </div>
                                            <div class="body3 text-secondary"><i>We need this to estimate your
                                                    retirement-savings goals.</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-12 p-5">
                                        <div class="security">
                                            <div class="heading7 hover-text-blue mb-3">What do I do if I'm below the
                                                benchmark?</div>
                                            <div class="body3 text-secondary mt-20">There's a lot you can do. We can
                                                tell
                                                you more after you
                                                finish entering your information.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <h2>ASSETS</h2>
                        <section>
                            <div class="heading3 mt-10">Your Assets</div>
                            <div class="body3 text-secondary mt-20">Now let's start figuring out your net worth and your
                                preparedness
                                for the future by looking at your bank accounts, retirement savings, investments,
                                property
                                and other
                                valuables.</div>
                            <hr>
                            <div class="mb-5 mt-5">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 col-12">
                                        <div class="row row-gap-20">
                                            <div class="heading7 hover-text-blue mt-3">How much do you have in bank
                                                accounts?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->bank_accounts_value; ?>"
                                                    placeholder="₹" name="bank_accounts_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Include money from all checking and
                                                    savings
                                                    accounts and the
                                                    like.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">What is the current value of your
                                                non-retirement
                                                investment accounts?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->investment_accounts_value; ?>"
                                                    placeholder="₹" name="investment_accounts_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Stocks, bonds, certificates of deposit,
                                                    etc</i></div>

                                            <div class="heading7 hover-text-blue mt-2">If you own your home, what is its
                                                current value?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->home_value; ?>" placeholder="₹"
                                                    name="home_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>How much it would sell for now, minus
                                                    the
                                                    principal remaining
                                                    on any mortgages. If you rent and don’t own your home, enter ₹0.</i>
                                            </div>

                                            <div class="heading7 hover-text-blue mt-2">What is the combined value of any
                                                rental properties you
                                                own?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->rental_properties_value; ?>"
                                                    placeholder="₹" name="rental_properties_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>How much they would sell for now, minus
                                                    the
                                                    principal remaining
                                                    on any mortgages. If you don’t own any rental properties, enter
                                                    ₹0.</i>
                                            </div>

                                            <div class="heading7 hover-text-blue mt-2">What is the combined value of
                                                your
                                                vehicles?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->vehicles_value; ?>" placeholder="₹"
                                                    name="vehicles_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>How much they would sell for now, minus
                                                    any
                                                    loan principals. If
                                                    you lease or don’t have a car, enter ₹0.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">What is the total value of any
                                                other
                                                assets?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->other_assets_value; ?>"
                                                    placeholder="₹" name="other_assets_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Include equity in businesses, annuities
                                                    and
                                                    trusts, cash value
                                                    of life insurance and any other tangible assets, including
                                                    motorcycles,
                                                    boats, artworks,
                                                    electronics and jewelry.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">What is the current value of your
                                                retirement savings
                                                accounts?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->retirement_savings_value; ?>"
                                                    placeholder="₹" name="retirement_savings_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Include 401(k)s, 403bs, IRAs, annuities
                                                    and
                                                    pension-vested
                                                    benefits.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">How much of your assets are
                                                available
                                                for emergencies?
                                            </div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->emergency_assets_value; ?>"
                                                    placeholder="₹" name="emergency_assets_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>How much they would sell for now, minus
                                                    the
                                                    principal remaining
                                                    on any mortgages. If you don’t own any other properties, enter
                                                    ₹0.</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-12 p-5">
                                        <div class="security">
                                            <div class="heading7 hover-text-blue mb-3">What do I do if I'm below the
                                                benchmark?</div>
                                            <div class="body3 text-secondary mt-20">There's a lot you can do. We can
                                                tell
                                                you more after you
                                                finish entering your information.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <h2>DEBT</h2>
                        <section>
                            <div class="heading3 mt-10">Your Debts</div>
                            <div class="body3 text-secondary mt-20">In this final section, we’ll look at the other side
                                of
                                the ledger:
                                How much you owe.</div>
                            <hr>
                            <div class="mb-5 mt-5">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 col-12">
                                        <div class="row row-gap-20">
                                            <div class="heading7 hover-text-blue mt-3">How much do you owe for mortgages
                                                and
                                                home-equity loans?
                                            </div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->mortgage_loans_value; ?>"
                                                    placeholder="₹" name="mortgage_loans_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Do not include unused lines of
                                                    credit.</i>
                                            </div>

                                            <div class="heading7 hover-text-blue mt-2">How much business debt do you
                                                have?
                                            </div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->business_debt_value; ?>"
                                                    placeholder="₹" name="business_debt_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Include loans for businesses you own
                                                    for
                                                    your own employment or
                                                    for an investment.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">How much do you owe for vehicle
                                                loans?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->vehicle_loans_value; ?>"
                                                    placeholder="₹" name="vehicle_loans_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Include debt on motorcycles and
                                                    recreational vehicles.</i>
                                            </div>

                                            <div class="heading7 hover-text-blue mt-2">How much credit card debt do you
                                                have?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->credit_card_debt_value; ?>"
                                                    placeholder="₹" name="credit_card_debt_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Include only balances that are or will
                                                    be
                                                    outstanding for
                                                    multiple months.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">How much student debt do you owe?
                                            </div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->student_debt_value; ?>"
                                                    placeholder="₹" name="student_debt_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Include loans for any educational
                                                    related
                                                    expenses, but not
                                                    home-equity loans, even if used for tuition and the like.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">How much do you owe for all other
                                                debts?</div>
                                            <div class="col-12 col-sm-12">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->other_debts_value; ?>"
                                                    placeholder="₹" name="other_debts_value" />
                                            </div>
                                            <div class="body3 text-secondary"><i>Include any other unsecured debt,
                                                    including
                                                    medical debt, money
                                                    owed to private individuals, bank or credit union loans and debt
                                                    held
                                                    against mutual funds or
                                                    stocks via margin accounts.</i></div>

                                            <div class="heading7 hover-text-blue mt-2">How much do you spend to pay off
                                                the
                                                above debts?</div>
                                            <div class="col-6 col-sm-7">
                                                <input
                                                    class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                                    type="text" value="< ?= $budget->debt_payment_value; ?>"
                                                    placeholder="₹" name="debt_payment_value" />
                                            </div>
                                            <div class="col-6 col-sm-5">
                                                <select
                                                    class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8"
                                                    name="debt_payment_frequency">
                                                    <option value="Per Year"
                                                        < ?php if ($budget->debt_payment_frequency == "Per Year") echo "selected"; ?>>
                                                        Per Year</option>
                                                    <option value="Per Month"
                                                        < ?php if ($budget->debt_payment_frequency == "Per Month") echo "selected"; ?>>
                                                        Per Month</option>
                                                    <option value="Per Week"
                                                        < ?php if ($budget->debt_payment_frequency == "Per Week") echo "selected"; ?>>
                                                        Per Week</option>
                                                </select>
                                            </div>
                                            <div class="body3 text-secondary"><i>For credit cards, only include sums
                                                    paid to
                                                    reduce outstanding
                                                    balances over the course of multiple months. Don't include amounts
                                                    used
                                                    to pay off credit card
                                                    balances in their entirety each month.</i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-12 p-5">
                                        <div class="security">
                                            <div class="heading7 hover-text-blue mb-3">What do I do if I'm below the
                                                benchmark?</div>
                                            <div class="body3 text-secondary mt-20">There's a lot you can do. We can
                                                tell
                                                you more after you
                                                finish entering your information.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </form>
            </div> -->
            <?php //} ?>
        </div>
    </div>
    <?php echo view('component/front/footer'); ?>
    <!--build:js assets/js/main.min.js-->
    <?php echo view('component/front/script'); ?>
    <!--endbuild-->
    <script>
    var stepFormIndex = 0;
    $(function() {
        var wizard = $("#wizard").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function(e, currentIndex, newIndex) {
                var valid = $('#budget-planning-save-form').valid();
                if (valid) {
                    var form = $("#budget-planning-save-form");
                    var newInput = $('<input>');
                    // Set attributes for the input element if needed
                    newInput.attr('type', 'hidden'); // Example: setting type to text
                    newInput.attr('name', 'steps'); // Set the name attribute
                    newInput.attr('value', currentIndex); // Set the name attribute

                    // Append the input element to the form
                    form.append(newInput);
                    // Submit form input
                    form.submit();
                    return valid;
                }
                stepFormIndex = currentIndex;
            },
            onFinished: function(event, currentIndex) {
                var form = $("#budget-planning-save-form");
                var newInput = $('<input>');
                // Set attributes for the input element if needed
                newInput.attr('type', 'hidden'); // Example: setting type to text
                newInput.attr('name', 'steps'); // Set the name attribute
                newInput.attr('value', currentIndex); // Set the name attribute

                // Append the input element to the form
                form.append(newInput);
                // Submit form input
                form.submit();
            }

        });
        wizard.find('a[href*="#previous"] ').addClass('prev');
        wizard.find('a[href*="#next"] ').addClass('next');
        wizard.find('a[href*="#finish"] ').addClass('next');
    });
    </script>
    <script>
    $('#budget-planning-save-form').validate();


    $("#budget-planning-save-form").ajaxForm({
        // contentType: 'application/json',
        /* beforeSubmit: function() {
            var valid = ₹('#register-form').valid();
            if (valid) {
                // ₹(".spinner-border").removeClass("d-none")
                return valid;
            }
        }, */
        success: function(response) {
            // alert(response?.message);
            if (stepFormIndex == 5) {
                swAlert(response)
            }
            if (response?.type == 'success' && stepFormIndex == 5) {
                window.location.href = "<?= base_url('/') ?>";
            }
            // ₹('#register-form')[0].reset();
            // ₹(".spinner-border").addClass("d-none")
        }
    });
    </script>
</body>

</html>