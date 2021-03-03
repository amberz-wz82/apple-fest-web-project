<?php include("includes/init.php");

// set up values for user inputs
$name = '';
$date = '';
$feedback = '';
$issues = '';
$email = '';

// set up sticky values for user inputs
$sticky_name = '';
$sticky_date = '';
$sticky_feedback = '';
$sticky_issues = '';
$sticky_email = '';

// form CSS classes for the form and the confirmation page
$form_css_class = ''; // show form for default
$confirmation_css_class = 'hidden'; // hide confirmation page for default

// set feedback message CSS classes to hidden for default
$name_feedback_class = 'hidden';
$date_feedback_class = 'hidden';
$feedback_feedback_class = 'hidden';
$email_feedback_class = 'hidden';

// Did the user submit the form?
if (isset($_POST["submit"])) {
  // if user submitted

  // Store user's data in variables set up earlier
  $name = $_POST["name"]; // untrusted
  $date = $_POST["date"]; // untrusted
  $feedback = $_POST["feedback"]; // untrusted
  $issues = $_POST["issues"]; // untrusted
  $email = $_POST["email"]; // untrusted

  // Set form's validity to TRUE for default
  $form_valid = TRUE;

  // name is required. Is it empty?
  if ( empty($name) ) {
    // if name is empty
    $form_valid = FALSE; // set form validity to false
    $name_feedback_class = ''; // show name input's feedback message
  }
  // date is required. Is it empty?
  if ( empty($date) ) {
    // if date is empty
    $form_valid = FALSE; // set form validity to false
    $date_feedback_class = ''; // show date input's feedback message
  }
  // feedback is required. Is it empty?
  if ( empty($feedback) ) {
    // if feedback is empty
    $form_valid = FALSE; // set form validity to false
    $feedback_feedback_class = ''; // show feedback input's feedback message
  }
  // email has to be valid. Is it valid?
  if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
    // if email is not valid
    $form_valid = FALSE; // set form validity to false
    $feedback_feedback_class = ''; // show email input's feedback message
  }

  if ($form_valid) {
    // if form is valid
    $confirmation_css_class = ''; // show confirmation page
    $form_css_class = 'hidden'; // hide the feedback form
  } else {
    // if form is invalid, set sticky values
    $sticky_name = $name;  // tainted
    $sticky_date = $date; // tainted
    $sticky_feedback = $feedback; // tainted
    $sticky_issues = $issues; // tainted
    $sticky_email = $email; // tainted
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Apple Harvest Festival</title>

  <link rel="stylesheet" type="text/css" href="styles/theme.css" media="all"/>
</head>
<body>
    <?php include("includes/header.php"); ?>

    <?php include("includes/nav.php"); ?>

    <h2 class="title">Feedback Form</h2>

    <section class="confirmation <?php echo $confirmation_css_class; ?>">
      <h3 class="alignMiddle">Feedback Submission Confirmation</h3>
      <p>Thank you <strong><?php echo htmlspecialchars($name); ?></strong>! Your opinion is very valuable to us, and we can't wait to read your feedback about improving our future Apple Festivals!</p>
      <p>If you experienced any issues at the festival, don't worry! We will contact you within the next 24 hours through email.</p>
    </section>

    <section class="<?php echo $form_css_class; ?>">
      <h3 class="alignMiddle">Please provide any feedback you have for us!</h3>
      <p class="red alignMiddle">*Required Field</p>

      <form id="feedbackForm" method="post" action="form.php" novalidate>
        <div id="nameFeedback" class="feedback hidden red <?php echo $name_feedback_class; ?>">*Please enter your full name.</div>
        <div class="label-input-pair">
          <label for="name" class="middleLabel">*Name:</label>
          <input type="text" name="name" id="name" value = "<?php echo htmlspecialchars($sticky_name); ?>" required/>
        </div>

        <div id="dateFeedback" class="feedback hidden red <?php echo $date_feedback_class; ?>">*Please enter a date between 9/28/2020 and 10/04/2020.</div>
        <div class="label-input-pair">
          <label for="date" class="middleLabel">*Date of Visit:</label>
          <input type="date" name="date" id="date" value = "<?php echo htmlspecialchars($sticky_date); ?>" required/>
        </div>

        <div id="experienceFeedback" class="feedback hidden red <?php echo $feedback_feedback_class; ?>">*Please give us any feedback about the festival.</div>
        <div class="label-input-pair">
          <label for="experience">*Tell us what you enjoyed/what we can improve on the festival or this site (transportations, navigation, customer experiences, etc.):</label>
          <textarea cols="36" rows="8" id="experience" name="feedback" required><?php echo htmlspecialchars($sticky_feedback); ?></textarea>
        </div>

        <div class="label-input-pair">
          <label for="issues">Were there any issues that you encountered and would like further assistance?</label>
          <textarea cols="36" rows="8" id="issues" name="issues"><?php echo htmlspecialchars($sticky_issues); ?></textarea>
        </div>

        <div id="emailFeedback" class="feedback hidden red <?php echo $email_feedback_class; ?>">Please enter a valid email address.</div>
        <div class="label-input-pair">
          <label for="email">If you wish to be contacted about your issue, enter your email:</label>
          <input type="email" name="email" id="email" value = "<?php echo htmlspecialchars($sticky_email); ?>"/>
        </div>

        <button type="submit" name="submit" id="submit">Submit</button>
      </form>
    </section>

    <?php include("includes/footer.php"); ?>

</body>
</html>
