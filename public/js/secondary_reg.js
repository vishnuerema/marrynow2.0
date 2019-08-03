var inputlang = document.getElementById("newLang");
    inputlang.addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            document.getElementById("langBtn").click();
        }
    })

     var inputIntrs = document.getElementById("newIntr");
    inputIntrs.addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            document.getElementById("intrBtn").click();
        }
    });

         var inputHobb = document.getElementById("newHobb");
         inputHobb.addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            document.getElementById("martialBtn").click();
        }
    });


         var inputsport = document.getElementById("newsport");
         inputsport.addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            document.getElementById("sportBtn").click();
        }
    });

          var inputmusc = document.getElementById("newmusic");
          inputmusc.addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            document.getElementById("muscBtn").click();
        }
    });

              var inputfood = document.getElementById("newfood");
              inputfood.addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            document.getElementById("foodBtn").click();
        }
    });
  

  var inputmartial = document.getElementById("newmartial");
              inputmartial.addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            document.getElementById("martialBtn").click();
        }
    });


    /*  var inputoccuption = document.getElementById("newoccuption");
    inputoccuption.addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            document.getElementById("occpBtn").click();
        }
    })*/