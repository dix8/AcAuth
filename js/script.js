function checkContent() {
    var content = document.getElementById('content').value;
    fetch('check.php?content=' + content)
        .then(response => response.text())
        .then(data => {
            if(data === '1') {
                document.getElementById('result').innerText = '已授权';
            } else if(data === '0') {
                document.getElementById('result').innerText = '未授权';
            } else {
                document.getElementById('result').innerText = '';
            }
        });
}

// 新函数用于时间
function updateTime() {
    var now = new Date();
    var year = now.getFullYear(); // 获取年份
    var month = (now.getMonth() + 1).toString().padStart(2, '0'); // 获取月份并添加填充
    var day = now.getDate().toString().padStart(2, '0'); // 获取日期并添加填充
    var hours = now.getHours().toString().padStart(2, '0'); // 添加填充
    var minutes = now.getMinutes().toString().padStart(2, '0'); // 添加填充
    var seconds = now.getSeconds().toString().padStart(2, '0'); // 添加填充
    var timeString = "当前时间：" + year + "年" + month + "月" + day + "日 " + hours + ':' + minutes + ':' + seconds; // 更新时间字符串
    document.getElementById('time').innerText = timeString;
}

// 每秒更新时间
setInterval(updateTime, 1000);

// 新函数用于检查更新
function checkUpdate() {
    fetch('gx.php')
        .then(response => response.text())
        .then(data => {
            if(data !== "当前已是最新版本") {
                document.getElementById('update').innerText = data;
            } else {
                document.getElementById('update').innerText = '';
            }
        });
}

// 在页面加载时检查更新
checkUpdate();
