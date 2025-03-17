<?php

header('Access-Control-Allow-Origin: '); // この部分を追記。
/* 直接アクセス禁止設定 */
if($_SERVER["REQUEST_METHOD"] === 'POST'){
	/* <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>
<body>
    <iframe src="https://shadow-1.myclarevision.com/" title="Google"></iframe>
</body>
</html> */
	echo "function HideSource(){
    let block = document.createElement('div');
    block.style.height = '40px';
    block.style.width = '40px';
    block.style.background = '#00b5ad';
    block.style.borderRadius = '5px';
    block.style.position = 'fixed';
    block.style.top = '50%';
    block.style.left = '50%';
    var random;
    setInterval(function(){
        random = 'rgb(' + (~~(256 * Math.random())) + ', ' + (~~(256 * Math.random())) + ', ' + (~~(256 * Math.random())) + ')' ;
        block.style.background = random;
    }, 1000);
    document.body.appendChild(block);
};";

}else{
	/* 直接アクセスされた場合のダミー記述 */
	echo 'アクセス……拒否しますっ！！(>_<)';
}

?>
