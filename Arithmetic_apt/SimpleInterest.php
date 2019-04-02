<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style5.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <?php include 'ar_sidebar.php' ?>

            <p><strong>Simple Interest</strong></p>
            <ul>
            <li style="font-weight: 400;"><span style="font-weight: 400;">Interest is a fee paid by a borrower of assets to the owner as a form of compensation for the use of the assets. It is most commonly the price paid for the use of borrowed money, or money earned by deposited funds.</span></li>
            <li style="font-weight: 400;"><span style="font-weight: 400;">When money is borrowed, interest is typically paid to the lender as a percentage of the principal, the amount owed to the lender. The percentage of the principal that is paid as a fee over a certain period of time (typically one month or year) is called the interest rate.</span></li>
            <li style="font-weight: 400;"><span style="font-weight: 400;">There are three components to calculate simple interest: principal (the amount of money borrowed), interest rate and time.</span></li>
            </ul>
            <p>&nbsp;</p>
            <p><strong>Formula for calculating simple interest:</strong></p>
            <p><span style="font-weight: 400;">S.I. = (PxRxT)/100</span></p>
            <p><span style="font-weight: 400;">Where,</span></p>
            <p><span style="font-weight: 400;">I = interest</span></p>
            <p><span style="font-weight: 400;">P = principal</span></p>
            <p><span style="font-weight: 400;">R = % interest rate (per year)</span></p>
            <p><span style="font-weight: 400;">T = time (in years or fraction of a year)</span></p>
            <p>&nbsp;</p>
            <p><strong>Note:</strong><span style="font-weight: 400;"> rearrange these terms to find out the variable as per need. </span></p>
            <p>&nbsp;</p>
            <p><span style="font-weight: 400;">Example:</span></p>
            <p><span style="font-weight: 400;"> Akash borrowed ₹10,000 from the bank to purchase a TV. He agreed to repay the amount in 8 months, plus simple interest at an interest rate of 10% per annum (year). If he repays the full amount of ₹ 10,000 in eight months, the interest would be:</span></p>
            <p><span style="font-weight: 400;">Ans:</span></p>
            <p><span style="font-weight: 400;">P = ₹ 10,000</span></p>
            <p><span style="font-weight: 400;">r = 10 (10% per year) </span></p>
            <p><span style="font-weight: 400;">t = 8/12 (this denotes the fraction of a year)</span></p>
            <p>&nbsp;</p>
            <p><span style="font-weight: 400;">Applying the above formula, interest would be</span></p>
            <p><span style="font-weight: 400;">I = ₹ [10,000*(10)*(8/12)]/100</span></p>
            <p><span style="font-weight: 400;">I = ₹ 667</span></p>
            <p><span style="font-weight: 400;">If he repays the amount of ₹ 10,000 in fifteen months, the only change is with time. Therefore, his interest would be:</span></p>
            <p><span style="font-weight: 400;">I = ₹ [10,000*(10)*(15/12)]/100</span></p>
            <p><span style="font-weight: 400;">I = ₹ 1,250</span></p>
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
