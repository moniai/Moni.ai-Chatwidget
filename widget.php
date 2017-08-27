<html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


<script language="javascript">
document.body.innerHTML+='<div id="moniaiwidget"></div>';$("#moniaiwidget").load("https://moni.ai/widget/indexs.php<?php if (isset($_GET["branding"])) echo "?branding=" . $_GET["branding"];  ?>",function(){$(".jor-widget").css({width:"300px",position:"fixed",bottom:0,right:"10%","z-index":99999});var b={sid:Math.random().toString(16).slice(2),apiUrl:"https://api.moni.ai/widget/index.php",showAnswer:function(a){$(".panel-body").append('<div class="container-message"><div class="message-chat operator">'+a+"</div></div>");a=document.getElementById("msgbody");
a.scrollTop=a.scrollHeight;$(".nowTyping").remove()},showQuestion:function(a){$(".panel-body").append('<div class="container-message  clearfix"><div class="message-chat client pull-right">'+a+"</div></div>");a=document.getElementById("msgbody");a.scrollTop=a.scrollHeight;$("#m").val("");$("#msgbody").append('<div class="loader nowTyping"><span></span><span></span><span></span></div>')},askQuestion:function(a){b.showQuestion(a);$.ajax({url:b.apiUrl,dataType:"JSON",data:{sessionid:this.sid,widget:moniaiWidgetConfigs.id,
text:a},type:"GET",crossDomain:!0,success:function(a){b.showAnswer(a.text)}})}};$(".panel-heading").click(function(){$(".panel-collapse").slideToggle(300).addClass("in");$(".fa-chevron-down").hasClass("hidden")?($(".fa-chevron-down").removeClass("hidden"),$(".fa-chevron-up").addClass("hidden")):($(".fa-chevron-down").addClass("hidden"),$(".fa-chevron-up").removeClass("hidden"))});moniaiWidgetConfigs.openOnLoad&&setTimeout(function(){$('.panel-collapse:not(".in")').collapse("show");$(".fa-chevron-down").removeClass("hidden");
$(".fa-chevron-up").addClass("hidden")},4E3);moniaiWidgetConfigs.moniaiWelcome.enabled&&setTimeout(function(){b.showAnswer(moniaiWidgetConfigs.moniaiWelcome.text)},1E3);moniaiWidgetConfigs.autoAsk.enabled&&setTimeout(function(){b.askQuestion(moniaiWidgetConfigs.autoAsk.question)},1E3);$("#chat").submit(function(a){a.preventDefault();a=$("#m").val();b.askQuestion(a)})})


</script></html>