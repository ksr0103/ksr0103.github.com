<!doctype html>
<html>
  <head>
    <script type="text/javascript">
        var t = new Date();
        var currentDate = t.getFullYear() + "년 " + ( t.getMonth() + 1 ) + "월 " + t.getDate() + "일";
        var currentTime = t.getHours() + "시 " + t.getMinutes() + "분 " + t.getSeconds() + "초";
        var result = document.getElementById("time-result");
        result.innerHTML = "오늘 날짜는 " + currentDate + ", 시간은 " + currentTime + " 입니다.";
    </script>
  </head>
  <body>
    <p id="time-result"></p>
  </body>
</html>
