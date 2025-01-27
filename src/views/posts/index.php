<h2>Посты</h2>

      <?php foreach ($posts as $post):?>
          <div id="">
              <h3><a href="/?c=posts&a=show&id=<?=$post['id']?>"><?=$post['title']?></a></h3>

          </div>

      <?php endforeach; ?>


