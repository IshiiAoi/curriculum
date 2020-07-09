<?php
//getData.phpの読み込み
require_once('getData.php');

$welcome_name = new getData();
$welcome=$welcome_name->getUserData();

$info_data=new getData();
$info=$info_data->getPostData();


?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="ress.css">
    <link rel="stylesheet" href="style.css">
<title>第4章チェック課題</title>

</head>
<body>
    <header class="header">
        <div class="header-inner">
            <div class="header-left">
                <img src="yigroup_logo.png" alt="企業ロゴ">
            </div>
            <div class="header-right">
                <div class="header-upper">
                <p class="welocome">ようこそ
                    <?php echo $welcome['last_name'].$welcome['first_name'];?>さん
                    </p>
            </div>
            <div class="header-lower">
                <p class="login">最終ログイン日:<?php echo $welcome['last_login'];?>
            </div>
        </div>
    </header>
    <div class="main">
        <table>
                <tr>
                    <td class="content">記事ID</td>
                    <td class="content">タイトル</td>
                    <td class="content">カテゴリ</td>
                    <td class="content">本文</td>
                    <td class="content">投稿日</td>
                </tr>
                <?php while($row=$info->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td class="row"><?php echo $row['id']; ?></td>
                        <td class="row"><?php echo $row['title']; ?></td>
                        <td class="row"><?php 
                            if($row['category_no']==1){
                                echo "食事";
                                }elseif($row['category_no']==2){
                                    echo "旅行";
                                }else{
                                    echo "その他";
                                }?>
                        </td>
                        <td class="row"><?php echo $row['comment']; ?></td>
                        <td class="row"><?php echo $row['created']; ?></td>
                    </tr>
                <?php } ?>
        </table>
    </div>
    <footer class="footer">
            <h2 class="footer-text">Y&I group.inc</h2>
    </footer>
</body>
</html>