<script>
jQuery(document).ready(function($){ 
  var selectInput = jQuery( 'form' ).find( 'select[name="'+ base64_encode( 'My Dropdown' ) +'"]').attr('id');
  selectInput = "#"+selectInput;
  $(document).on('change', selectInput, function(e) {
      // Option 1
      if(this.options[e.target.selectedIndex].text == "Daily Milk"){
      jQuery( 'form' ).find( 'input[name="redirect"]' ).val('https://instapage.com');
      // Option 2
      } else if(this.options[e.target.selectedIndex].text == "Daily Vegetables"){
      jQuery( 'form' ).find( 'input[name="redirect"]' ).val('https://help.instapage.com/hc/en-us');
      }
      // Option 3
      else if(this.options[e.target.selectedIndex].text == "Food Delivery"){
      jQuery( 'form' ).find( 'input[name="redirect"]' ).val('www.google.com');
      }
  });
}); 
//ready
</script>
