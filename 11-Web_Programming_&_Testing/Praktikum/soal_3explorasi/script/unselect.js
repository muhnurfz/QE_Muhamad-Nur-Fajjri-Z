 function disableSelection
 (target){
if (typeof target.onselectstart!="undefined") //IE route
��� target.onselectstart=function(){return false}

else if (typeof target.style.MozUserSelect!="undefined") 
��� target.style.MozUserSelect="none"

else //All other route (ie: Opera)
��� target.onmousedown=function(){return false}
target.style.cursor = "default"

}