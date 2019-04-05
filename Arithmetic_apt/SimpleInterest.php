<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <!-- Bootstrap CSS CDN -->
      <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css' integrity='sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4' crossorigin='anonymous'>
      <!-- Our Custom CSS -->
      <link rel='stylesheet' href='style5.css'>

      <!-- Font Awesome JS -->
      <script defer src='https://use.fontawesome.com/releases/v5.0.13/js/solid.js' integrity='sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ' crossorigin='anonymous'></script>
      <script defer src='https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js' integrity='sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY' crossorigin='anonymous'></script>

          <style>p{color: black;}</style>
</head>

<body>

    <?php include 'ar_sidebar.php' ?>

          <h3><strong>Simple Interest</strong></h3>
          <ul>
          <li>Interest is a fee paid by a borrower of assets to the owner as a form of compensation for the use of the assets. It is most commonly the price paid for the use of borrowed money, or money earned by deposited funds.</li>
          <li>When money is borrowed, interest is typically paid to the lender as a percentage of the principal, the amount owed to the lender. The percentage of the principal that is paid as a fee over a certain period of time (typically one month or year) is called the interest rate.</li>
          <li>There are three components to calculate simple interest: principal (the amount of money borrowed), interest rate and time.</li>
          </ul>
          <p> </p>
          <p><strong>Formula for calculating simple interest:</strong></p>
          <p>S.I. = (PxRxT)/100</p>
          <p>Where,</p>
          <p>I = interest</p>
          <p>P = principal</p>
          <p>R = % interest rate (per year)</p>
          <p>T = time (in years or fraction of a year)</p>
          <p> </p>
          <p><strong>Note:</strong> rearrange these terms to find out the variable as per need. </p>
          <p> </p>
          <p>Example:</p>
          <p> Akash borrowed ₹10,000 from the bank to purchase a TV. He agreed to repay the amount in 8 months, plus simple interest at an interest rate of 10% per annum (year). If he repays the full amount of ₹ 10,000 in eight months, the interest would be:</p>
          <p>Ans:</p>
          <p>P = ₹ 10,000</p>
          <p>r = 10 (10% per year) </p>
          <p>t = 8/12 (this denotes the fraction of a year)</p>
          <p> </p>
          <p>Applying the above formula, interest would be</p>
          <p>I = ₹ [10,000*(10)*(8/12)]/100</p>
          <p>I = ₹ 667</p>
          <p>If he repays the amount of ₹ 10,000 in fifteen months, the only change is with time. Therefore, his interest would be:</p>
          <p>I = ₹ [10,000*(10)*(15/12)]/100</p>
          <p>I = ₹ 1,250</p>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>
