
<!DOCTYPE html>
<html lang="en">
    <html lang="ja">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>フライヤー、ポスター、看板、ロゴのデザイン| WMOデザイナーオフィス</title>
            <meta name="description"　content="フライヤー、ポスター、看板、ロゴの制作"> 
            <meta name="keyword"　content="フライヤー,ポスター,看板,ロゴ,ホームページ,飲食店,チラシ,広告"> 
            <link rel="stylesheet" href="../CSS/style.css">
            <script src="https://kit.fontawesome.com/4ed941af9e.js" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        </head>
<body>
<div id="top_wrapper">
        <!-- header ここから -->
        <header id="header_wrapper">
            <h1>フライヤー、ポスター、看板、ロゴのデザイン｜WMOデザイナーオフィス</h1>
            <div class="header_wrapper">
                <a href=../index.html><img src="../images/logo_wmo2.png" alt="WMOロゴ" id="header_logo"></a>
                <p class="inquiry_form"><a href="/form/index.html"><i class="fas fa-phone-square"></i><i class="fas fa-envelope"></i><span>まずはご相談</span></a></p>
                <input id="menu" type="checkbox">
                <label for="menu"><i class="fas fa-bars" id="bars"></i></label>
                <label for="menu" class="back"></label>
                <label for="menu" class="close">x</label>
                <nav>
                    <ul>
                        <li><a href="../index.html#works-wrapper">Works</a></li>
                        <li><a href="..index.html#flow-wrapper">制作の流れ</a></li>
                        <li><a href="../index.html#price-wrapper">Price</a></li>
                        <!-- <li><a href="#news">News</a></li> -->
                        <li><a href="../profile/index.html">About us</a></li>
                        <div class="clearfix"></div>
                    </ul>
                </nav>

            </div>
        </header>
        <!-- header ここまで -->
           <!-- 問合せここから -->
        <div id="form-wrapper">
            
                <h2>デザインに関するお問い合せはこちらからお受けしております。</h2>
                <div id="form-containner"></div>
                    <p class="form-description">WMOデザイナーオフィスでは、お客様の理想とするデザインに限りなく近くことができるように
                    事前にしっかりとしたヒアリングを行っております。お客様の「こうしたい！」「ああしたい！」を
                    是非私たちにご相談ください。御見積もりやご相談は無料です。
                    </p>
                    <h3><i class="fas fa-phone-volume"></i>お電話でのお問い合わせはこちらへ</h3>
                        <div class="form-description">
                            <p id="tel-no">070-6638-0969</p>
                            <p id="tel-time">[電話の受付時間] 9:00~19:00</p>
                            <p>タイミングによっては電話に出られないこともございますが、必ず折り返しのご連絡をさせて頂きますのでお名前とご連絡先を留守電に入れておいて頂けると助かります。</p>
                        </div>
                    <h3><i class="fas fa-envelope-open-text"></i>メールでのお問い合わせ</h3>
                    <p class="form-description">こちらのメールアドレス<span id="email-address">lunguprecords@gmail.com</span>に直接ご連絡頂くか下記の問い合わせフォームに必要事項をご記入の上、送信お願い致します。</p>
                        <form action="confirm.php" method="POST">
                            <dl>
                                <dt>お名前</dt>
                                <dd>
                                    <input type="text" name="your-name">
                                </dd>
                                <dt>メールアドレス</dt>
                                <dd>
                                    <input type="text" name="your-adress">
                                </dd>
                                <dt>お電話番号</dt>
                                <dd>
                                    <input type="text" name="tel">
                                </dd>
                                <dt>デザインの種類<br>
                                    ご検討中のデザイン物の種類をお選び下さい。
                                </dt>
                                <dd>
                                    <ul>
                                        <li><input type="checkbox" name="flyer" value="flyer" class="design-type"><label for="flyer">flyer・販促物</label></li>
                                        <li><input type="checkbox" name="poster" value="poster" class="design-type"><label for="poster">ポスター</label></li>
                                        <li><input type="checkbox" name="logo" value="logo" class="design-type"><label for="logo">ロゴ</label></li>
                                        <li><input type="checkbox" name="billboard" value="billboard" class="design-type"><label for="billboard">看板</label></li>
                                        <li><input type="checkbox" name="others" value="others" class="design-type"><label for="others">その他</label></li>
                                    </ul>
                                </dd>
                                <dt>ご相談内容</dt>
                                <dd>
                                    <textarea cols="100" rows="20" name="contents"></textarea>
                                </dd>
                            </dl>
                            <input type="submit" value="送信" value="確認画面へ">
                    </form>
                    <!-- footer ここから -->
                    <footer>
                        <nav>
                            <ul class="containner"> 
                                <li><a href="../index.html#works-wrapper">Works</a></li>
                                <li><a href="../index.html#flow-wrapper">Process</a></li>
                                <li><a href="../index.html#price-wrapper">Price</a></li>
                                <li><a href="../index.html#news-wrapper">News</a></li>
                                <li><a href="index_profile.html">About us</a></li>
                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                        <p class="copyright">WMOデザイナーオフィス</p>
                    </footer> 
                    
                    <!-- footer ここまで-->
        </div>
    </div>
    <script type="text/javascript" src="monge5.js" ></script>
</body>
</html>