
   <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script> 
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


<script>
    $( document ).ready(function() {
     
      var active = "<?= $menu ?>";


     if(active == "home"){
        $('#home').addClass('active');
     }
    });

     

</script>
</body>

</html>