<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/mocha/1.13.0/mocha.min.js"></script>
<script>
  mocha.setup('bdd');
  var exports = null;
  function assert(expr, msg) {
    if (!expr) throw new Error(msg || 'failed');
  }
</script>-->
<!--<script src="../includes/slideout/test/test.js"></script>-->
<script src="<?php echo $config['site_url']?>includes/slideout/dist/slideout.js"></script>
<script>
  window.onload = function() {
    document.querySelector('.js-slideout-toggle').addEventListener('click', function() {
      slideout.toggle();
	  });
	
    document.querySelector('.menu').addEventListener('click', function(eve) {
      if (eve.target.nodeName === 'A') { slideout.close(); }
	  });
	
    //var runner = mocha.run();
  };
</script>
<script>
  var slideout = new Slideout({
    'panel': document.getElementById('panel'),
    'menu': document.getElementById('menu'),
    'padding': 256,
    'tolerance': 70
  });
</script>