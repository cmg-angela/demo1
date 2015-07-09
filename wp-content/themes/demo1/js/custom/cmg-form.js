//------------------- for clearing and replacing text in form input fields and textareas -------------------//
	function removeText(formField) {
	  if (formField.defaultValue==formField.value) { formField.value = "" }
	}
	function replaceText(formField) {
	  if (formField.value=="") { formField.value = formField.defaultValue }
	}
	function clearOptionals(formFields){
		fields = formFields.split(',')
		for(i=0;i<fields.length;i++){
			if (fields[i].charAt(0) == ' ') {
				fields[i] = fields[i].substring(1);
			}
			removeText(document.getElementById(fields[i]));
		}
	}


//------------------- Form Validation -------------------//

	function MM_findObj(n, d) { //v4.01
	  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
	    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
	  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
	  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
	  if(!x && d.getElementById) x=d.getElementById(n); return x;
	}

	// modifed version of YY_checkform which includes code for email verification
	// fixed issue with multiple forms on a single page
	function YY_checkform() { //v4.71
	//copyright (c)1998,2002 Yaromat.com
	  var a=arguments,oo=true,v='',s='',err=false,r,o,at,o1,t,i,j,ma,rx,rx2,rx3,cd,cm,cy,dte;
	  for (i=1; i<a.length;i=i+4){
	    if (a[i+1].charAt(0)=='#'){r=true; a[i+1]=a[i+1].substring(1);}else{r=false}
	    //o=MM_findObj(a[i].replace(/\[\d+\]/ig,""));
	    //o1=MM_findObj(a[i+1].replace(/\[\d+\]/ig,""));
		 o=document.forms[a[0]].elements[a[i]];
	    o1=document.forms[a[0]].elements[a[i+1]];
		 v=o.value;t=a[i+2];dv = o.defaultValue;
	    if (o.type=='text'||o.type=='password'||o.type=='hidden'){
	      if ((r&&v.length==0)||v==dv){err=true}
	      if (v.length>0)
	      if (t==1){ //fromto
	        ma=a[i+1].split('_');if(isNaN(v)||v<ma[0]/1||v > ma[1]/1){err=true}
	      } else if (t==2){
	        rx=new RegExp("^[\\w\.=-]+@[\\w\\.-]+\\.[a-zA-Z]{2,4}$");if(!rx.test(v))err=true;
	      } else if (t==3){ // date
	        ma=a[i+1].split("#");at=v.match(ma[0]);
	        if(at){
	          cd=(at[ma[1]])?at[ma[1]]:1;cm=at[ma[2]]-1;cy=at[ma[3]];
	          dte=new Date(cy,cm,cd);
	          if(dte.getFullYear()!=cy||dte.getDate()!=cd||dte.getMonth()!=cm){err=true};
	        }else{err=true}
	      } else if (t==4){ // time
	        ma=a[i+1].split("#");at=v.match(ma[0]);if(!at){err=true}
	      } else if (t==5){ // check this 2
	            if(o1.length)o1=o1[a[i+1].replace(/(.*\[)|(\].*)/ig,"")];
	            if(!o1.checked){err=true}
	      } else if (t==6){ // the same
	            if(v!=MM_findObj(a[i+1]).value){err=true}
	      } else if (t==7) { // phone number
				rx2=new RegExp(/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/);if(!rx2.test(v))err=true;
			} else if (t==8) { // special case for validating and verifying email
				rx3=new RegExp("^[\\w\.=-]+@[\\w\\.-]+\\.[a-zA-Z]{2,4}$");if(!rx3.test(v))err=true; // validate format
				if(v != document.getElementById("verify_email").value){	// verify email
					err=true;
					s+="Please verify email address\n";
				}
			}
	    } else
	    if (!o.type&&o.length>0&&o[0].type=='radio'){
	          at = a[i].match(/(.*)\[(\d+)\].*/i);
	          o2=(o.length>1)?o[at[2]]:o;
	      if (t==1&&o2&&o2.checked&&o1&&o1.value.length/1==0){err=true}
              if (t==1&&o2&&o2.checked&&o2.value=='No'){err=true}
	      if (t==2){
	        oo=false;
	        for(j=0;j<o.length;j++){oo=oo||o[j].checked}
	        if(!oo){s+='* '+a[i+3]+'\n'}
	      }
	    } else if (o.type=='checkbox'){
	      if((t==1&&o.checked==false)||(t==2&&o.checked&&o1&&o1.value.length/1==0)){err=true}
	    } else if (o.type=='select-one'||o.type=='select-multiple'){
	      if(t==1&&o.selectedIndex/1==0){err=true}
	    }else if (o.type=='textarea'){
	      if(v.length<a[i+1] || v == 'Comments: *' || v == ''){err=true}
	    }
	    if (err){s+=a[i+3]+'\n'; err=false}
	  }
	  if (s!=''){alert('Please complete the following required fields:\n\n'+s)}
	  document.MM_returnValue = (s=='');
	}

String.prototype.trim = function () {
return this.replace(/^\s*|\s*$/,"");
}

if (window.addEventListener) {
	window.addEventListener("load", pop_mc, false);
} else if (window.attachEvent) {	// IE 7/8 and below
	(function(){var e=document.createStyleSheet(),t=function(t,n){var r=document.all,i=r.length,s,o=[];e.addRule(t,"foo:bar");for(s=0;s<i;s+=1){if(r[s].currentStyle.foo==="bar"){o.push(r[s]);if(o.length>n){break}}}e.removeRule(0);return o};if(document.querySelectorAll||document.querySelector){return}document.querySelectorAll=function(e){return t(e,Infinity)};document.querySelector=function(e){return t(e,1)[0]||null}})()
  	window.attachEvent('onload', pop_mc);
}

function pop_mc(sel,ops_ceiling) {
    if(typeof sel != "string") { sel = "#mc"; }
    if (document.querySelector(sel) === null) { return false; }
	 if(typeof ops_ceiling != "number") { ops_ceiling = 2; }

    var c_1, c_2, c_3;
    var ops = ['+', '-', '&times;'];
    c_1 = Math.floor((Math.random() * 5) + 5);
    c_2 = Math.floor((Math.random() * 5) + 1);
    c_3 = Math.floor((Math.random() * ops_ceiling) + 1);
    document.querySelector(sel + " #mc_form_c_1").value = c_1;
    document.querySelector(sel + " #mc_form_c_2").value = c_2;
    document.querySelector(sel + " #mc_form_c_3").value = c_3;
    document.querySelector(sel + " #mc_form_op").innerHTML = ops[c_3 - 1];
}