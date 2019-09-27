function ucfirst(str,lower){
	if(lower){
		str=str.toLowerCase();
	}
	return str.replace(/(\b\w)/gi,function(m){return m.toUpperCase();})
}

// function option2data(selector) {
// 	let objs = [];
// 	selector.each((i,j)=>{
// 		let item = {
			
// 		};
// 		objs.push(item);
// 	});

// 	return objs;
// }