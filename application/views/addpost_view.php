<?php
  $left_sb_name = 'article';
  ?>

<div id="wrapper" style="background-image: linear-gradient(white 50%, white 80%);">
  <div class="plsaddposter">Добавьте Постер</div>
  <div id="page">

    <div id="content">

      <form class='addpost' id="articleForm" method="POST" action="/blog/query_addpost" enctype="multipart/form-data">



          <div id="poster-settings">
              <span class="bold-text">Poster settings</span><br>
              <input type="file" id='poster' name="poster"><br>
              <div class="hided" id="hided-settings">
                Height for poster
                <input type="range" min="0" max="500" name="height_for_poster" style="width:98%;" step="0.5" value="0" id="height_for_poster" onchange="changeHeightForPoster()"><br>
                Background Color<br>
                <div class="colorpicker"></div>
                <input type="text" name="bg-color" style="width:90%;" value="inherit" id="bg-color" onchange="changeBgColor()" placeholder="Цвет фона"><br>
              </div>
            </div>





          <input type="text" name="name" id="name" placeholder="Имя" width="100%" maxlength="100" title="Не менее 4 и неболее 20 латынских символов или цифр." required><br>
          <select  name="category" id="category">
            <option disabled selected>Выберите категорию</option>
                <?php
                  $i = $data['catsnum'] - 1;

                  while($i >= 0) {
                      echo '<option value="'.$data['categories'][$i]['URL'].'">'.$data['categories'][$i]['name'].'</option>';
                      $i--;
                  }
                ?>
          </select>
          <textarea name="short_desc" rows="8" cols="80" placeholder="Короткое описание" class="short_desc"></textarea>
          <div class="main-input" id="article" name="text" contenteditable="true" onclick="checkPlacholder()" required>
            <span class="main-input-placeholder">Вашa статья</span>
          </div>
          <input type="hidden" name="description" id="articleHided">
          <input type="text" name="tags" id="tags" placeholder="Теги" title="Теги через запятую." required><br>
          <input type="hidden" name="imagesNumber" id="imagesNumber" value="0">
          <input type="hidden" name="save-as-draft" id="save-as-draft" value="0">
          <input type="submit" name="enter" class="form-button green" value="Сохранить черновик" onclick="addPost(1)">
          <input type="submit" name="enter" class="form-button fl-r" value="Сохранить" onclick="addPost(2)">
        </form>
    </div>
  </div>

</div>


<div class="form-buttons-container">
  <div class="additional-button" id="add-image" title="add image">
    image
  </div>
  <div class="additional-button" id="add-video" title="add video">
    video
  </div>
  <div class="additional-button" id="add-quote" title="add quote">
    quote
  </div>
  <div class="additional-button" id="add-code" title="add code">
    code
  </div>
  <div class="additional-button" id="add-link" title="add link">
    link
  </div>
  <div class="additional-button" id="add-h3" title="add h3" style="font-weight:bold;">
    <h3>h3</h3>
  </div>
</div>


<script src="/js/form.js" type="text/javascript"></script>
