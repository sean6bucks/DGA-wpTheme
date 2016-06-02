<?php
	require(dirname(__FILE__).'/../../../wp-blog-header.php');
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["contact_name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["contact_email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["inquiry_message"]);

        $honeypot = trim($_POST["address"]);
        if (isset($honeypot)) {
        	// avoid bots who will auto-fill hidden inputs
        	exit;
        }
        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Build Additional Information
        $company = trim($_POST["company_name"]);
        $position = trim($_POST["position"]);
        $industry = trim($_POST["industry"]);
        $phone = trim($_POST["contact_phone"]);
        $wechat = trim($_POST["contact_wechat"]);

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "sean6bucks@gmail.com";

        // Set the email subject.
        $subject = "New Inquiry from ".$name;

        // Build the email content.
        $email_content = "Name: ".$name."\n";
        $email_content .= "Email: ".$email."\n\n";
        $email_content .= "Message:\n".$message."\n\n";
        $email_content .= "Additional Information:\n\nCompany: ".$company."\nPosition: ".$position."\nIndustry: ".$industry."\nPhone: ".$phone."\nWeChat ID: ".$wechat;

        // Build the email headers.
        $email_headers = "From: sean6bucks@gmail.com";
		// $email_headers .= "Reply-To: ".$name." <".$email.">";
        // $email_headers = "From: ".$name." <".$email.">";

        // Send the email.
        $ok = wp_mail($recipient, $subject, $email_content, $email_headers);
        if ($ok) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>