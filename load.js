  $(document).ready(function() {
      $("#fah").load("fahrten.php");
      var refreshId = setInterval(function() {
          $("#fah").load('fahrten.php');
	}, 1000);
    });

  $(document).ready(function() {
      $("img#fahdia").load("fahrtdia.php");
      var refreshId = setInterval(function() {
          $("img#fahdia").attr('src','fahrtdia.php?'+new Date().getTime());
	}, 1000);
    });

  $(document).ready(function() {
      $("#pwe").load("showpog.php");
      var refreshId = setInterval(function() {
          $("#pwe").load('showpog.php');
	}, 1000);
    });
  $(document).ready(function() {
      $("img#pdi").load("durchsdia.php");
      var refreshId = setInterval(function() {
          $("img#pdi").attr('src','durchsdia.php?'+new Date().getTime());
	}, 1000);
    });

  $(document).ready(function() {
      $("#vssh").load("showvs.php");
      var refreshId = setInterval(function() {
          $("#vssh").load('showvs.php');
	}, 1000);
    });
  $(document).ready(function() {
      $("img#vs1dia").load("vs1dia.php");
      var refreshId = setInterval(function() {
          $("img#vs1dia").attr('src','vs1dia.php?'+new Date().getTime());
	}, 1000);
    });
  $(document).ready(function() {
      $("img#vs2dia").load("vs2dia.php");
      var refreshId = setInterval(function() {
          $("img#vs2dia").attr('src','vs2dia.php?'+new Date().getTime());
	}, 1000);
    });
  $(document).ready(function() {
      $("img#vs3dia").load("vs3dia.php");
      var refreshId = setInterval(function() {
          $("img#vs3dia").attr('src','vs3dia.php?'+new Date().getTime());
	}, 1000);
    });
  $(document).ready(function() {
      $("img#vs4dia").load("vs4dia.php");
      var refreshId = setInterval(function() {
          $("img#vs4dia").attr('src','vs4dia.php?'+new Date().getTime());
	}, 1000);
    });
  $(document).ready(function() {
      $("img#vs5dia").load("vs5dia.php");
      var refreshId = setInterval(function() {
          $("img#vs5dia").attr('src','vs5dia.php?'+new Date().getTime());
	}, 1000);
    });
