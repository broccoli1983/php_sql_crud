<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style.cssファイルの読み込み -->
    <link rel="stylesheet" href="css/main.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>8COLOGY</title>
</head>

<body>
    <div>
        <nav>
            <ul>
                <li class="menu_top">
                    <a href="#section_top">TOP</a>
                </li>
                <li class="about">
                    <a href="#section_about">ABOUT</a>
                </li>
                <li class="infogra">
                    <a href="＃section_infog">INFOGRAPHICS</a>
                </li>
                <li class="news">
                    <a href="#section_news">NEWS</a>
                </li>
                <li class="access">
                    <a href="#section_access">ACCESS</a>
                </li>
                <li class="contact">
                    <a href="#section_contact">CONTACT</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="background">
        <img src="img/logo.jpeg" alt="main">
        <h1>8COLOGY</h1>
        <a href="user_input.php" class="btn">LOGIN</a>
        <a href="todo_input.php" class="account">新規アカウント登録はこちら</a>
    </div>
    <div class="about">
        <section id="section_about">
            <h3 class=”text_title”><span style="color: green;">ABOUT</span></h3>
            <div class=”text_subtitle_about”>8COLOGYについて</div>
            <div class="text_title_details_about">
                <dl>
                    <dt>8COLOGYは、廃棄プラスチック削減を推進するサービスです。</dt>
                    <!-- <dd>パスタやグラタン、ケーキやサンドイッチ。</dd>
                    <dd>私たちの食卓にはいつもチーズがあった、あの頃の当たり前をこの手で取り戻したい。</dd> -->
                    <dd>世の中のもったいないをなくしたい。</dd>
                    <dd>ごみのでない世界を作りたい。</dd>
                    <dd>大きな時代の変化の中で、廃プラスチックの再生資源化を推進していきたい。</dd>
                    <dd>そんな思いから、「8COLOGY」は歩みを始めています。</dd>
                    <dd>廃棄プラスチックの再生資源化はもちろんのこと、</dd>
                    <dd>エコ活動を推進するためのサービスを提供していきます。</dd>
                </dl>
            </div>
        </section>
    </div>
    <div class="infog">
        <section id="section_infog">
            <h3 class=”text_title”><span style="color: green;">INFOGRAPHICS</span></h3>
            <p>数字でみる8COLOGY</p>
            <h3 class=”text_title”>累計<span style="color: green;">87654321</span>kg</h3>
            <!-- <div>累計<span class="count"">87654321</span>kg</div> -->
        </section>
    </div>
</body>

</html>