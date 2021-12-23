<script type="text/javascript">
    function getcontent()
     {
         var xmlHttp = new XMLHttpRequest();
         xmlHttp.open("GET", "list.php", false);
         xmlHttp.send(null);

         var element = document.getElementById("content");
         element.innerHTML = xmlHttp.responseText;
     }

     function hidecontent()
     {
         var element = document.getElementById("content");
         element.innerHTML="";
     }
</script>

<form>
    <input onclick = "getcontent();" type="button" value = "Get Content" /> &nbsp; &nbsp; &nbsp;
    <input onclick = "hidecontent();" type="button" value ="Hide Content" />
</form>
<div id="content"></div>