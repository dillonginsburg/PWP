<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Dillon Ginsburg <dillon.ginsburg@gmail.com>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//the SendGrid SMTP authorization
$smtpUser = '-- SendGrid USER --';
$smtpSecret = '-- SendGrid SECRET --';

// your Google reCAPTCHA keys here
$siteKey = '6LclZKYUAAAAALptsbdVmqB2e387tp-53GdBBe59';
$secret = '6LclZKYUAAAAAN-_vi_BV_iHRChkDnKA_J5Pl5tY';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = ["dillon.ginsburg@gmail.com", "Dillon Ginsburg"];