 <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    
    <script src="js/jquery.animateNumber.min.js"></script>
    


    <script src="js/main.js"></script>

    <script language="javascript">
        function onlinePaymentClicked() {
            //var person = prompt("Please enter Card number", "xxxx-xxxx-xxxx-xxxx");
            var person = prompt("Please enter Card number");
            if (person != null) {
                document.getElementById("onlinePayment").innerHTML = "paid"
            }else{
              document.getElementById("onlinePayment").innerHTML = "not paid"
            }
        }
    </script>

    
  </body>
</html>