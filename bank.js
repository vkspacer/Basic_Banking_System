function click1(a1,counter,a2,arrk,val,valbal){
	for(i=1;i<=10;i++){
		if(i!=counter){
			document.getElementsByTagName("tr")[i].style.display="none";
		}
	}
	document.getElementById(a2).style.display="none";
	var tb=document.getElementById("form");
	var div=document.createElement("div");
	var sel=document.createElement("select");
	var tr=document.getElementById(a1);
	tb.appendChild(div);
	div.innerHTML="Select the reciever";
	var att=document.createAttribute("class");
	att.value="container-md h3";
	div.setAttributeNode(att);
	div.appendChild(sel);
	for(i=0;i<arrk.length;i++){
		if(arrk[i]!=val){
		var opt=document.createElement("option");
		sel.appendChild(opt);
		opt.innerHTML=arrk[i];
	}
	}
	var attsel=document.createAttribute("id");
	attsel.value="sel1";
	sel.setAttributeNode(attsel);
	var tb1=document.getElementById("form");
	var div1=document.createElement("div");
	div1.innerHTML="Select Amount you want to sent";
	var sel1=document.createElement("select");
	tb1.appendChild(div1);
	var att1=document.createAttribute("class");
	att1.value="container-md h3";
	div1.setAttributeNode(att1);
	div1.appendChild(sel1);
	j=0
	for(i=1;i<=10;i++){
		var opt=document.createElement("option");
		sel1.appendChild(opt);
		j=j+1000;
		opt.innerHTML=j;
	}
	var attsel1=document.createAttribute("id");
	attsel1.value="sel2";
	sel1.setAttributeNode(attsel1);
	var tb2=document.getElementById("form");
	var div2=document.createElement("div");
	tb2.appendChild(div2);
	var att2=document.createAttribute("class");
	att2.value="container mx-auto mb-5";
	div2.setAttributeNode(att2);
	var but=document.createElement("input");
	but.innerHTML="PROCEED";
	var attbut=document.createAttribute("class");
	attbut.value="btn btn-secondary";
	but.setAttributeNode(attbut);
	var attbutid=document.createAttribute("id");
	attbutid.value="butcust";
	but.setAttributeNode(attbutid);
	
	var attbut1=document.createAttribute("type");
	attbut1.value="submit";
	but.setAttributeNode(attbut1);
	var attbut3=document.createAttribute("name");
	attbut3.value="submit";
	but.setAttributeNode(attbut3);
	var attbut2=document.createAttribute("onclick");
	attbut2.value="a()";
	but.setAttributeNode(attbut2);
	div2.appendChild(but);	
	var div4=document.createElement("div");
	div4.innerHTML=val;
	but.appendChild(div4);
	var attbn=document.createAttribute("id");
	attbn.value="idval";
	div4.setAttributeNode(attbn);
	var div5=document.createElement("div");
	div5.innerHTML=valbal;
	but.appendChild(div5);
	var attbn1=document.createAttribute("id");
	attbn1.value="idvalbal";
	div5.setAttributeNode(attbn1);
}
function a(){
	var a=confirm("Do you really want to proceed");
	if(a==true){
		var b=document.getElementById("sel1").value;
		var c=parseInt(document.getElementById("sel2").value);
		var d=document.getElementById("idval").innerHTML;
		var e=parseInt(document.getElementById("idvalbal").innerHTML);
		var g=e-c;
		localStorage.setItem("val1",1);
		window.location="trans.php?sender="+d+"&receiver="+b+"&balsender="+e+"&balreceiver="+c+"&newbalsender="+g+"&count="+1;
	}
}
