<span id=tick2>			
<script>
				function show2(){
				if (!document.all&&!document.getElementById)
				return
				thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
				var Digital=new Date()
				var hours=Digital.getHours()
				var minutes=Digital.getminutes()
				var seconds=Digital.getSeconds()
				var dn="Pm"
				if (hours<12)
				dn="Am"
				if (hours>12)
				hours=hours-12
				if (hours==0)
				hours=12
				if (minutes<=9)
				minutes="0"+minutes
				if (seconds<=9)
				seconds="0"+seconds
				var ctime=hours+":"+minutes+":"+seconds+" "+dn
				thelement.innerHTmL=ctime
				setTimeout("show2()",1000)
				}
				window.onload=show2
				//-->
</script>
</span>
&nbsp;|&nbsp;Today is
	      <?php
            $date = new DateTime();
            echo $date->format('l, F jS, Y');
          ?>

 
   
