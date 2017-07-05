<?php include("header.html"); ?>

<h1> SHOP CITY </h1>

        <section class="json">
            <input id="lecture" type="button" value="SHOW LIST">
       <ul id="zone">


          </ul>

          <script>

              // METHODE AVEC BOUCLE FOR EACH //

              // ----------  DEBUT  ---------- //

              $("#lecture").click(function(){
                  $.getJSON('https://raw.githubusercontent.com/Coda-Wikicoda/Shops-List/master/list.json',function(data){
                      console.log(data);
                    for (let i=0; i<data.length; i++){
                    var afficher = data[i].name + ' ' + data[i].city;
                  $('#zone').append('<p>' + afficher + '</p>');
                    };
                  });
              });

              // ----------- FIN -------------- //


              // METHODE GET JSON POUR RECUPERER LE TABLEAU JSON

              //---------------------  DEBUT 1 ---------------------- //
//
//          $.getJSON('https://raw.githubusercontent.com/Coda-Wikicoda/Shops-List/master/list.json',function(data){
//
//            $.each(data,function(index,d){
//// each est une boucle jquery qui correspond au for each en JS //
//              $('#zone').append('<li><b>' + d.name + ' </b>: ' + d.city + '</li>' );
//// append pour ecrice dans la page html
//           });
//         });

          // CI-DESSOUS LA FONCTION POUR CACHER ET REMONTRER

              $('#zone').hide()

                $('#lecture').on('click', function(){
                  $(this).toggleClass('active');
                  $('#zone').slideToggle(700);
                       });

// ON PEUT CI DESSOUS UTILISER UNE FONCTION POUR AJUSTER LE CSS

                       function centrerElementAbsolu(element)
             {
             	var largeur_fenetre = $(window).width();
             	var hauteur_fenetre = $(window).height();

             	var haut = (hauteur_fenetre - element.height()) / 2 + $(window).scrollTop();
             	var gauche = (largeur_fenetre - element.width()) / 2 + $(window).scrollLeft();
             	element.css({position: 'absolute', top: haut, left: gauche});
             }

             // -------------------------- FIN 1 -------------------------------- //

// AUTRE METHODE AVEC AJAX

              // ---------------------------- DEBUT 2 ----------------------------- //

//           $("#lecture").click(function(){
//              $.ajax({
//                 url : 'list.json',
//                 type : 'get',
//                 dataType : 'json',
//                success: function (data) {
//                $.each( data,function(index ,d){
//                $('#zone').append('<li><b>' + d.name + ' </b>: ' + d.city + '</li>' );


//                  });
//                },
//                error : function() {
////                  $('#zone').html('ERROR !!!!!!!!!!!!!!!!!!!!!');
//                }
//              });
//            });
//
//                       // ---------------------------- FIN 2 ----------------------------- //



          </script>
        </section>
      <?php include("footer.html"); ?>
