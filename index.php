<!DOCTYPE html>
<html>
<head>
    <title>查询</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- 添加视口元标签 -->
    <link rel="stylesheet" type="text/css" href="css/style.css"> <!-- 外链CSS文件 -->
</head>
<body>
    <div class="container">
        <h1>查询</h1>
        <input type="text" id="content" placeholder="请输入内容">
        <button onclick="checkContent()">查询</button> <!-- 更改按钮文本 -->
        <p id="result"></p>
        <p id="time"></p> <!-- 新元素用于时间 -->
        <p id="update"></p> <!-- 新元素用于显示更新信息 -->
    </div>

    <script src="js/script.js"></script> <!-- 外链JavaScript文件 -->
</body>
</html>
