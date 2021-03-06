<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Registration Form</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">



  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="styles.css" rel="stylesheet">
</head>

<body class="bg-light">

  <!-- Symbols -->
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="arrow-left-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
    </symbol>

    <symbol id="arrow-right-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
    </symbol>
  </svg>

  <div class="container">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="images/logo.jpeg" alt="" width="450" height="150">
        <h2>Booking portal</h2>
        <p class="lead">If art is to have a special train, the critic must keep some seats reserved on it.</p>
      </div>

      <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Your details</span>
            <span class="badge bg-primary rounded-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Train name</h6>
                <small class="text-muted">Rajdhani express</small>
              </div>
              <span class="text-muted">1234</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Source - Destination</h6>
                <small class="text-muted">surat - diu</small>
              </div>
              <span class="text-muted">300km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Date of booking</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">???$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <button type="submit" class="btn btn-secondary">Redeem</button>
            </div>
          </form>
        </div>
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Registration</h4>
          <form class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

              <div class="col-12">
                <label for="username" class="form-label">Aadhar card</label>
                <div class="input-group has-validation">
                  <input type="text" class="form-control" id="username" placeholder="xxxx xxxx xxxx" required>
                  <div class="invalid-feedback">
                    Your username is required.
                  </div>
                </div>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>

              <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>

              <div class="col-md-3">
                <label for="zip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required onchange="getAddress(this)">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>

              <div class="col-md-4">
                <label for="state" class="form-label">City</label>
                <input type="text" class="form-control" id="city" placeholder="" required disabled>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>

              <div class="col-md-5">
                <label for="country" class="form-label">State</label>
                <input type="text" class="form-control" id="state" placeholder="" required disabled>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>

            </div>

            <hr class="my-4">

            <div class="d-flex gap-5 justify-content-center" id="dropdownFilter">

              <!-- Hidden just for design -->
              <div hidden class="dropdown-menu pt-0 mx-0 rounded-3 shadow overflow-hidden" style="width: 280px;">
                <form class="p-2 mb-2 bg-light border-bottom">
                </form>
              </div>

              <form action="searchTrain.php" method="POST" target="frame">
                <div class="d-flex gap-5 justify-content-center">
                  <p class="p-2 mb-2 bg-light border">
                    <input type="text" name="user_from" id="user_from" class="form-control" autocomplete="false" placeholder="From">
                  </p>
                  <i class="fa-solid fa-arrow-right-arrow-left fa-2x center" style="color:#6c757d;"></i>
                  <p class="p-2 mb-2 bg-light border">
                    <input type="text" name="user_to" class="form-control" autocomplete="false" placeholder="To">
                  </p>
                </div>
                <div class="d-flex gap-5">
                  <p class="p-2 mb-2 bg-light border">
                    <input type="date" name="user_date" class="form-control" autocomplete="false" placeholder="Choose date">
                  </p>
                </div>
                <div class="d-flex gap-5 justify-content-center">
                  <button name="getTrainButton" class="btn btn-primary">Get trains</button>
                </div>
              </form>
            </div>

            <!-- <div class="d-flex gap-5 justify-content" id="dropdownFilter">
              <form class="p-2 mb-2 bg-light border" action="searchTrain.php" method="POST" name="test">
                <input type="date" name="user_date" class="form-control" autocomplete="false" placeholder="Choose date">
              </form>
            </div>

            <div class="d-flex gap-5 justify-content-center" id="dropdownFilter">
              <form action="searchTrain.php" method="POST" name="test">
                <button name="getTrainButton" class="btn btn-primary">Get trains</button>
              </form>

            </div> -->

            <hr class="my-4">

            <div class="d-flex gap-5 justify-content-center">
              <!-- <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0"> -->

                <?php
                // include 'searchTrain.php';
                ?>

<iframe width="1450" height="300" frameborder="0" name="frame"></iframe>

                <!-- <div class="card border-dark mb-3" onclick="print()">
                <div class="card-header">
                  <span class="d-flex justify-content-between ">
                    <span class="card-text">Devnagri express</span>
                    <span class="card-text">1234</span>
                  </span>
                </div>
                <div class="card-body text-dark">
                  <h5 class="card-title">Kanpur - Allahabad</h5>
                  <p class="d-flex justify-content-between align-items-center mb-3">
                    <span class="card-text">00:00:00 - 23:59:59</span>
                    <span class="card-text"><strong>Seats available : </strong><span class="badge bg-primary rounded-pill">3</span></span>
                  </p>
                </div>
              </div> -->
              <!-- </div> -->
            </div>

            <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div> -->

            <hr class="my-4">

            <h4 class="mb-3">Payment</h4>

            <div class="my-3">
              <div class="form-check">
                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                <label class="form-check-label" for="credit">Credit card</label>
              </div>
              <div class="form-check">
                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="debit">Debit card</label>
              </div>
              <div class="form-check">
                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="paypal">PayPal</label>
              </div>
            </div>

            <div class="row gy-3">
              <div class="col-md-6">
                <label for="cc-name" class="form-label">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>

              <div class="col-md-6">
                <label for="cc-number" class="form-label">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>

              <div class="col-md-3">
                <label for="cc-expiration" class="form-label">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>

              <div class="col-md-3">
                <label for="cc-cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Confirm booking</button>
          </form>
        </div>
      </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2020???2022 DOPA70-1</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
  </div>


  <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="form-validation.js"></script>
  <script src="my_modules/pincode.js"></script>
  <script src="index.js"></script>
</body>

</html>