
   <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script> 
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


<script>
    $( document ).ready(function() {
     
      var active = "<?= $menu ?>";


     if(active == "Home"){
        $('#home').addClass('active');
     }else if(active == 'Contact'){
     	 $('#contact').addClass('active');
     }else if(active == 'About'){
     	 $('#about').addClass('active');
     }
    });

     

</script>
</body>

</html>