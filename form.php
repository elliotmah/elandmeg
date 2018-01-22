<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <script type="text/javascript" src="https://use.typekit.net/hqe8byh.js"></script>
  <script type="text/javascript">
    try {
      Typekit.load({
        async: true
      });
    } catch (e) {}
  </script>
  <script type="text/javascript"
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="/js/all.js"></script>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="/css/tachyons.css">
  <link rel="stylesheet" type="text/css" href="http://unpkg.com/tachyons-rotations@1.0.4/css/tachyons-rotations.min.css" />
  <title>RSVP – El &amp; Meg's Wedding</title>
</head>
<body>
<main class="pa4 black-80">
  <form class="measure center" action="https://www.getform.org/f/7ed1ae30-6e41-4b39-9ae8-8fef9016e8f8" method="POST" enctype="multipart/form-data" autocomplete="on">
    <fieldset id="sign_up" class="ba b--transparent ph0 mh0">
      <legend class="f4 fw6 ph0 mh0">RSVP</legend>
      <div class="mt3">
        <label class="db fw6 lh-copy f6" for="contactName">What is your name?</label>
        <input class="pa2 input-reset bg-transparent hover-bg-black hover-white w-100" type="text" name="contactName"  id="contact-name" placeholder="John Smith" required>
      </div>
      <div class="mt3">
        <label class="db fw6 lh-copy f6" for="email">What is your email address?</label>
        <input class="pa2 input-reset bg-transparent hover-bg-black hover-white w-100" type="email" name="email"  id="email-address" required>
      </div>
      <div class="mt3 switch-field">
        <div class="mb1 db b fw6 lh-copy f6" for="attending">
          Will you be joining us on our wedding day?
        </div>
        <input class="ba b--black" type="radio" id="attending-yes" name="attending" value="yes" />
        <label class="b" for="attending-yes">Yes</label>
        <input type="radio" id="attending-no" name="attending" value="no" />
        <label class="b ml2" for="attending-no">No</label>
      </div>
      <div class="mt3 switch-field">
        <div class="mb1 db b fw6 lh-copy f6" for="bringingGuests">
          Will you be bringing any guests with you?
        </div>
        <input class="ba b--black" type="radio" id="guests-yes" name="bringingGuests" value="yes" />
        <label class="b" for="guests-yes">Yes</label>
        <input type="radio" id="guests-no" name="bringingGuests" value="no" />
        <label class="b ml2" for="guests-no">No</label>
      </div>
      <div class="mt3 switch-field">
        <div class="mb1 db b fw6 lh-copy f6" for="partySize">
          Besides yourself, how many guests are in your party?
        </div>
        <input class="ba b--black" type="radio" id="size1" name="partySize" value="1" />
        <label class="b" for="size1">1</label>
        <input type="radio" id="size2" name="partySize" value="2" />
        <label class="ml2 b" for="size2">2</label>
        <input type="radio" id="size3" name="partySize" value="3" />
        <label class="ml2 b" for="size3">3</label>
        <input type="radio" id="size4" name="partySize" value="4" />
        <label class="ml2 b" for="size4">4</label>
        <input type="radio" id="size5" name="partySize" value="5" />
        <label class="ml2 b" for="size5">5</label>

      </div>

      <div class="mt3">
        <label class="db fw6 lh-copy f6" for="firstGuest">Name of the first guest?</label>
        <input class="pa2 input-reset bg-transparent hover-bg-black hover-white w-100" type="text" name="firstGuest"  id="first-guest" required>
      </div>
      <div class="mt3">
        <label class="db fw6 lh-copy f6" for="secondGuest">Name of the second guest?</label>
        <input class="pa2 input-reset bg-transparent hover-bg-black hover-white w-100" type="text" name="secondGuest"  id="second-guest" required>
      </div>
      <div class="mt3">
        <label class="db fw6 lh-copy f6" for="thirdGuest">Name of the third guest?</label>
        <input class="pa2 input-reset bg-transparent hover-bg-black hover-white w-100" type="text" name="thirdGuest"  id="third-guest" required>
      </div>
      <div class="mt3">
        <label class="db fw6 lh-copy f6" for="fourthGuest">Name of the fourth guest?</label>
        <input class="pa2 input-reset bg-transparent hover-bg-black hover-white w-100" type="text" name="fourthGuest"  id="fourth-guest" required>
      </div>
      <div class="mt3">
        <label class="db fw6 lh-copy f6" for="fifthGuest">Name of the fifth guest?</label>
        <input class="pa2 input-reset bg-transparent hover-bg-black hover-white w-100" type="text" name="fifthGuest"  id="fifth-guest" required>
      </div>
      <div class="mt3">
        <label class="db fw6 lh-copy f6" for="dietaryConcerns">Do you or any of your party members have any dietary concerns?</label>
        <input class="pa2 input-reset bg-transparent hover-bg-black hover-white w-100" type="text" name="dietaryConcerns"  id="dietary-concerns" required>
      </div>
    </fieldset>
    <div class="mt3">
      <input class="b ph3 pv2 input-reset ba b--black bg-transparent grow pointer f6 dib" type="submit" value="RSVP">
    </div>
  </form>
</main> 
</body>
</html>
