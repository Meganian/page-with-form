
<!DOCTYPE html>
<html lang="en"><!-- Magdalena Górna - Web developer -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Keywords" content='' />
    <meta name="description" content=''>
    <meta name="author" content="Magdalena Górna">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="y0AGFU49uEACb29VZWvoS3iX70dBbpduLTtRiE2d478" />
    <title>Chop-chop</title>
    <link rel="stylesheet" href="stylesheets/screen.css">
      <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
    <?php
      $colorfromget = "#000000";
      $textfromget = "This is just a sample page";
      if (isset($_GET['color'])) $colorfromget = "#".$_GET['color'];
      if (isset($_GET['text'])) $textfromget = $_GET['text'];
    ?>
  </head>

  <body>
    <div id="wrapper">

        <div class='mobile-navigation-panel section'>
          <a href="#"><img src="img/logo_120x120.png" alt="company-name"></a>
          <div id="hamburger" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
          <div class='menu-open'>=</div>
          <nav class='mobile-nav'>
      
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>
        </div>
        
        <nav class='main-nav section'>
          <ul class='main-nav'>
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li class='logo'><a href="#"><img src="img/logo_120x120.png" alt="company-name"></a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      

      <main>
        <header class='section'>
          <div class='main-header'>
          <!--<a href="?text=New header&color=b321ad"><p>link</p></a>-->
            <h1 style="color:<?php echo $colorfromget;?>"><?php echo $textfromget; ?></h1>
            <button id="push-the-button" class='btn'>push the button</button>
          </div>
        </header>

        <section class='section'>
          <article>
            <h3>A heading title</h3>
            
              <img src="img/image_80x80.png" alt="some-important-info"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nihil unde blanditiis numquam magnam dignissimos veniam. Aut, sed. Rerum ut vitae dicta non eveniet, harum. Doloribus labore facere sunt numquam deleniti ut eum ducimus, ipsum reiciendis voluptate eligendi nihil voluptatem similique veniam enim deserunt totam, ratione voluptatibus beatae dicta ipsam? Rem sed corporis fugit dicta ipsum aut nam odit, rerum molestiae ea.
              <span class='show-more'>Magnam iure expedita obcaecati inventore repellat, rem, blanditiis quam corporis quo animi alias! Sit atque officiis, quasi odio, ipsam blanditiis delectus maiores.</span></p>  
              <span class="read-more">- read more</span> 
                     
          </article>
          <article>
            <h3>A much longer heading title</h3>
            <img src="img/image_80x80.png" alt="some-important-info">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam iure expedita obcaecati inventore repellat, rem, blanditiis quam corporis quo animi alias! Sit atque officiis, quasi odio, ipsam blanditiis delectus maiores. Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class='show-more'>Adipisci quae ullam blanditiis recusandae optio nemo error aspernatur quas molestias tempora veniam sequi, eligendi placeat labore nulla accusamus architecto consectetur similique rerum animi, illo nam maxime eveniet illum! Ea doloribus praesentium ducimus mollitia, earum, fugiat tempora facilis recusandae sit nisi maxime.</span></p>  
            <span class="read-more">- read more</span>  
            
          </article>
          <article>
            <h3>A heading title</h3>
            <img src="img/image_80x80.png" alt="some-important-info">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus aliquid aspernatur, eaque sapiente sit iusto dignissimos soluta, ut sunt laborum quis quo officiis. Eaque assumenda facere omnis reprehenderit nesciunt excepturi explicabo sed placeat nisi itaque est incidunt nam, pariatur, magnam odio unde possimus repellat, commodi natus neque. Quam aliquid ab recusandae aspernatur cumque illum officia odit laboriosam. <span class='show-more'>Vero pariatur laborum dolor eum asperiores ipsam, eaque sit alias, doloremque vitae iure quasi placeat consequuntur perferendis reiciendis. Vero eaque repellat modi nobis officiis excepturi aliquid in ratione voluptates tempore ad inventore quasi dolorem temporibus error veritatis et laborum, soluta obcaecati ipsam nemo..</span></p>  
            <span class="read-more">- read more</span>  
            
          </article>
        </section>
        <div class='section form-section'>
        <div class="message"></div>
          <form method="post" action="post.php" id='form' class='form'>
          <h2>Contact us</h2>
            <fieldset>
              <input type="text" name="name" placeholder='name'>
              <input type="text" name="email" placeholder='e-mail'>
              <input type="text" name="phone" placeholder='phone'>
            </fieldset>
            <fieldset>
              <textarea name="message" placeholder='your message'></textarea>
            </fieldset>
            <button id="submit" name="submit" type='submit' class='btn'>send message</button>
          </form>
        </div>

        <footer class="main-footer section">
          <div class='footer-wrapper'>
            <nav class='footer-nav'>
              <ul>
              <div>
                <li><a href="#">home</a></li>
                <li><a href="#">products</a></li>
              </div>
              <div class="right">
                <li><a href="#">about us</a></li>
                <li><a href="#">contact</a></li>
              </div>  
              </ul>
            </nav>
            <div class='social-media'>
              <p class='back-to-top'>back to top</p>
              <div class="circle twitter"></div>
              <div class="circle fb"></div>
            </div>
            <div class='copyright'>
              <p>Copyright &copy; 2010 Sample & Pack, Inc.</p>
            </div>
          </div>
        </footer>

      </main>

    </div>

    <!-- =======================JavaScript============================== -->
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script>

    $(document).ready(function($) {


// navigation active 
      $('.main-nav').find('li').on('click', function() {
        $(this).parent().children().css({'border-bottom':'none'}).find('a').css({'color':'black',
          'border-bottom':'none'
      });
        $(this).css({'border-bottom':'1px solid #2cece2'}).find('a').css({'color':'#bdbdbd'});
      });


// mobile navigation active 
      var hamburger = $('#hamburger');
      var mobileNav = $('.mobile-nav');

      hamburger.on('click', function(){
        mobileNav.toggleClass('open');
        hamburger.toggleClass('open');
      });

// scroll top
//po pryzpisaniu i wywołaniu zdarzdenia, scrollTop określi ilość pixeli o jaką zostanie przesunięty widok
      $('.back-to-top').on('click', function() {
        $('html, body').animate({
          scrollTop: $('body').offset().top
        }, 800);
      });

// load content. 
//Znajduje element o nazwie klasy .read-more, przypisuje zdarzenie "click" po wywyłoaniu, którego wyświetla całą treść tagu p oraz ukrywa informację "show-info"
      $('article').find('.read-more').on('click', function() {
        $(this).parent().find('p').find('span').css('display','inline');
        $(this).css('display', 'none');
      });
    

// change text
//Po wywołaniu zdzrzenia click, w tekscie zostanie podieniony element odpowiadający rzypisany do wyrażania regularnego, za pomocą funkcji css zmieni się kolor, a funkcja setTimeout określi na jaki czas zajdzie zmiana
      $('#push-the-button').on('click', function() {

        var texts =  $('article').find('p');
        var searchingText = 'ipsum';
        var exp = '/'+searchingText+'/ig';
        var newText = "<em class='tempSpan'>"+searchingText+"</em>";
        
        texts.each(function(txt){  
          var newSentence = $(this).text().replace(searchingText, newText);
          $(this).html(newSentence);
          $('article').find('.read-more').css('display', 'none');
          function backToStandard(){
            $('.tempSpan').css('color','black');
          }
          setTimeout(backToStandard, 3000);       
        });        
      });


// form
      $('#form').submit(function(e){
        e.preventDefault();
        var form = $(this);
       
        $.ajax({

          'url' : form.attr('action'),
          'type' : 'post',
          'dataType' : 'json',
          'data' : form.serialize(),
          'success': function(response) {
            if(response.success) {

              (function showFormData() {

                var formInputNames = $('#form > fieldset').children();
                var arr = [];

                formInputNames.each(function(item){
                  console.log($( this ).attr('name')); 
                  var n = $( this ).attr('name')+': '+$(this).val()+', ';
                  arr.push(n);
                }); 

                $('.message').html('Dziękujemy za wysłanie formularza z następującymi danymi:').append(arr); 
                $('form').remove(); 
                $('.form-section').css('height','350px');     
                
             })();

            } else {

              $('form').remove();
              $('.form-section').css('height','350px');
              $('.message').html('Brak danych do wyświetlenia');

            }           
          },
        });
      });




    });


    </script>
  </body>
</html>
