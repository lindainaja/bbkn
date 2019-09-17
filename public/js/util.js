function ucfirst(str,lower){
	if(lower){
		str=str.toLowerCase();
	}
	return str.replace(/(\b\w)/gi,function(m){return m.toUpperCase();})
}