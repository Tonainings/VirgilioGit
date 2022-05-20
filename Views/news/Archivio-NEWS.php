
    <section class="u-clearfix u-section-1" id="sec-2c0a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">


          <?php
          
          if (! empty($news) && is_array($news)): 

            foreach ($news as $news_item):
              echo "<div class=\"u-container-style u-list-item u-repeater-item\">";
              echo "<div class=\"u-container-layout u-similar-container u-container-layout-1\">\"";
              echo "<h1 class=\"u-text u-text-1\"><?= esc($news_item['title']) ?></h1>";
              echo "<p class=\"u-text u-text-2\"><?= esc($news_item['text']) ?></p>";
              echo "<h3><?= esc($news_item['slug']) ?></h3>";
              echo "</div>";
              echo "</div>";
              
            endforeach;

          else: 

              echo "<div class=\"u-container-style u-list-item u-repeater-item\">";
              echo "<div class=\"u-container-layout u-similar-container u-container-layout-1\">\"";
              echo "<h1 class=\"u-text u-text-1\">No NEWS</h1>";
              echo "<p class=\"u-text u-text-2\">Unable to find any news for you.</p>";    
              echo "</div>";
              echo "</div>";

          endif 
          ?>            

          </div>
        </div>
      </div>
    </section>
    
    