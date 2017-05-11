<footer>
    <section>
        <article>
            <h5>SHOP</h5>
            <hr>
            <ul >
                <li>SHOP</li>
                <li>FIND OUR GOODS</li>
                <li>BLOG</li>
                <li>ABOUT US</li>
            </ul>
        </article>
        <article class="center">
            <h5>ABOUT LITTLE SEED FARM</h5>
            <hr>
            <video width="100%" height="auto" poster="" preload="metadata" controls>
                <source src="./img/video.mp4" type="video/mp4">
            </video>
        </article>
        <article>
            <h5>NEWSLETTER</h5>
            <hr>
            <p>Subscribe to get special offers, free giveawaysand once-in a lifetime deals.</p>
            <form id="formulaire">
                <div id="saisie">
                    <input class="email" type="email" name="email" placeholder="your-email@example.com" required>
                    <input class="nom" type="text" name="nom" value="" placeholder="YOUR NAME" required>
                </div>
                <div>
                    <input class="submit" type="submit" name="submit" value="SUBSCRIBE" required>
                </div>
            </form>
        </article>
    </section>

    <section>
        <ul class ="listfooter">
            <li>©LITTLE SEED FARM 2017</li>
            <li>SEARCH</li>
            <li>CONTACT US</li>
            <li>WHOLESALE</li>
        </ul>
    </section>
</footer>
</main>

<script>
  $(document).ready(function(){
      $("#formulaire").validate();

//       $("#formStep").validate({
//          rules: {
//
//          "email": {
//             "email": true,
//             "maxlength": 255
//          },
//          "nom": {
//             "required": true
//          }
//        });
//   });
        jQuery.extend(jQuery.validator.messages, {
          required: "Merci de saisir votre nom",

          email: "votre email doit contenir un @",

          rangelength: jQuery.validator.format("votre message  doit tenir entre {1} et {20} caractéres."),
});
});
</script>

</body>
</html>
