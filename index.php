<?php get_header(); ?>

  <main>
    <section class="section">
      <div class="section_inner">
        <div class="section_header">
          <h1 class="heading heading-primary"><span>最新情報</span>NEWS - <?php wp_title(''); ?></h1>
        </div>

        <div class="archive">
          <div class="archive_category">
            <h2 class="archive_title">カテゴリー</h2>
            <ul class="archive_list">
              <li class="current-cat"><a href="#">お知らせ</a></li>
              <li><a href="#">コラム</a></li>
            </ul>
          </div>

          <div class="archive_yealy">
            <h2 class="archive_title">年別</h2>
            <ul class="archive_list">
              <li><a href='#'>2023</a></li>
              <li><a href='#'>2022</a></li>
            </ul>
          </div>
        </div>

        <div class="section_body">
            <div class="cardList">

            </div>
          </div>

      </div>
    </section>
  </main>

<?php get_footer(); ?>