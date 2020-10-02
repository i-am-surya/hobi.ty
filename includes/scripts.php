<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Sweet Alert JavaScript -->
<script src="js/sweetalert.min.js"></script>

<?php

  if (isset($_SESSION['status']) && $_SESSION['status'] != '')
  {

?>

  <script>
    swal({
      title: "<?php echo $_SESSION['status']; ?>",
      icon: "<?php echo $_SESSION['status_code']; ?>",
      button: " Ok ",
    });
  </script>

<?php
  unset($_SESSION['status']);
}
?>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>