<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-inner row">

    <!-- Left sidebar -->

    <div id="component" class="span12">
        <!-- Breadcrumbs -->

        <!-- Content-top -->


        <div id="system-message-container">
            <div id="system-message">
            </div>
        </div>
        <div class="page page-contact page-contact__">

            <!-- Heading -->
            <div class="page_header">
                <h3><span class="item_title_part0">Contacts</span> </h3>      </div>

            <!-- Contact name -->

            <!-- Category -->

            <!-- Category With link -->

            <!-- Contact list -->

            <!-- TABS Contact details -->



            <!-- PLAIN Contact Details -->




            <div class="row-fluid">

                <!-- CONTACT FORM -->


                <!-- Map -->
                <div class="span12">
                    <div class="contact_map" id="contact_map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=cdju4Bzu6Vqq_xtDanimsxE07XGU__Sv&amp;height=360&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
                    </div>
                </div>


            </div>

            <div class="row-fluid">


                <!-- Address -->
                <div class="span3">


                    <div class="contact_details">


                        <div class="contact_details_item">

                            <h3>			Address:		</h3>
                            <i class="icons-marker icon-home"></i>
                            <div class="contact_address">
                                138 Atlantis Ln<br/>

                                Kingsport<br/>

                                Illinois
                                121164<br/>

                            </div>
                        </div>

                        <div class="contact_details_item">
                            <h3>		Phones:		</h3>
                            <i class="icons-marker icon-phone"></i>
                            <div class="contact_details_telephone">
                                +1 800 559 6580			</div>
                            <div class="clearfix"></div>

                            <i class="icons-marker icon-print"></i>
                            <div class="contact_details_fax">
                                +1 504 889 9898				</div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="contact_details_item">

                            <h3>			E-mail:		</h3>

                            <i class="icons-marker icon-envelope"></i>
                            <div class="contact_details_emailto">

                                <script type='text/javascript'>
                                    <!--
                                    var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
                                    var path = 'hr' + 'ef' + '=';
                                    var addy33229 = 'm&#97;&#105;l' + '&#64;';
                                    addy33229 = addy33229 + 'd&#101;m&#111;l&#105;nk' + '&#46;' + '&#111;rg';
                                    document.write('<a ' + path + '\'' + prefix + ':' + addy33229 + '\'>');
                                    document.write(addy33229);
                                    document.write('<\/a>');
                                    //-->\n </script><script type='text/javascript'>
                                    <!--
                                    document.write('<span style=\'display: none;\'>');
                                    //-->
                                </script>This email address is being protected from spambots. You need JavaScript enabled to view it.
                                <script type='text/javascript'>
                                    <!--
                                    document.write('</');
                                    document.write('span>');
                                    //-->
                                </script>			</div>
                            <div class="clearfix"></div>
                        </div>


                        <div class="contact_vcard">
                            <i class="muted">Download information as:		      	<a href="/index.php/contacts?format=vcf">
                                    vCard</a>
                            </i>
                        </div>
                        <div class="clearfix"></div>


                    </div>
                </div>


                <!-- Form -->
                <div class="span9">


                    <!-- Misc -->

                    <div class="contact_misc">
                        <h3>              Miscellaneous Information:		</h3>              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. </p>            </div>




                    <div class="contact_form">
                            <fieldset>
                                <!-- <legend></legend> -->
                                <p>
                                    <i class="muted">Send an email. All fields with an * are required.</i>
                                </p>
                                <?php
                                    if (Yii::$app->session->getFlash('contactFormSubmitted')){
                                ?>
                                        <div class="alert alert-success">
                                            Благодарим Вас за обращение к нам. Мы как можно скорее ответить вам.
                                        </div>
                                <?php
                                    }
                                ?>
                                <div class="clearfix"></div>
                                <?php $form = \yii\bootstrap\ActiveForm::begin([
                                    'id' => 'contact-form',
                                    'class' => 'form-validate',
                                    'fieldConfig' => [
                                        'template' => "{label}<div class = 'controls'>{input}{hint}{error}</div>",
                                    ],
                                ]); ?>


                                <div class="row-fluid">
                                    <div class='span4'>
                                        <?= $form->field($model, 'name')->textInput([
                                            'class' => 'required',
                                            'size' => '30',
                                            'required' => 'required',
                                            'aria-required' => 'true'])->label('Name <span class="star">&#160;*</span>', [
                                                'class' => 'required hasTip',
                                                'id' => 'jform_contact_name',
                                                'for' => 'jform_contact_name',
                                                'title' => 'Name::Your name']) ?>
                                    </div>
                                    <div class='span4'>
                                        <?= $form->field($model, 'email')->textInput([
                                            'class' => 'validate-email required',
                                            'size' => '30',
                                            'required' => 'required',
                                            'aria-required' => 'true',
                                            'value' => ''])->label('Email <span class="star">&#160;*</span>', [
                                            'class' => 'required hasTip',
                                            'id' => 'jform_contact_email',
                                            'for' => 'jform_contact_email',
                                            'title' => 'Email::Email for contact']) ?>
                                    </div>
                                    <div class='span4'>
                                        <?= $form->field($model, 'subject')->textInput([
                                                'class' => 'required',
                                                'size' => '60',
                                                'required' => 'required',
                                                'aria-required' => 'true',
                                                'value' => ''])->label('Subject <span class="star">&#160;*</span>', [
                                                'class' => 'required hasTip',
                                                'id' => 'jform_contact_emailmsg',
                                                'for' => 'jform_contact_emailmsg',
                                                'title' => 'Subject::Enter the subject of your message here .']) ?>
                                    </div>
                                </div>

                                <div class="row-fluid">
                                    <div class="span12">
                                        <?= $form->field($model, 'body')->textarea([
                                            'class' => 'required',
                                            'cols' => '50',
                                            'rows'  => '10',
                                            'required' => 'required',
                                            'aria-required' => 'true',
                                            'id' => 'jform_contact_message'])->label('Message <span class="star">&#160;*</span>', [
                                            'class' => 'required hasTip',
                                            'id' => 'jform_contact_message-lbl',
                                            'for' => 'jform_contact_message',
                                            'title' => 'Message::Enter your message here.']) ?>
                                        <div class="control-group">
                                            <div class="controls">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="controls">
                                        <?= Html::submitButton('Send Email', ['class' => 'btn validate btn-primary pull-right', 'name' => 'contact-button']) ?>

                                    <div class="contact_email-copy pull-right">
                                        <label id="jform_contact_email_copy-lbl" for="jform_contact_email_copy" class="hasTip" title="Send copy to yourself::Sends a copy of the message to the address you have supplied.">Send copy to yourself</label>
                                        <span class="checkbox-radio-wrap__inline">
                                            <input type="checkbox" name="contact_email_copy" id="jform_contact_email_copy" value="1" />
                                        </span>
                                    </div>
                                    <?php \yii\bootstrap\ActiveForm::end(); ?>
                                </div>
                            </fieldset>
                    </div>

                </div>






                <!-- MISC INFO -->






            </div>







        </div>


        <!-- Content-bottom -->
    </div>

    <!-- Right sidebar -->
</div>